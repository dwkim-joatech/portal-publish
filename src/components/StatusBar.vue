<template>
  <div class="h-[40px] relative w-[360px]" data-name="status/40px" data-node-id="7939:2335">
    <div class="absolute contents inset-0" data-name="bar/statusbar" data-node-id="7939:2336">
      <div
        class="absolute contents inset-[20%_2.78%_20%_5.56%]"
        data-name="Material/Android/Status bar content"
        data-node-id="7939:2338"
      >
        <div class="absolute inset-[20%_2.78%_20%_75.56%]" data-name="bounds" data-node-id="7939:2339">
          <img alt="" class="block max-w-none size-full" :src="images.bounds" />
        </div>
        <div class="absolute inset-[35%_17.78%_35%_77.78%]" data-name="wifi" data-node-id="7939:2340">
          <img alt="" class="block max-w-none size-full" :src="images.wifi" />
        </div>
        <div class="absolute inset-[35%_11.67%_35%_85%]" data-name="reception" data-node-id="7939:2352">
          <img alt="" class="block max-w-none size-full" :src="images.reception" />
        </div>
        <div class="absolute inset-[32.5%_5.56%_35%_92.22%]" data-name="battery" data-node-id="7939:2358">
          <img alt="" class="block max-w-none size-full" :src="images.battery" />
        </div>
        <div class="absolute contents inset-[32.5%_85.28%_30%_5.56%]" data-name="time" data-node-id="7939:2365">
          <p
            class="absolute font-normal inset-[32.5%_85.28%_30%_5.56%] leading-[normal] opacity-90 text-[13px] text-[rgba(255,255,255,0.6)] whitespace-pre-wrap"
            data-node-id="7939:2366"
            style="font-family: 'Roboto', sans-serif; font-variation-settings: 'wdth' 100"
          >
            12:30
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { images } from '../constants/images';
</script>
