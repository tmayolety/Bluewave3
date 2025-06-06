import { applySignalData, applyAlarmData } from './main';

function generateMockSignalData() {
  const signalIds = [4001, 4002, 4003, 4007, 4008, 4009, 4010, 4011, 4014,
                     4336, 4338, 4370, 4371, 4372, 4373, 4374, 4377,
                     4699, 4701,
                     2004, 2006, 2007, 2008, 2009, 2010, 2014, 2015, 2016,
                     2026, 2049, 2050, 2071, 2081, 2082, 2083];

  const signals = {};

  for (const id of signalIds) {
    signals[id] = {
      value: (Math.random() * 1000).toFixed(2),
      limits: { Min: 0, Max: 1000 }
    };
  }

  return signals;
}

function generateMockAlarmData() {
  return {
    200: { state: "active", ack: false, muted: false },
    201: { state: "cleared", ack: true, muted: false }
  };
}

export function startMockWebSocket() {
  setInterval(() => {
    const mockSignals = generateMockSignalData();
    const mockAlarms = generateMockAlarmData();

    applySignalData(mockSignals);
    applyAlarmData(mockAlarms);
  }, 3000);
}
