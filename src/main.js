import '../framework/css/app.css';
import '../framework/css/utilities.css';
import { createApp, ref, reactive } from 'vue';
import App from './App.vue';
import router from './router';
import { startWebSocketBridge } from './ws-bridge.js';

const app = createApp(App);

// Repositorios reactivos
let limits = reactive({});
let valueRaw = reactive({});
let valueEscalated = reactive({});
let alarmsMainData = ref({});

startWebSocketBridge();

// Función para recibir y aplicar datos de señales (mock inicial para pruebas)
export function applySignalData(json) {
    for (const key in json) {
        if (json.hasOwnProperty(key)) {
            const signalId = parseInt(key);
            const item = json[key];
            const value = parseFloat(item.value);

            if (!valueRaw[signalId] || typeof valueRaw[signalId].value == 'undefined') {
                valueRaw[signalId] = ref(value);
                valueEscalated[signalId] = ref(value);
                limits[signalId] = reactive(item.limits || {});
            } else {
                valueRaw[signalId].value = value;
                valueEscalated[signalId].value = value;
                limits[signalId] = item.limits || {};
            }
        }
    }
}

// Función para aplicar datos de alarmas
export function applyAlarmData(alarmJson) {
    alarmsMainData.value = alarmJson;
}

// Envío al contexto global
app.provide('alarmsMainData', alarmsMainData);
app.provide('getSignalValueRaw', (signalId) => valueRaw[signalId]?.value);
app.provide('getLimits', (signalId) => limits[signalId]);
app.provide('getSignalValueEscalated', (signalId) => valueEscalated[signalId]?.value);

// Router + mount
app.use(router);
app.mount('#app');
