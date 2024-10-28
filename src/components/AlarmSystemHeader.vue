<script setup>
import { ref, inject, watchEffect} from 'vue';

const activeAlarmsClass = ref('')

const alarmsMainData = inject('alarmsMainData')


watchEffect(() => {
  if (alarmsMainData.value && alarmsMainData.value.length > 0) {
    if (alarmsMainData.value.some(alarm => alarm.Status === 9)) {
      activeAlarmsClass.value = 'color-fill-type-danger glow';
    } else {
      activeAlarmsClass.value = '';
    }
  }
});
 

const colorAlarmClass = (alarmType, alarmTriggered) => {
    const combination = `${alarmType}-${alarmTriggered}`;
    switch (combination) {
      case "0-0":
        return "color-bg-type-danger-dark";
      case "0-1":
        return "color-bg-type-danger";
      case "1-0":
        return "color-bg-type-warning2-dark";
      case "1-1":
        return "color-bg-type-warning2";
      default:
        return "";
    }
  }

 const buttonClass = (alarm) => {
    if (alarm.Status === 3) {
      return "ui btn sm primary radius-no resp active";
    } else if (alarm.Status === 2 && alarm.Type !== 1) {
      return "ui btn sm secondary radius-no resp active";
    }
    return "";
  }

  const buttonText = (alarm) => {
    if (alarm.Status === 3) {
      return "Ack";
    } else if (alarm.Status === 2 && alarm.Type !== 1) {
      return "Muted";
    }
    return "";
  }


const toggleActive = () => {
    const element = document.getElementById("headerAlertIcon");
    element.classList.toggle("active");
}

</script>

<template>
    <li class="header--alerts" id="headerAlertIcon">
        <div class="header-section--btn container" :class="activeAlarmsClass" @click="toggleActive">
            <svg class="ui icon " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <g>
                    <path
                        d="M99.22,85.06,54.81,9.68a5.37,5.37,0,0,0-9.35,0L1.05,85.06a4.06,4.06,0,0,0,0,5.26,5.06,5.06,0,0,0,4.68,2.73H94.55a5.06,5.06,0,0,0,4.67-2.73A4.82,4.82,0,0,0,99.22,85.06ZM55.59,77.27c0,.91-.52,1.36-1.56,1.36h-8a1.21,1.21,0,0,1-1.37-1.36v-8a1.21,1.21,0,0,1,1.37-1.36h8c1,0,1.56.46,1.56,1.36Zm0-29.61a11.46,11.46,0,0,1-.39,2.73L52.86,62.86c-.26.91-.77,1.36-1.55,1.36H49.16c-1,0-1.55-.45-1.55-1.36L45.07,50.58a12,12,0,0,1-.39-2.92V40.85c0-1.17.65-1.76,2-1.76h7c1.3,0,2,.59,2,1.76Z">
                    </path>
                </g>
            </svg>

        </div>
        <div class="ui header-popup" id="header-popup-alerts"  @click="toggleActive">
            <div class="ui grid type1 cols-1 pad-no gap-mini singleine">
                <div class="ui grid cols-1 col sm-1 gap-mini pad-no has-header">
                    <header class="ui col">
                        <font>System Alarms</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                        <button class="ui btn sm icon primary colored icon-only active">
                            <svg class="ui icon" id="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <path
                                    d="M98.74,81.26q2.52,2.14,0,4.47l-13,13q-2.33,2.33-4.47,0L50,67.67,18.74,98.74q-2.14,2.52-4.47,0l-13-13q-2.33-2.33,0-4.47L32.33,50,1.26,18.93q-2.33-2.33,0-4.47l13-13.2q2.32-2.33,4.47,0L50,32.33,81.26,1.26c1.56-1.68,3-1.68,4.47,0l13,13q2.33,2.32,0,4.47L67.67,50Z">
                                </path>
                            </svg>
                        </button>
                    </header>

                    <div class="ui col med-1 bg-no">
                        <RouterLink to="/alarms" style="text-decoration: none;">
                          <ul class="ui table size-sm resp" id="headerActiveAlarms">
                            <li v-for="alarm in alarmsMainData" :key="alarm.alarmId">
                              <div class=" glow align-middle-center" :class="colorAlarmClass(alarm.alarmType, alarm.alarmTriggered)"
                               style="width: 3em!important;">
                                {{ alarm.alarmId }}
                              </div>
                              <div class=" align-middle-center glow" :class="colorAlarmClass(alarm.alarmType, alarm.alarmTriggered)" 
                              style="width: 17em!important;">
                                {{ alarm.alarmDescription }}
                              </div>
                              <div class=" align-middle-center dev-statusChange glow pad-no" 
                              style="width: 3em!important;">
                                <button :class="buttonClass(alarm)" style="padding: 0px!important; border:none;">
                                  {{ buttonText(alarm) }}
                                </button>
                              </div>
                            </li>
                          </ul>
                        </RouterLink>
                    </div>
                </div>
            </div>
        </div>
    </li>
</template>