import { withToken } from '@/main';
import Chart from 'chart.js/auto';
import 'chartjs-adapter-date-fns';
import { ref, watch } from 'vue';

export function initializeWaterTankChart(renderDiv, maxYAxis, backgroundColor, borderColor) {
  var WaterTotalRenderDiv = document.getElementById(renderDiv);

  if (!WaterTotalRenderDiv) {
      console.error("Not found chart div.");
      return null;
  }

  const dataWater = {
      datasets: [{
          label: '',
          pointRadius: 0,
          borderWidth: 1.3,
          backgroundColor: backgroundColor,
          borderColor: borderColor,
          fill: true,
          data: []
      }]
  };

  return new Chart(WaterTotalRenderDiv, {
      type: 'line',
      data: dataWater,
      options: {
          plugins: {
              legend: {
                  display: false
              }
          },
          animation: {
              duration: 0
          },
          maintainAspectRatio: false,
          scales: {
              x: {
                  type: "time",
                  time: {
                      unit: 'hour',
                      tooltipFormat: 'HH:mm',
                      displayFormats: {
                          minute: 'HH:mm',
                          hour: 'HH:mm'
                      }
                  },
                  ticks: {
                      major: {
                          enabled: true
                      },
                      maxTicksLimit: 5
                  }
              },
              y: {
                  beginAtZero: true,
                  min: 0,
                  max: maxYAxis
              }
          }
      }
  });
}

export const timelineTimeData = ref('-2d')

export async function getTimelineData(signals, time, rate) {

   return withToken(async (token) => {
   
     const data = JSON.stringify({
       "SignalId": signals,
       "Time": time,
       "Rate": rate
     });
 
     const settings = {
       method: "POST",
       headers: {
         "Content-Type": "application/json",
         "Authorization": `Bearer ${token}`
       },
       body: data
     };
 
     try {
       const response = await fetch("https://etybluewave.com:3000/das/totalsBySignalId", settings);
       const responseData = await response.json();
       return responseData
     } catch (error) {
       //await getToken(true)
       console.error("Error fetching timeline data:", error);
       return null;
     }
   });
 }

export async function updateWaterTankChart(chart, signals, time, rate) {
   const responseData = await getTimelineData(signals, time, rate);
   
   if (responseData) {
    chart.data.datasets.forEach((dataset) => {
      dataset.data = responseData.map(dataPoint => ({
        x: new Date(dataPoint.Name),
        y: dataPoint.Value
      }));
    });
 
     chart.update();
   }
 }