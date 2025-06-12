// signalStore.js
import { ref, shallowRef } from 'vue'

// Usamos shallowRef para objetos que no necesitan deep reactivity
export const valueRaw = shallowRef({})
export const valueEscalated = shallowRef({})
export const limits = shallowRef({})
export const alarmsMainData = shallowRef({})

// Cache para mantener referencia a objetos existentes y evitar recreación innecesaria
const signalCache = new Map()

export function applySignalData(json) {
  const newRaw = {}
  const newEscalated = {}
  const newLimits = {}
  
  // Procesamiento optimizado con iteración directa
  for (const [key, item] of Object.entries(json)) {
    const signalId = key // Mantenemos como string para acceso directo
    const cached = signalCache.get(signalId)
    
    // Actualización eficiente de valores
    newRaw[signalId] = Number(item.value)
    newEscalated[signalId] = Number(item.value)
    
    // Actualización de límites solo si cambian
    if (!cached?.limits || cached.limits.Min !== item.limits?.Min || cached.limits.Max !== item.limits?.Max) {
      newLimits[signalId] = Object.freeze({ 
        Min: Number(item.limits?.Min || 0),
        Max: Number(item.limits?.Max || 0)
      })
      signalCache.set(signalId, { limits: newLimits[signalId] })
    } else {
      newLimits[signalId] = cached.limits
    }
  }
  
  // Actualización batch de las referencias reactivas
  valueRaw.value = Object.assign({}, valueRaw.value, newRaw)
  valueEscalated.value = Object.assign({}, valueEscalated.value, newEscalated)
  limits.value = Object.assign({}, limits.value, newLimits)
}

export function applyAlarmData(alarmJson) {
  // Usamos shallowRef y asignación directa para mejor rendimiento
  alarmsMainData.value = Object.freeze({ ...alarmJson })
}