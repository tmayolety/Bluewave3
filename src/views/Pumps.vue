<script setup>
import Pump from '../components/Pump.vue';


</script>

<template>
  <section style="overflow: hidden;">
    <article>
      <div class="ui grid type1 cols-mini-5 gap-med">


        <div class="ui col mini-1 has-col-header-xl radius shadow">
          <header class="col-header size-sm">Q141.Fire and Bilge 1<br />Pump</header>
          <div class="ui grid type1 cols-mini-1 pad-sm gap-sm">
            <div class="ui col mini-1 middle-center">
              <Pump feedbackSignalId="800" startSignalId="801" stopSignalId="802" label="" commandMode="pulse" />
            </div>
          </div>
        </div>

        <div class="ui col mini-1 has-col-header-xl radius shadow">
          <header class="col-header size-sm">0142.Grey W.Blending Pump</header>
          <div class="ui grid type1 cols-mini-1 pad-sm gap-sm">
            <div class="ui col mini-1 middle-center">
              <Pump feedbackSignalId="803" startSignalId="804" stopSignalId="805" label="" commandMode="fixed" />
            </div>
          </div>
        </div>

        <div class="ui col mini-1 has-col-header-xl radius shadow">
          <header class="col-header size-sm">0143.STBD Grey W Transfer Pump</header>
          <div class="ui grid type1 cols-mini-1 pad-sm gap-sm">
            <div class="ui col mini-1 middle-center">
              <Pump feedbackSignalId="806" startSignalId="807" stopSignalId="808" label="" commandMode="pulse" />
            </div>
          </div>
        </div>

        <div class="ui col mini-1 has-col-header-xl radius shadow">
          <header class="col-header size-sm">0144.Black W.Disch. Pump</header>
          <div class="ui grid type1 cols-mini-1 pad-sm gap-sm">
            <div class="ui col mini-1 middle-center">
              <Pump feedbackSignalId="809" startSignalId="810" stopSignalId="811" label="" commandMode="pulse" />
            </div>
          </div>
        </div>

        <div class="ui col mini-1 has-col-header-xl radius shadow">
          <header class="col-header size-sm">0145.Beach Club Drain Pump</header>
          <div class="ui grid type1 cols-mini-1 pad-sm gap-sm">
            <div class="ui col mini-1 middle-center">
              <Pump feedbackSignalId="812" startSignalId="813" stopSignalId="814" label="" commandMode="pulse" />
            </div>
          </div>
        </div>

        <div class="ui col mini-1 has-col-header-xl radius shadow">
          <header class="col-header size-sm">0146.Tender Filling Pump</header>
          <div class="ui grid type1 cols-mini-1 pad-sm gap-sm">
            <div class="ui col mini-1 middle-center">
              <Pump feedbackSignalId="815" startSignalId="816" stopSignalId="817" label="" commandMode="pulse" />
            </div>
          </div>
        </div>

      </div>
    </article>
  </section>

</template>