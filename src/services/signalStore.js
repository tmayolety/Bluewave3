import { ref } from 'vue';

export const valueRaw = ref({});
export const valueEscalated = ref({});
export const limits = ref({});
export const alarmsMainData = ref({});

export function applySignalData(json) {
    console.log("[applySignalData] Señales recibidas:", Object.keys(json)); 
  for (const key in json) {
    const signalId = parseInt(key);
    const item = json[key];
    const value = parseFloat(item.value);

    if (!valueRaw.value[signalId]) {
      valueRaw.value[signalId] = value;
      valueEscalated.value[signalId] = value;
      limits.value[signalId] = item.limits || {};
    } else {
      valueRaw.value[signalId] = value;
      valueEscalated.value[signalId] = value;
      limits.value[signalId] = item.limits || {};
    }
  }
}

export function applyAlarmData(alarmJson) {
  alarmsMainData.value = alarmJson;
}
