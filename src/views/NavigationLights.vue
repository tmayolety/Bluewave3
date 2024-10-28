<script setup>

import IconTwoOptionsDigitalLine from '../components/IconTwoOptionsDigitalLine.vue'

</script>

<template>
    <section>
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1 bilgesAppMobile">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Navigation Lights</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>

                    <div class="ui grid cols-mini-1 cols-xl-3 bg-no pad-no gap-med">

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 radius shadow">
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4338, signalId2: 4336, title: 'Masthead light', icon: 'nav-lights', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OFF', oneTextSignal1: 'Faulty', oneTextSignal2: 'ON', zeroColorSignal1: 'success', zeroColorSignal2: 'secondary', oneColorSignal1: 'danger', oneColorSignal2: 'primary'}"/>                                     
                                        
                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4338, signalId2: 4336, title: 'Masthead light', icon: 'nav-lights', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OFF', oneTextSignal1: 'Faulty', oneTextSignal2: 'ON', zeroColorSignal1: 'success', zeroColorSignal2: 'secondary', oneColorSignal1: 'danger', oneColorSignal2: 'primary'}"/>  

                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4338, signalId2: 4336, title: 'Side light Stbd', icon: 'nav-lights', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OFF', oneTextSignal1: 'Faulty', oneTextSignal2: 'ON', zeroColorSignal1: 'success', zeroColorSignal2: 'secondary', oneColorSignal1: 'danger', oneColorSignal2: 'primary'}"/>                                      
                                        
                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4338, signalId2: 4336, title: 'Side light Port', icon: 'nav-lights', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OFF', oneTextSignal1: 'Faulty', oneTextSignal2: 'ON', zeroColorSignal1: 'success', zeroColorSignal2: 'secondary', oneColorSignal1: 'danger', oneColorSignal2: 'primary'}"/>
                                        
                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4338, signalId2: 4336, title: 'Stern ligth', icon: 'nav-lights', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OFF', oneTextSignal1: 'Faulty', oneTextSignal2: 'ON', zeroColorSignal1: 'success', zeroColorSignal2: 'secondary', oneColorSignal1: 'danger', oneColorSignal2: 'primary'}"/>                          
                                        
                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4338, signalId2: 4336, title: 'Fore anchor light', icon: 'nav-lights', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OFF', oneTextSignal1: 'Faulty', oneTextSignal2: 'ON', zeroColorSignal1: 'success', zeroColorSignal2: 'secondary', oneColorSignal1: 'danger', oneColorSignal2: 'primary'}"/>   

                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4338, signalId2: 4336, title: 'Stern anchor light', icon: 'nav-lights', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OFF', oneTextSignal1: 'Faulty', oneTextSignal2: 'ON', zeroColorSignal1: 'success', zeroColorSignal2: 'secondary', oneColorSignal1: 'danger', oneColorSignal2: 'primary'}"/>                                     
                                        
                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4338, signalId2: 4336, title: 'N.U.C. light', icon: 'nav-lights', size: '20', zeroTextSignal1: 'OK', zeroTextSignal2: 'OFF', oneTextSignal1: 'Faulty', oneTextSignal2: 'ON', zeroColorSignal1: 'success', zeroColorSignal2: 'secondary', oneColorSignal1: 'danger', oneColorSignal2: 'primary'}"/>

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