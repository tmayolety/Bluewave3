<script setup>
import IconTwoOptionsDigitalLine from '../components/IconTwoOptionsDigitalLine.vue'
import FireSystemMenu from '../submenus/FireSystemMenu.vue'
</script>

<template>

    <FireSystemMenu/>

    <section style="overflow: hidden;">
        <article style="margin-top:-0.3em">

            <div class="ui grid type1 cols-mini-1 pad-sm gap-sm">

                    <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start" style="margin-top: 0.5em;">
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
                                        v-bind="{ signalId1: 10020, signalId2: 10019, title: 'Crew Mess Room (1)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    
                                        <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10022, signalId2: 10021, title: 'Suitcase Store Fwd (2)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10024, signalId2: 10023, title: 'Guest Cabin Stbd Fwd #2 (3)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10026, signalId2: 10025, title: 'Guest Corridor (4)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10028, signalId2: 10027, title: 'Guest Cabin Stbd Mid #4 (5)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10030, signalId2: 10029, title: 'Understairs Store (6)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10032, signalId2: 10031, title: 'Guest Cabin Stbd Aft #6 (7)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10034, signalId2: 10033, title: 'Suitcase Store Aft (8)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10036, signalId2: 10035, title: 'Steering Gear Compartment (9)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10038, signalId2: 10037, title: 'Lazarette Stbd (10)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10040, signalId2: 10039, title: 'Lazarette Port (11)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10042, signalId2: 10041, title: 'Guest Cabin Port Aft #5 (12)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10044, signalId2: 10043, title: 'Guest Cabin Port Mid #3 (13)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10046, signalId2: 10045, title: 'Guest Cabin Port Fwd #1 (14)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10048, signalId2: 10047, title: 'Laundry (15)', icon: 'heat', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10050, signalId2: 10049, title: 'Engineer´s Cabin (16)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10052, signalId2: 10051, title: 'Crew Cabin Port Aft #4 (17)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10054, signalId2: 10053, title: 'Crew Cabin Port Mid # (18)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10056, signalId2: 10055, title: 'Forepeak (19)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10058, signalId2: 10057, title: 'Spares Locker Fwd (20)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10060, signalId2: 10059, title: 'Crew Cabin Fwd #1 (21)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10062, signalId2: 10061, title: 'Crew Corridor Fwd (22)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10064, signalId2: 10063, title: 'Crew Cabin Stbd Mid #3 (23)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10066, signalId2: 10065, title: 'Crew Cabin Stbd Aft #5 (24)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10068, signalId2: 10067, title: 'Crew Corridor Aft (25)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10070, signalId2: 10069, title: 'Crew Bilge Fwd (26)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10072, signalId2: 10071, title: 'Crew Bilge Aft (27)', icon: 'smoke3', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10130, signalId2: 10129, title: 'Lazarette MCP (129)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10132, signalId2: 10131, title: 'Crew Corridor Fwd MCP (130)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10134, signalId2: 10133, title: 'Suitcase Store Fwd MCP (134)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10136, signalId2: 10135, title: 'Crew Corridor by Stairs MCP (170)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>
                                    <IconTwoOptionsDigitalLine
                                        v-bind="{ signalId1: 10074, signalId2: 10073, title: 'Suitcase Store Aft MCP (42)', icon: 'callpoint2', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OK', zeroColorSignal1: 'success', zeroColorSignal2: 'success', oneTextSignal1: 'Fail', oneTextSignal2: 'Alarm', oneColorSignal1: 'danger', oneColorSignal2: 'danger' }"></IconTwoOptionsDigitalLine>

                                </ul>
                            </div>
                        </div>
                    </div>

            
            </div>
        </article>


    </section>
</template>