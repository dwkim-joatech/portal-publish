<template>
  <div
    class="content-stretch flex gap-[10px] h-[60px] items-center px-[20px] py-[18px] relative"
    data-name="gnb/main"
    data-node-id="7939:4251"
  >
    <div
      class="content-stretch flex flex-[1_0_0] gap-[10px] items-center min-h-px min-w-px relative"
      data-node-id="7939:4252"
    >
      <div class="h-[26px] relative shrink-0 w-[47px]" data-name="ci" data-node-id="7939:4253">
        <img
          alt="조아테크"
          class="absolute inset-0 max-w-none object-contain pointer-events-none size-full brightness-0 invert"
          :src="images.ci"
        />
      </div>
    </div>
    <div class="content-stretch flex gap-[10px] items-center relative shrink-0" data-node-id="7939:4255">
      <div
        class="relative shrink-0 size-[24px]"
        data-name="person_24dp_000000_FILL0_wght300_GRAD0_opsz24 2"
        data-node-id="7939:4256"
      >
        <img alt="프로필" class="block max-w-none size-full brightness-0 invert" :src="images.person" />
      </div>
      <div
        class="relative shrink-0 size-[24px]"
        data-name="menu_24dp_FILL0_wght300_GRAD0_opsz24"
        data-node-id="7939:4265"
      >
        <img alt="메뉴" class="block max-w-none size-full brightness-0 invert" :src="images.menu" />
      </div>
    </div>
  </div>
</template>

<script setup>
import { images } from '../constants/images';
</script>
