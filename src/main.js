import '../framework/css/app.css';
import '../framework/css/utilities.css';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import { startWebSocketBridge } from './ws-bridge.js';
import VueECharts from 'vue-echarts'
import 'echarts'

import {
  valueRaw,
  valueEscalated,
  limits,
  alarmsMainData
} from '../src/services/signalStore.js';

const app = createApp(App);
app.component('v-chart', VueECharts)

startWebSocketBridge();

// Inyección global al contexto Vue
app.provide('alarmsMainData', alarmsMainData);
app.provide('getSignalValueRaw', (signalId) => valueRaw.value[signalId]);
app.provide('getSignalValueEscalated', (signalId) => valueEscalated.value[signalId]);
app.provide('getLimits', (signalId) => limits.value[signalId]);

app.use(router);
app.mount('#app');
