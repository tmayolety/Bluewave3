import router from '@/router';
import { ref } from 'vue';


export const isLogged = ref(false);
export const isFailed = ref(false);

export const initializeAuth = () => {
  isLogged.value = localStorage.getItem('isLogged') === 'true';
};


export const login  = async (username, password) => {

    const data = {
      username: username,
      password: password
    };
    const loginData = JSON.stringify(data);

    const loginResponse = await fetch('https://etybluewave.com:3000/auth/login', {
      method: 'POST',
      crossDomain: true,
      headers: {
        'Content-Type': 'application/json'
      },
      body: loginData
    });

    const resultData = await loginResponse.json();
    const token = resultData.token;

    if (typeof token !== "undefined") {
        isLogged.value = true;
        localStorage.setItem('isLogged', 'true');
        localStorage.setItem('username', username);
        localStorage.setItem('password', password);
        localStorage.setItem('token', token);
    } else {
        isFailed.value = true;
        isLogged.value = false;
        setTimeout(function() { isFailed.value = false }, 500)
        localStorage.setItem('isLogged', 'false');
        localStorage.setItem('username', '');
        localStorage.setItem('password', '');
        localStorage.setItem('token', null);
    }

};

export const logout = () => {
  router.push('/')
  isLogged.value = false;
  localStorage.setItem('isLogged', 'false');
};
