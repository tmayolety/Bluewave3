import '../framework/css/app.css'
import '../framework/css/utilities.css'
import { createApp, ref, reactive } from 'vue'
import App from './App.vue'
import router from './router'
import {isFailed, isLogged} from '../src/store/auth.js'

const app = createApp(App)

let limits = reactive({});
let valueRaw = [];
let valueEscalated = [];
let currentToken = localStorage.getItem('token');
let alarmsMainData = ref()

async function bringValues(json) {
    
    for (var key in json) {
    
            if (json.hasOwnProperty(key)) {
                var item = json[key];
            }
        
        var value = parseFloat(item.escalatedValue)
        
        if(typeof valueRaw[item.signalId] == 'undefined'){

            limits[item.signalId] = reactive({ "LL": item.LL, "L": item.L, "H": item.H, "HH": item.HH, "Min": item.min, "Max": item.max });
            valueRaw[item.signalId] = ref(value);
            valueEscalated[item.signalId] = ref(value);
        
        }else{

           valueRaw[item.signalId].value = value;
           valueEscalated[item.signalId].value = value;
           limits[item.signalId] = { "LL": item.LL, "L": item.L, "H": item.H, "HH": item.HH, "Min": item.min, "Max": item.max };

        }
    }
}

async function getToken(forceRenew = false) {
   
    if (currentToken && !forceRenew) {
        return currentToken;
    }

    let username = localStorage.getItem('username');
    let password = localStorage.getItem('password');

    try {
        const response = await fetch('https://mymirage.etybluewave.com:3000/auth/login', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ username, password })
        });
        const data = await response.json();
        currentToken = data.token;
        localStorage.setItem('token', currentToken);
        return currentToken;
    } catch (error) {
        isLogged.value = false;
        console.error("Error logging in:", error);
        throw new Error("Login failed");
        localStorage.setItem('isLogged', 'false');
        localStorage.setItem('username', '');
        localStorage.setItem('password', '');
    }
}

export async function withToken(fn) {
    try {
        return await fn(await getToken());
    } catch (error) {

        const status = parseInt(error.message, 10);

        if (status === 401) {
            
            return await fn(await getToken(true));
        } else {
           
            throw error;
        }
    }
}

export async function fetchData() {
    return withToken(async (token) => {
        const signalsResponse = await fetch('https://mymirage.etybluewave.com:3000/api/read/signals', {
            method: 'GET',
            headers: { 'Authorization': 'Bearer ' + token }
        });
        if (!signalsResponse.ok) {
            throw new Error(signalsResponse.status);
        }
        const data = await signalsResponse.json();
        bringValues(data);
    });
}

export async function fetchAlarms() {
    return withToken(async (token) => {
        const alarmsResponse = await fetch('https://mymirage.etybluewave.com:3000/api/read/alarms', {
            method: 'GET',
            headers: { 'Authorization': 'Bearer ' + token }
        });
        if (!alarmsResponse.ok) {
            throw new Error(alarmsResponse.status);
        }
        const alarms = await alarmsResponse.json();
        alarmsMainData.value = alarms;
        return alarms;
    });
}

setInterval(async () => {

    if (isLogged.value) {
        try {
            await fetchData();
            await fetchAlarms();
        } catch (error) {
            console.error("Error in periodic data refresh:", error);
        }
    }

}, 6000);

async function initApp() {

    app.provide('alarmsMainData', alarmsMainData);
    app.provide('getSignalValueRaw', (signalId) => valueRaw[signalId]?.value);
    app.provide('getLimits', (signalId) => limits[signalId]);
    app.provide('getSignalValueEscalated', (signalId) => valueEscalated[signalId]?.value);

    app.use(router);
    app.mount('#app');
}

initApp();