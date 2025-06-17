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

</script>

<template>
  <section  style="overflow: hidden;">
    <article>
      <div class="ui grid type1 cols-mini-1 pad-lg gap-mini">
        <div class="ui grid cols-mini-1 col mini-1 gap-mini pad-no has-header">
          <header class="ui col">
            <font>Active Alarms</font>
            <span class="gradients">
              <span class="gradient-left"></span>
              <span class="gradient-right"></span>
            </span>
            <span class="dots-left"></span>
            <span class="dots-right"></span>
          </header>
          <div class="ui col mini-1 bg-no h-xl-290 h-mini-650">
            <div class="col-content overflow">
              <ul class="ui table size-sm resp" id="alarmSystemApp">
                <li class="thead">
                  <div class="col-50 align-middle-center"><span>ID</span></div>
                  <div class="col-230-min align-middle-center"><span>Description</span></div>
                </li>
                <li v-for="alarm in alarmsMainData" :key="alarm.alarmId">
                  <div class="col-40 glow align-middle-center" :class="colorAlarmClass(alarm.alarmType, alarm.alarmTriggered)">
                    {{ alarm.alarmId }}
                  </div>
                  <div class="col-200-min align-middle-center glow" :class="colorAlarmClass(alarm.alarmType, alarm.alarmTriggered)">
                    {{ alarm.alarmDescription }}
                  </div>
                  <div class="col-50 align-middle-center dev-statusChange glow pad-no">
                    <button :class="buttonClass(alarm)" style="padding: 0px!important; border:none;">
                      {{ buttonText(alarm) }}
                    </button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>
</template>