<script setup>
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
import SingleLineHeader from '../components/SingleLineHeader.vue'
import SwitchButton from '../components/SwitchButton.vue'
import SetPoint from '../components/SetPoint.vue'
</script>

<template>
    <section style="overflow: hidden;">
        <article>


            <div class="ui grid type1 cols-mini-3 col sm-1 gap-sm">

                <div class="ui grid type1 cols-mini-1 col mini-1 gap-no ">
                    <SingleLineHeader componentTitle="FAN 1" :signalIdBox="401" :NC="1" />
                </div>

                <div class="ui grid type1 cols-mini-1 col mini-1 ">
                    <SingleLineHeader componentTitle="FAN 2" :signalIdBox="401" :NC="1" />
                </div>

                <div class="ui grid type1 cols-mini-1 col mini-1 ">
                    <SingleLineHeader componentTitle="EXTRACTION FAN" :signalIdBox="401" :NC="1" />
                </div>

                <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header">
                    <div class="ui col mini-1 align-top flex-center">
                        
                        <SwitchButton 
                          startSignalId="800"
                          stopSignalId="803"
                          feedbackSignalId="797"
                        />
                        <SetPoint label="Setpoint Fan 1" :min="0" :max="100" :step="1" unit="%" />
                    </div>
                </div>

                <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header">
                    <div class="ui col mini-1 align-top flex-center">
                        
                        <SwitchButton 
                          startSignalId="201"
                          stopSignalId="202"
                          feedbackSignalId="211"
                        />
                        <SetPoint label="Setpoint Fan 2" :min="0" :max="100" :step="1" unit="%" />
                    </div>
                </div>

                <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header">
                    <div class="ui col mini-1 align-top flex-center">
                        
                        <SwitchButton 
                          startSignalId="301"
                          stopSignalId="302"
                          feedbackSignalId="311"
                        />
                        <SetPoint label="Setpoint Extraction Fan" :min="0" :max="100" :step="1" unit="%" />
                    </div>
                </div>

            </div>

            <div class="ui grid cols-mini-3 bg-no pad-no gap-med">

                <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">

                    <div class="col-content overflow">
                        <ul class="ui table size-mini resp">

                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 241, title: 'Fan 1 Status', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }">
                            </IconTextValueDigitalLine>
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
                <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">

                    <div class="col-content overflow">
                        <ul class="ui table size-mini resp">

                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 241, title: 'Fan 2 Status', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }">
                            </IconTextValueDigitalLine>
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
                <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">


                    <div class="col-content overflow">
                        <ul class="ui table size-mini resp">

                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 241, title: 'Extraction Fan Status', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }">
                            </IconTextValueDigitalLine>
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

        </article>
    </section>
</template>