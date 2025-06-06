<script setup>
import BasicHorizontalBar from '../components/BasicHorizontalBar.vue'
import TanksMenu from '../submenus/TanksMenu.vue'

</script>

<template>

    <TanksMenu />

    <section>

        <article>


            <div class="ui grid type1 cols-mini-1  phone-1 ">

                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Oil Tanks</font>
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
                                v-bind="{ signalId: 210, unit: 'L', title: 'Clean Oil', displayScale: true, displayCapacity: false, color: 'color-fl-yellow', scaleBottom: 0, scaleTop: 2000, scaleStep: 200, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                            <BasicHorizontalBar
                                v-bind="{ signalId: 209, unit: 'L', title: 'Dirty Oil', displayScale: true, displayCapacity: false, color: 'color-fl-brown', scaleBottom: 0, scaleTop: 1100, scaleStep: 100, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                        </div>
                    </div>

                </div>



         
            </div>

            <div class="ui grid type1 cols-mini-1  phone-1 mg-top-40">

                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Waste Tanks</font>
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
                                v-bind="{ signalId: 210, unit: 'L', title: 'Bilge Tank', displayScale: true, displayCapacity: false, color: 'color-fl-dark', scaleBottom: 0, scaleTop: 2000, scaleStep: 200, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                            <BasicHorizontalBar
                                v-bind="{ signalId: 209, unit: 'L', title: 'Sludge Tank', displayScale: true, displayCapacity: false, color: 'color-fl-dark', scaleBottom: 0, scaleTop: 1100, scaleStep: 100, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                            <BasicHorizontalBar
                                v-bind="{ signalId: 210, unit: 'L', title: 'Aft Sewage Tank', displayScale: true, displayCapacity: false, color: 'color-fl-dark', scaleBottom: 0, scaleTop: 2000, scaleStep: 200, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                            <BasicHorizontalBar
                                v-bind="{ signalId: 209, unit: 'L', title: 'Fwd Sewage Tank', displayScale: true, displayCapacity: false, color: 'color-fl-dark', scaleBottom: 0, scaleTop: 1100, scaleStep: 100, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                        </div>
                    </div>

                </div>

            </div>

        </article>

    </section>
</template>
