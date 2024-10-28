<script setup>
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
</script>

<template>
    <section>
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1 bilgesAppMobile">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Bilges</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>

                    <div class="ui grid cols-mini-1 cols-xl-3 bg-no pad-no gap-med">

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1">
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'LSHSE 01 : Chain locker bilge level', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'LSHSE 02 : Bow trhuster bilge level', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'LSHSE 03 : Cold room bilge level', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'LSHSE 04 : FWD Accomodation area Stbd', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 418, title: 'LSHSE 05 : Stabilizer bilge level Port', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 419, title: 'LSHSE 06 : Stabilizer bilge level Stbd', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 477, title: 'LSHSE 07 : AFT Accomodation area Port', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 476, title: 'LSHSE 08 : ER bilge level', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 17, title: 'LSHSE 09 : AFT void space Port bilge level', icon: 'bilges', size: '20', zeroText: 'Alarm', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 19, title: 'LSHSE 10 : AFT void space Stbd bilge level', icon: 'bilges', size: '20', zeroText: 'Alarm', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'LSHSE 11 : Steering gear room bilge level', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'LSHSE 12 : Garage bilge level Port', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'LSHSE 13 : Garage bilge level Stbd', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'LSHSE 14 : Gymnasium bilge level Port', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 418, title: 'LSHSE 15 : Gymnasium bilge level Stbd', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 419, title: 'LSHSE 16 : Cofferdam bilge level', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 477, title: 'LSHSE 17 : FWD Accomodation area Port', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 476, title: 'LSHSE 18 : AFT Accomodation aread Stbd', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 17, title: 'Sprinkler plant fail', icon: 'flame', size: '20', zeroText: 'Alarm', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 19, title: 'Sprinkler system released', icon: 'flame', size: '20', zeroText: 'Alarm', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 19, title: 'Fire detection power fail', icon: 'flame', size: '20', zeroText: 'Alarm', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 19, title: 'Fire detection common alarm', icon: 'tripping', size: '20', zeroText: 'Alarm', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 19, title: 'Bilge separator alarm', icon: 'tripping', size: '20', zeroText: 'Alarm', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 19, title: 'Bilge separator state', icon: 'bilges', size: '20', zeroText: 'Alarm', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</template>