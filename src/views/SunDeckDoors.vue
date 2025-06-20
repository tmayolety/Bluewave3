<script setup>
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import IconValue from '../components/IconValue.vue'
import DoorsMenu from '../submenus/DoorsMenu.vue';
</script>

<template>
    <DoorsMenu />
    <section  style="overflow: hidden;">
        <article>

            <div class="ui grid type1 cols-mini-1  mini-1">
                 

                    <div class="ui grid cols-mini-2 pad-no gap-med">

                        <div class="ui col mini-2 bilge-svg-container" style="position: relative;">
                            <div class="ui col">
                                <img src="/ga/doors/sunDeck.svg" alt="Sun Deck Doors Diagram" style="width: 100%; height: 100%; object-fit: contain;" />
    <!-- D1 -  Fwd Port External Door -->
                                <IconValue signalId="477" icon="hatches" size="25" zeroColor="danger" oneColor="success" style="position: absolute; top: 9%; left: 46%;" />
     <!-- D2 - Fwd Stbd External Door -->
                                <IconValue signalId="476" icon="hatches" size="25" zeroColor="danger" oneColor="success" style="position: absolute; top: 79%; left: 46%;" />
     <!-- D3 -  Aft Stbd External Door -->
                                <IconValue signalId="17" icon="hatches" size="25" zeroColor="danger" oneColor="success" style="position: absolute; top: 80%; left: 37%;" />
     <!-- D4 - Aft External Door -->
                                <IconValue signalId="19" icon="hatches" size="25" zeroColor="danger" oneColor="success" style="position: absolute; top: 34%; left: 35%;" />
    <!-- E01 - Extensible Bridge -->
                                <IconValue signalId="19" icon="hatches" size="25" zeroColor="danger" oneColor="success" style="position: absolute; top: 44%; left: 23.5%;" />
                            </div>
                        </div>

                        <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1">
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'D1 - Fwd Port External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'D2 - Fwd Stbd External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'D3 - Aft Stbd External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"></IconTextValueDigitalLine>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1">
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 17, title: 'D4 - Aft External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 19, title: 'E01 - Extensible Bridge', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"></IconTextValueDigitalLine>
                                       </ul>
                                </div>
                            </div>
                        </div>

                    </div>                
            </div>
        </article>
    </section>
</template>

<style scoped>
.bilge-svg-container {
  height: 280px;
}
@media (min-height: 1080px) {
  .bilge-svg-container {
    height: 360px;
  }
}
</style>