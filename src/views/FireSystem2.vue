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
                                        v-bind="{ signalId1: 10144, signalId2: 10143, title: 'Wheelhouse Console (29)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10146, signalId2: 10145, title: 'Wheelhouse (30)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10148, signalId2: 10147, title: 'Captain´s Cabin (31)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10150, signalId2: 10149, title: 'Sky Lounge (32)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10152, signalId2: 10151, title: 'Upper Guest Stair Lobby (33)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10154, signalId2: 10153, title: 'Upper Day Head (34)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10156, signalId2: 10155, title: 'Chart and Radio Room (35)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10158, signalId2: 10157, title: 'Owners Stateroom (36)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10160, signalId2: 10159, title: 'Guest Stateroom (37)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10162, signalId2: 10161, title: 'Galley (38)', icon: 'heat', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10164, signalId2: 10163, title: 'Crew Stair (39)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10166, signalId2: 10165, title: 'Pantry (40)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10168, signalId2: 10167, title: 'Main Lounge Fwd (41)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10170, signalId2: 10169, title: 'Main Lounge Center (42)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10172, signalId2: 10171, title: 'Main Lounge Aft (43)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10174, signalId2: 10173, title: 'Lower Dayhead (44)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10176, signalId2: 10175, title: 'Lower Guest Stair Lobby (45)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10178, signalId2: 10177, title: 'Master/Gear Lobby (46)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10138, signalId2: 10137, title: 'Wheelhouse Stbd MCP (5)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10140, signalId2: 10139, title: 'Wheelhouse Port MCP (10)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10142, signalId2: 10141, title: 'Crew Stair MCP (12)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>

                                </ul>
                            </div>
                        </div>
                    </div>

              
            </div>
        </article>




    </section>
</template>