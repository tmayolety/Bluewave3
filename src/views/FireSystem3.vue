<script setup>
import IconTwoOptionsDigitalLine from '../components/IconTwoOptionsDigitalLine.vue'
import FireSystemMenu from '../submenus/FireSystemMenu.vue'
</script>

<template>

    <FireSystemMenu />

    <section style="overflow: hidden;">
        <article style="margin-top:-0.3em">

            <div class="ui grid type1 cols-mini-1 pad-sm gap-sm">


                    <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start"
                        style="margin-top: 0.5em;">
                        <div class="ui col mini-1 has-col-header-sm radius shadow">
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp">
                                    <li>
                                        <div style="background: rgb(18, 53, 76)" class="col-40 align-middle-center">
                                            <span>Type</span></div>
                                        <div style="background: rgb(18, 53, 76)" class="col-100-min"><span>Name</span>
                                        </div>
                                        <div style="background: rgb(18, 53, 76)" class="col-80 align-middle-center">
                                            <span class="font-bold glow">Status</span></div>
                                        <div style="background: rgb(18, 53, 76)" class="col-80 align-middle-center">
                                            <span class="font-bold glow">Alarm</span></div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-content overflow" style="max-height: 640px; overflow: auto;">

                                <ul class="ui table size-mini resp">
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10222, signalId2: 10221, title: 'Engine Room Port Fwd (47)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10224, signalId2: 10223, title: 'Engine Room Stbd Fwd (48)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10236, signalId2: 10235, title: 'Port Generator (91)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10238, signalId2: 10237, title: 'Stbd Generator (92)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10234, signalId2: 10233, title: 'Engine Room Watchroom (90)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10228, signalId2: 10227, title: 'Jacuzzi (50)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10220, signalId2: 10219, title: 'Engine Room Port MCP (14)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10216, signalId2: 10215, title: 'Engine Room Aft MCP (9)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10240, signalId2: 10239, title: 'Engine Room Watchroom MCP (93)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10232, signalId2: 10231, title: 'Engine Room Port Aft FD (79)', icon: 'flame', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10230, signalId2: 10229, title: 'Engine Room Stbd Aft FD (76)', icon: 'flame', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10226, signalId2: 10225, title: 'Funnel HD (76)', icon: 'heat', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }">
                                    </IconTwoOptionsDigitalLine>
                                </ul>

                            </div>
                        </div>
                    </div>
             
            </div>
        </article>






    </section>
</template>