<script setup>
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
</script>

<template>
    <section>
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1 bilgesAppMobile">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Valve System</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>

                    <div class="ui grid cols-mini-1 cols-xl-3 bg-no pad-no gap-med">

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Master Cabinet</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'Lazarette', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'Guest Area', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'Engine Room High Level', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'Engine Room High-High Level', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 418, title: 'Crew Area Cofferdam', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 419, title: 'Crew AV Rack', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 477, title: 'Spares Locker', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 476, title: 'Forepeak', icon: 'bilges', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 17, title: 'Bilge Pump', icon: 'bilges', size: '20', zeroText: 'Stopped', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 19, title: 'Fire Pump', icon: 'flame', size: '20', zeroText: 'Stopped', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>

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