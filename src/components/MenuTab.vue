<template>
  <div
    class="bg-white border-[#ddd] border-b border-solid content-stretch flex flex-col items-start justify-end pt-[10px] relative overflow-hidden w-full"
    data-name="menu/tab"
    data-node-id="7939:4030"
  >
    <div
      class="flex flex-nowrap gap-[20px] items-center overflow-x-auto hide-scrollbar relative px-[20px]"
      data-name="tab"
      data-node-id="7939:4031"
    >
      <Tab property1="Select" label="중고장터" />
      <Tab label="쇼핑몰" />
      <Tab label="업계소식" />
      <Tab label="자료실" />
      <Tab label="공지사항" />
      <Tab label="이벤트" />
    </div>
  </div>
</template>

<script setup>
import Tab from './Tab.vue';
</script>
