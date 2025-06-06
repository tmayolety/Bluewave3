 <script setup>
    import BasicHorizontalBar from '../components/BasicHorizontalBar.vue'
    import BasicHorizontalBarTotal from '../components/BasicHorizontalBarTotal.vue';
    import TanksMenu from '../submenus/TanksMenu.vue'


</script>

<template>

    <TanksMenu />

    <section>

        <article>

            <div class="ui grid type1 cols-mini-1  phone-1">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Fuel Tanks</font>
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
                                v-bind="{ signalId: 491, unit: 'L', title: 'Tank 11 Port', displayScale: true, displayCapacity: false, color: 'color-fl-brown', scaleBottom: 0, scaleTop: 13750, scaleStep: 1375, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 455, unit: 'L', title: 'Tank 11 Stbd', displayScale: true, displayCapacity: false, color: 'color-fl-brown', scaleBottom: 0, scaleTop: 8500, scaleStep: 850, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 456, unit: 'L', title: 'Tank 12 Port', displayScale: true, displayCapacity: false, color: 'color-fl-brown', scaleBottom: 0, scaleTop: 8500, scaleStep: 850, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 205, unit: 'L', title: 'Tank 12 Stbd', displayScale: true, displayCapacity: false, color: 'color-fl-brown', scaleBottom: 0, scaleTop: 3000, scaleStep: 300, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 300, unit: 'L', title: 'Tank 13 Port', displayScale: true, displayCapacity: false, color: 'color-fl-brown', scaleBottom: 0, scaleTop: 15000, scaleStep: 1500, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 301, unit: 'L', title: 'Tank 13 Stbd', displayScale: true, displayCapacity: true, color: 'color-fl-brown', scaleBottom: 0, scaleTop: 15000, scaleStep: 1500, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                            <BasicHorizontalBarTotal
                                v-bind="{ signalId1: 491, signalId2: 455, signalId3: 456, signalId4: 205, signalId5: 300, signalId6: 298, unit: 'L', title: 'Total Fuel', displayScale: true, color: 'color-fl-brown', scaleBottom: 0, scaleTop: 80000, scaleStep: 8000, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBarTotal>

                        </div>
                    </div>

                </div>


            </div>

        </article>
    </section>
</template>
