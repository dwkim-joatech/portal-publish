<template>
  <div
    class="content-stretch flex flex-col gap-[4px] h-[60px] items-center justify-center p-[10px] relative shrink-0"
    data-node-id="I7939:2319;7939:4189"
  >
    <div class="relative shrink-0 size-[24px]">
      <img :alt="label" class="block max-w-none size-full" :src="icon" />
    </div>
    <p
      class="font-normal leading-[16px] not-italic relative shrink-0 text-[12px] text-[rgba(255,255,255,0.8)] text-center"
      style="font-family: 'Inter', 'Noto Sans KR', sans-serif"
    >
      {{ label }}
    </p>
  </div>
</template>

<script setup>
defineProps({
  icon: {
    type: String,
    required: true
  },
  label: {
    type: String,
    required: true
  }
});
</script>
