<script setup>
import Pump from '../components/Pump.vue';


</script>

<template>
<section style="overflow: hidden;">
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no ">
                    <Pump
                      feedbackSignalId="800"    
                      startSignalId="801"     
                      stopSignalId="802"       
                      label="Pump"
                      commandMode="pulse"
                    />

                     <Pump
                      feedbackSignalId="803"    
                      startSignalId="804"     
                      stopSignalId="805"       
                      label="Pump"
                      commandMode="fixed"
                    />


                </div>
            </div>
        </article>
    </section>

</template>