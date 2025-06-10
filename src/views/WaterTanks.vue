<script setup>
    import BasicHorizontalBar from '../components/BasicHorizontalBar.vue'
    import BasicHorizontalBarTotal from '../components/BasicHorizontalBarTotal.vue';
    import TanksMenu from '../submenus/TanksMenu.vue'


</script>

<template>

    <TanksMenu/>

    <section>
        <article style="height: 100vh;">

            <div class="ui grid type1 cols-mini-1 phone-1">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Fresh Water Tanks</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>

                    <div class="ui grid type1 cols-phone-1 gap-sm mg-top-5">

                        <div class="ui grid type1 resp cols-phone-1 pad-no gap-med col phone-1">

                            <BasicHorizontalBar
                                v-bind="{ signalId: 453, unit: 'L', title: 'Port', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 20000, scaleStep: 2000, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'escalated', orientation: 'horizontal' }"></BasicHorizontalBar>

                            <BasicHorizontalBar
                                v-bind="{ signalId: 454, unit: 'L', title: 'Stbd', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 20000, scaleStep: 2000, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'escalated', orientation: 'horizontal' }"></BasicHorizontalBar>
                            
                            <BasicHorizontalBar
                                v-bind="{ signalId: 454, unit: 'L', title: 'Stbd', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 20000, scaleStep: 2000, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'escalated', orientation: 'horizontal' }"></BasicHorizontalBar>    

                            <BasicHorizontalBarTotal
                                v-bind="{ signalId1: 4391, signalId2: 454, signalId3: 454, unit: 'L', title: 'Total Fresh Water', displayScale: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 37000, scaleStep: 3700, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'escalated', orientation: 'horizontal' }"></BasicHorizontalBarTotal>

                        </div>

                    </div>

                </div>
                
            </div>
            
        </article>
    </section>
</template>

<style >
.canvas-container {
  width: 96vw;
  height: 250px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #0a1e2b!important;
}

canvas {
  width: 100% !important;
  height: 100% !important;
  margin-top: 3em!important;
}

.button-container {
  display: flex;
  justify-content: center;
  padding: 0.1em;
  gap: 0.5em;
  position: absolute;
  top: 3px;
  right: 5px;
}

.ui.btn.mini.colored.primary.timeLineButtonWaterTanks {
  width: 50px;
}
</style>