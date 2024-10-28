<script setup>
import IconDigitalLine from '../components/IconDigitalLine.vue'
import { logout } from '@/store/auth';

</script>

<template>

    <section>

        <article>

            <div class="ui grid type1 cols-xl-1 cols-mini-1 gap-xl pad-med">

                <div class="ui grid cols-mini-1 col gap-med pad-med has-header col mini-1">

                    <header class="ui col">
                        <font>Mute Alarm Panels</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>

                    <div class="ui grid type1 cols-mini-1 align-start col mini-1 xl-1 gap-med pad-med">

                        <div class="ui grid type1 cols-mini-1 radius shadow col mini-1 gap-no pad-med">

                            <div class="ui col mini-1 has-col-header-xl">
                                <header class="col-header size-lg">Engine Room Swbd Panel</header>
                                <div class="ui grid type1 cols-mini-1 middle-center pad-mini">
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Sound Alarm</span></div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 1061, icon: 'tripping', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Light Alarm</span></div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 1060, icon: 'nav-lights', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Mute Alarm Pushbutton</span>
                                        </div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 99, icon: 'mute', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ui grid type1 cols-mini-1 radius shadow col mini-1 gap-no pad-med">
                            <div class="ui col mini-1 has-col-header-xl">
                                <header class="col-header size-lg">Watch Room Panel</header>
                                <div class="ui grid type1 cols-mini-1 middle-center pad-mini">

                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Light Alarm</span></div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 1062, icon: 'nav-lights', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Mute Alarm PushButton</span>
                                        </div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 98, icon: 'mute', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ui grid type1 cols-mini-1 radius shadow col mini-1 gap-no pad-med">
                            <div class="ui col mini-1 has-col-header-xl">
                                <header class="col-header size-lg">Bridge Panel</header>
                                <div class="ui grid type1 cols-mini-1 middle-center pad-mini">
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Sound Alarm</span></div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 1069, icon: 'tripping', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Light Alarm</span></div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 1070, icon: 'nav-lights', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Mute Alarm PushButton</span>
                                        </div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 511, icon: 'mute', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ui grid type1 cols-mini-1 radius shadow col mini-1 gap-no pad-med">
                            <div class="ui col mini-1 has-col-header-xl">
                                <header class="col-header size-lg">Crew Mess Panel</header>
                                <div class="ui grid type1 cols-mini-1 middle-center pad-mini">
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Sound Alarm</span></div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 1065, icon: 'tripping', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Light Alarm</span></div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 1066, icon: 'nav-lights', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Mute Alarm PushButton</span>
                                        </div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 421, icon: 'mute', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="ui grid type1 cols-mini-1 radius shadow col mini-1 gap-no pad-med">
                            <div class="ui col mini-1 has-col-header-xl">
                                <header class="col-header size-lg">Chief Cabin Panel</header>
                                <div class="ui grid type1 cols-mini-1 middle-center pad-mini">
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Sound Alarm</span></div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 1067, icon: 'tripping', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Light Alarm</span></div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 1068, icon: 'nav-lights', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>
                                    <div class="ui col mini-1 h-mini-150">
                                        <div class="ui h5 align-center mg-bottom-10"><span> Mute Alarm PushButton</span>
                                        </div>
                                        <IconDigitalLine
                                            v-bind="{ signalId: 422, icon: 'mute', size: '70', zeroColor: 'secondary', oneColor: 'danger' }">
                                        </IconDigitalLine>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="ui btn primary xl colored" @click="logout" style="margin-top: .2em;">Log out</button>

                </div>

            </div>
        </article>

    </section>

</template>
