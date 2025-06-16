<script setup>
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
</script>

<template>
    <section>
        <article>
            <div class="ui grid type1 cols-mini-1 mini-1">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no">
                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Water Valves</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine v-bind="{ signalId: 1001, title: 'Water Valve 10', icon: 'valve', size: '20', zeroText: 'Closed', zeroColor: 'secondary', oneText: 'Open', oneColor: 'primary' }"/>
                                <IconTextValueDigitalLine v-bind="{ signalId: 1002, title: 'Water Valve 2', icon: 'valve', size: '20', zeroText: 'Closed', zeroColor: 'secondary', oneText: 'Open', oneColor: 'primary' }"/>
                                <IconTextValueDigitalLine v-bind="{ signalId: 1003, title: 'Water Valve 3', icon: 'valve', size: '20', zeroText: 'Closed', zeroColor: 'secondary', oneText: 'Open', oneColor: 'primary' }"/>
                            </ul>
                        </div>
                    </div>
                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Fuel Valves</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine v-bind="{ signalId: 2001, title: 'Fuel Valve 1', icon: 'valve', size: '20', zeroText: 'Closed', zeroColor: 'secondary', oneText: 'Open', oneColor: 'primary' }"/>
                                <IconTextValueDigitalLine v-bind="{ signalId: 2002, title: 'Fuel Valve 2', icon: 'valve', size: '20', zeroText: 'Closed', zeroColor: 'secondary', oneText: 'Open', oneColor: 'primary' }"/>
                                <IconTextValueDigitalLine v-bind="{ signalId: 2003, title: 'Fuel Valve 3', icon: 'valve', size: '20', zeroText: 'Closed', zeroColor: 'secondary', oneText: 'Open', oneColor: 'primary' }"/>
                            </ul>
                        </div>
                    </div>
                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Oil Valves</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine v-bind="{ signalId: 3001, title: 'Oil Valve 1', icon: 'valve', size: '20', zeroText: 'Closed', zeroColor: 'secondary', oneText: 'Open', oneColor: 'primary' }"/>
                                <IconTextValueDigitalLine v-bind="{ signalId: 3002, title: 'Oil Valve 2', icon: 'valve', size: '20', zeroText: 'Closed', zeroColor: 'secondary', oneText: 'Open', oneColor: 'primary' }"/>
                                <IconTextValueDigitalLine v-bind="{ signalId: 3003, title: 'Oil Valve 3', icon: 'valve', size: '20', zeroText: 'Closed', zeroColor: 'secondary', oneText: 'Open', oneColor: 'primary' }"/>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</template>