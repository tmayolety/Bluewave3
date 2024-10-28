<script setup>

    import GaugeRender from '../components/Gauge.vue'

</script>

<template>

    <section>

        <article style="padding: 6px!important;">

            <div class="ui grid type1 cols-mini-1">

                <div class="ui grid type1 cols-mini-1 col sm-1 gap-med pad-med has-header">
                    <header class="ui col">
                        <font>Batteries</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>

                </div>
                <div style="display: flex; flex-wrap: wrap;" >

                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Gen 1</header>
                        <div class="ui col mini-1 align-top" style="height: 170px;">
                            <GaugeRender
                                v-bind="{ signalId: 169, unit: 'Vdc', icon: 'batteries', size: '30', marginTopValue: 'mg-top-20', textSizeClass: 'text-size-14', valueMode: 'escalated', isBattery: true }">
                            </GaugeRender>
                        </div>

                    </div>


                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">PS Gen</header>
                        <div class="ui col mini-1 align-top" style="height: 170px;">
                            <GaugeRender
                                v-bind="{ signalId: 577, unit: 'Vdc', icon: 'batteries', size: '30', marginTopValue: 'mg-top-20', textSizeClass: 'text-size-14', valueMode: 'escalated', isBattery: true  }">
                            </GaugeRender>
                        </div>
                    </div>



                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Emergency Gen Main</header>
                        <div class="ui col mini-1 align-top" style="height: 170px;"> 
                                <GaugeRender
                                v-bind="{ signalId: 537, unit: 'Vdc', icon: 'batteries', size: '30', marginTopValue: 'mg-top-20', textSizeClass: 'text-size-14', valueMode: 'escalated',  isBattery: true  }">
                            </GaugeRender>
                        </div>
                    </div>



                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Service</header>
                        <div class="ui col mini-1 align-top" style="height: 170px;">

                                <GaugeRender
                                v-bind="{ signalId: 578, unit: 'Vdc', icon: 'batteries', size: '30', marginTopValue: 'mg-top-20', textSizeClass: 'text-size-14', valueMode: 'escalated', isBattery: true   }">
                            </GaugeRender>
                        </div>
                    </div>


                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Diesel Gen 2</header>
                        <div class="ui col mini-1 align-top" style="height: 170px;">
             
                                <GaugeRender
                                v-bind="{ signalId: 201, unit: 'Vdc', icon: 'batteries', size: '30', marginTopValue: 'mg-top-20', textSizeClass: 'text-size-14', valueMode: 'escalated',  isBattery: true  }">
                            </GaugeRender>
                        </div>
                    </div>


                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Stbd Gen</header>
                        <div class="ui col mini-1 align-top" style="height: 170px;">
                            <GaugeRender
                                v-bind="{ signalId: 202, unit: 'Vdc', icon: 'batteries', size: '30', marginTopValue: 'mg-top-20', textSizeClass: 'text-size-14', valueMode: 'escalated',  isBattery: true   }">
                            </GaugeRender>
                        </div>
                    </div>
                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Emergency Gen Aux</header>
                        <div class="ui col mini-1 align-top" style="height: 170px;">
                                <GaugeRender
                                v-bind="{ signalId: 203, unit: 'Vdc', icon: 'batteries', size: '30', marginTopValue: 'mg-top-20', textSizeClass: 'text-size-14', valueMode: 'escalated',  isBattery: true  }">
                            </GaugeRender>
                        </div>
                    </div>


                </div>

            </div>

        </article>
    </section>

</template>
