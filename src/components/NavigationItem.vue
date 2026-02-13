<template>
  <div
    class="content-stretch flex flex-col gap-[2px] items-center justify-center relative size-[60px]"
    :data-name="dataName"
    :data-node-id="nodeId"
  >
    <div class="relative shrink-0 size-[24px]" :data-name="iconDataName" :data-node-id="iconNodeId">
      <img :alt="label" class="block max-w-none size-full" :src="icon" />
    </div>
    <p
      class="font-normal leading-[normal] not-italic relative shrink-0 text-[12px] text-black text-center"
      :data-node-id="textNodeId"
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
  },
  dataName: String,
  nodeId: String,
  iconDataName: String,
  iconNodeId: String,
  textNodeId: String
});
</script>
