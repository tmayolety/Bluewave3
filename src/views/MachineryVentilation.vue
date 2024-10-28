<script setup>
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
</script>

<template>
    <section>
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1 bilgesAppMobile">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Engine Room Ventilation</font>
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
                                <header class="col-header size-med">FAN 1</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'Fan 1 Status', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4014, size: '20', unit: '%', valueMode: 'escalated', valueDecimals: 1, title: 'Fan 1 Load', icon: 'fan' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'Fan 1 Control', icon: 'fan', size: '20', zeroText: 'Local', zeroColor: 'secondary', oneText: 'Remote', oneColor: 'primary' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'Damper', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 418, title: 'Common Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">FAN 2</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'Fan 2 Status', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4014, size: '20', unit: '%', valueMode: 'escalated', valueDecimals: 1, title: 'Fan 2 Load', icon: 'fan' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'Fan 2 Control', icon: 'fan', size: '20', zeroText: 'Local', zeroColor: 'secondary', oneText: 'Remote', oneColor: 'primary' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'Damper', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 418, title: 'Common Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">EXTRACTION FAN</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'Extraction Fan Status', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4014, size: '20', unit: '%', valueMode: 'escalated', valueDecimals: 1, title: 'Extraction Fan Load', icon: 'fan' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'Extraction Fan Control', icon: 'fan', size: '20', zeroText: 'Local', zeroColor: 'secondary', oneText: 'Remote', oneColor: 'primary' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'Damper', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 418, title: 'Common Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>

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