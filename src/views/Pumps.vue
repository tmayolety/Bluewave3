<script setup>
import Pump from '../components/Pump.vue';

const pumps = [
  { header: 'Q141.Fire and Bilge 1', feedbackSignalId: '800', startSignalId: '801', stopSignalId: '802', commandMode: 'pulse' },
  { header: '0142.Grey W.Blending', feedbackSignalId: '803', startSignalId: '804', stopSignalId: '805', commandMode: 'fixed' },
  { header: '0143.STBD Grey W', feedbackSignalId: '806', startSignalId: '807', stopSignalId: '808', commandMode: 'pulse' },
  { header: '0144.Black W.Disch.', feedbackSignalId: '809', startSignalId: '810', stopSignalId: '811', commandMode: 'pulse' },
  { header: '0145.Beach Club Drain', feedbackSignalId: '812', startSignalId: '813', stopSignalId: '814', commandMode: 'pulse' },
  { header: '0146.Tender Filling', feedbackSignalId: '815', startSignalId: '816', stopSignalId: '817', commandMode: 'pulse' },
  { header: 'Q147.HPU Cooling', feedbackSignalId: '800', startSignalId: '801', stopSignalId: '802', commandMode: 'pulse' },
  { header: 'Q148.Exhaust Cooling 1', feedbackSignalId: '803', startSignalId: '804', stopSignalId: '805', commandMode: 'fixed' },
  { header: 'Q149.Fuel Transfer 1', feedbackSignalId: '806', startSignalId: '807', stopSignalId: '808', commandMode: 'pulse' },
  { header: 'Q150.Lube Oil', feedbackSignalId: '809', startSignalId: '810', stopSignalId: '811', commandMode: 'pulse' },
  { header: 'Q241.Primary Fire Bilge', feedbackSignalId: '812', startSignalId: '813', stopSignalId: '814', commandMode: 'pulse' },
  { header: 'Q243.PS Grey W.', feedbackSignalId: '815', startSignalId: '816', stopSignalId: '817', commandMode: 'pulse' },
];
</script>

<template>
  <section style="overflow: hidden;">
    <article>
      <div class="pumps-grid">
        <div
          v-for="(pump, idx) in pumps"
          :key="idx"
          class="pump-card"
        >
          <Pump
            :header="pump.header"
            :feedbackSignalId="pump.feedbackSignalId"
            :startSignalId="pump.startSignalId"
            :stopSignalId="pump.stopSignalId"
            :commandMode="pump.commandMode"
          />
        </div>
      </div>
    </article>
  </section>
</template>

<style scoped>
.pumps-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 12px;
  width: 100%;
}
.pump-card {
  background: #0a1e2b;
  border-radius: 18px;
  padding: 18px 8px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.18);
  display: flex;
  flex-direction: column;
  align-items: center;
}
@media (max-width: 1400px) {
  .pumps-grid {
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 8px;
  }
}
@media (max-width: 1080px) {
  .pumps-grid {
    grid-template-columns: repeat(auto-fit, minmax(110px, 1fr));
    gap: 4px;
  }
  .pump-card {
    padding: 8px 2px;
    border-radius: 10px;
  }
}
@media (max-width: 700px) {
  .pumps-grid {
    grid-template-columns: repeat(auto-fit, minmax(60px, 1fr));
    gap: 2px;
  }
  .pump-card {
    padding: 2px 0;
    border-radius: 6px;
  }
}
</style>