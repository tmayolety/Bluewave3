<script setup>

    import GaugeRender from '../components/Gauge.vue'

</script>

<template>

    <section  style="overflow: hidden;">

        <article style="padding: 6px!important;">

  
                <div class="ui grid type1 cols-mini-4 col sm-1 gap-sm">

             

                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Gen 1</header>
                        <div class="ui col mini-1 align-top">
                            <GaugeRender :signalId="120" unit="Vdc" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'250px'" :centerY="'64%'" :radius="'120'" :startAngle="200" :endAngle="-25" />
                        </div>

                    </div>


                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">PS Gen</header>
                        <div class="ui col mini-1 align-top">
                            <GaugeRender :signalId="121" unit="Vdc" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'250px'" :centerY="'64%'" :radius="'120'" :startAngle="200" :endAngle="-25" />
                        </div>
                    </div>



                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Emergency Gen Main</header>
                        <div class="ui col mini-1 align-top"> 
                            <GaugeRender :signalId="122" unit="Vdc" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'250px'" :centerY="'64%'" :radius="'120'" :startAngle="200" :endAngle="-25" />
                        </div>
                    </div>



                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Service</header>
                        <div class="ui col mini-1 align-top">
                            <GaugeRender :signalId="123" unit="Vdc" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'250px'" :centerY="'64%'" :radius="'120'" :startAngle="200" :endAngle="-25" />
                        </div>
                    </div>


                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Diesel Gen 2</header>
                        <div class="ui col mini-1 align-top">
                            <GaugeRender :signalId="124" unit="Vdc" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'250px'" :centerY="'64%'" :radius="'120'" :startAngle="200" :endAngle="-25" />
                        </div>
                    </div>


                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Stbd Gen</header>
                        <div class="ui col mini-1 align-top">
                            <GaugeRender :signalId="125" unit="Vdc" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'250px'" :centerY="'64%'" :radius="'120'" :startAngle="200" :endAngle="-25" />
                        </div>
                    </div>
                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm" style="flex: 1; min-width: 50%;">
                        <header class="col-header size-med" style="height: 30px;">Emergency Gen Aux</header>
                        <div class="ui col mini-1 align-top">
                            <GaugeRender :signalId="126" unit="Vdc" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'250px'" :centerY="'64%'" :radius="'120'" :startAngle="200" :endAngle="-25" />
                        </div>
                    </div>


                </div>

       

        </article>
    </section>

</template>
