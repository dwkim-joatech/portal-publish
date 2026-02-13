<template>
  <div
    class="bg-transparent content-stretch flex items-center overflow-x-auto hide-scrollbar p-[20px] relative"
    data-name="menu/app"
    data-node-id="7939:2319"
  >
    <AppMenuItem :icon="images.creditCard" label="간편결제(대면)" />
    <div class="bg-[rgba(255,255,255,0.1)] h-[40px] shrink-0 w-px" data-node-id="I7939:2319;7939:4193" />

    <AppMenuItem :icon="images.manageSearch" label="완성검사" />
    <div class="bg-[rgba(255,255,255,0.1)] h-[40px] shrink-0 w-px" data-node-id="I7939:2319;7939:4198" />

    <AppMenuItem :icon="images.mystery" label="벌크로리점검" />
    <div class="bg-[rgba(255,255,255,0.1)] h-[40px] shrink-0 w-px" data-node-id="I7939:2319;7939:4203" />

    <AppMenuItem :icon="images.cached" label="연료전환" />
    <div class="bg-[rgba(255,255,255,0.1)] h-[40px] shrink-0 w-px" data-node-id="I7939:2319;7939:4208" />

    <AppMenuItem :icon="images.calculate" label="단위변환" />
    <div class="bg-[rgba(255,255,255,0.1)] h-[40px] shrink-0 w-px" data-node-id="I7939:2319;7939:4213" />

    <AppMenuItem :icon="images.trendingUp" label="투자예상분석" />
    <div class="bg-[rgba(255,255,255,0.1)] h-[40px] shrink-0 w-px" data-node-id="I7939:2319;7939:4218" />

    <AppMenuItem :icon="images.accountBalance" label="채권추심" />
    <div class="bg-[rgba(255,255,255,0.1)] h-[40px] shrink-0 w-px" data-node-id="I7939:2319;7939:4223" />

    <AppMenuItem :icon="images.insertChart" label="기화율분석" />
    <div class="bg-[rgba(255,255,255,0.1)] h-[40px] shrink-0 w-px" data-node-id="I7939:2319;7939:4228" />

    <AppMenuItem :icon="images.book2" label="계도물안내" />
  </div>
</template>

<script setup>
import { images } from '../constants/images';
import AppMenuItem from './AppMenuItem.vue';
</script>
