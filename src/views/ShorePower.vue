<script setup>
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
</script>

<template>
    <section>
        <article>
            <div class="ui grid type1 cols-mini-1  phone-1">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Master Cabinet</font>
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
                                <header class="col-header size-med">Input</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 2049, title: 'Shore Power', icon: 'shore', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2029, size: '20', unit: 'Vac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: U ab', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2030, size: '20', unit: 'Vac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: U bc', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2031, size: '20', unit: 'Vac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: U ca', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2032, size: '20', unit: 'Aac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: I a', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2033, size: '20', unit: 'Aac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: I b', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2034, size: '20', unit: 'Aac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: I c', icon: 'shore' }"></IconTextValueAnalogueLine>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Output</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2007, size: '20', unit: 'Hz', valueMode: 'filtered', valueDecimals: 0, title: 'Shore Frequency', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2008, size: '20', unit: 'Vac', valueMode: 'filtered', title: 'Converter: U ab', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2009, size: '20', unit: 'Vac', valueMode: 'filtered', title: 'Converter: U bc', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2010, size: '20', unit: 'Vac', valueMode: 'filtered', title: 'Converter: U ca', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2014, size: '20', unit: 'Iac', valueMode: 'filtered', valueDecimals: 0, title: 'Converter: I a', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2015, size: '20', unit: 'Iac', valueMode: 'filtered', valueDecimals: 0, title: 'Converter: I b', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2016, size: '20', unit: 'Iac', valueMode: 'filtered', valueDecimals: 0, title: 'Converter: I c', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2004, size: '20', unit: 'Kw', valueMode: 'filtered', valueDecimals: 0, title: 'Out Power', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2005, size: '20', unit: '%', valueMode: 'filtered', valueDecimals: 0, title: 'Load', icon: 'shore' }"></IconTextValueAnalogueLine>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header" style="margin-top: 0.5em">
                        <header class="ui col">
                            <font>Slave Cabinet</font>
                            <span class="gradients">
                                <span class="gradient-left"></span>
                                <span class="gradient-right"></span>
                            </span>
                            <span class="dots-left"></span>
                            <span class="dots-right"></span>
                        </header>

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Input</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2096, size: '20', unit: 'Vac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: U ab', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2097, size: '20', unit: 'Vac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: U bc', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2098, size: '20', unit: 'Vac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: U ca', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2099, size: '20', unit: 'Aac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: I a', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2100, size: '20', unit: 'Aac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: I b', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2101, size: '20', unit: 'Aac', valueMode: 'filtered', valueDecimals: 0, title: 'Shore: I c', icon: 'shore' }"></IconTextValueAnalogueLine>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Output</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2074, size: '20', unit: 'Hz', valueMode: 'filtered', valueDecimals: 0, title: 'Shore Frequency', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2075, size: '20', unit: 'Vac', valueMode: 'filtered', valueDecimals: 0, title: 'Converter: U ab', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2076, size: '20', unit: 'Vac', valueMode: 'filtered', valueDecimals: 0, title: 'Converter: U bc', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2077, size: '20', unit: 'Vac', valueMode: 'filtered', valueDecimals: 0, title: 'Converter: U ca', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2081, size: '20', unit: 'Iac', valueMode: 'filtered', valueDecimals: 0, title: 'Converter: I a', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2082, size: '20', unit: 'Iac', valueMode: 'filtered', valueDecimals: 0, title: 'Converter: I b', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2083, size: '20', unit: 'Iac', valueMode: 'filtered', valueDecimals: 0, title: 'Converter: I c', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2071, size: '20', unit: 'Kw', valueMode: 'filtered', valueDecimals: 0, title: 'Out Power', icon: 'shore' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 2072, size: '20', unit: '%', valueMode: 'filtered', valueDecimals: 0, title: 'Load', icon: 'shore' }"></IconTextValueAnalogueLine>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header" style="margin-top: 0.5em">
                        <header class="ui col">
                            <font>Status</font>
                            <span class="gradients">
                                <span class="gradient-left"></span>
                                <span class="gradient-right"></span>
                            </span>
                            <span class="dots-left"></span>
                            <span class="dots-right"></span>
                        </header>

                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 2044, title: 'Info Status', icon: 'shore', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 2045, title: 'Last Transfer Status', icon: 'shore', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }"></IconTextValueDigitalLine>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </article>
    </section>
</template>