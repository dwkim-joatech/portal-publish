<template>
  <div
    class="bg-white border-[#ddd] border-solid border-t content-stretch flex h-[60px] items-center relative shadow-[0px_-2px_8px_0px_rgba(0,0,0,0.05)]"
    data-name="navigation"
    data-node-id="7939:4046"
  >
    <!-- 홈 -->
    <div
      class="content-stretch flex flex-col gap-[2px] items-center justify-center relative shrink-0 size-[60px]"
      data-name="navigation/01"
      data-node-id="7939:4047"
    >
      <div class="relative shrink-0 size-[24px]" data-node-id="I7939:4047;7939:4059">
        <img alt="홈" class="block max-w-none size-full" :src="images.homeFill" />
      </div>
      <p
        class="font-normal leading-[normal] not-italic relative shrink-0 text-[12px] text-black text-center"
        data-node-id="I7939:4047;7939:4061"
        style="font-family: 'Inter', 'Noto Sans KR', sans-serif"
      >
        홈
      </p>
    </div>

    <!-- 탱크 -->
    <NavigationItem
      :icon="images.propane"
      label="탱크"
      data-name="navigation/02"
      node-id="7939:4062"
      icon-node-id="7939:4064"
      text-node-id="7939:4066"
    />

    <!-- 용기 -->
    <NavigationItem
      :icon="images.propaneTank"
      label="용기"
      data-name="navigation/03"
      node-id="7939:4071"
      icon-node-id="7939:4073"
      text-node-id="7939:4075"
    />

    <!-- 검침 -->
    <NavigationItem
      :icon="images.speed"
      label="검침"
      data-name="navigation/04"
      node-id="7939:4080"
      icon-node-id="7939:4082"
      text-node-id="7939:4084"
    />

    <!-- 배송 -->
    <NavigationItem
      :icon="images.localShipping"
      label="배송"
      data-name="navigation/05"
      node-id="7939:4089"
      icon-node-id="7939:4091"
      text-node-id="7939:4093"
    />

    <!-- 더보기 -->
    <NavigationItem
      :icon="images.moreHoriz"
      label="더보기"
      data-name="navigation/06"
      node-id="7939:4098"
      icon-node-id="7939:4100"
      text-node-id="7939:4102"
    />
  </div>
</template>

<script setup>
import { images } from '../constants/images';
import NavigationItem from './NavigationItem.vue';
</script>
