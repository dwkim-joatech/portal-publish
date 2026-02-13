<template>
  <div
    :class="[
      'content-stretch flex flex-col h-[50px] items-center justify-center relative shrink-0 px-[10px]',
      isSelect ? 'border-b-2 border-black border-solid' : ''
    ]"
    :data-node-id="isSelect ? '7939:4042' : '7939:4040'"
    style="min-width: max-content;"
  >
    <div
      :class="[
        'flex flex-col font-semibold justify-center leading-[0] not-italic relative shrink-0 text-[14px] text-center whitespace-nowrap',
        isSelect ? 'text-black' : 'text-[#999]'
      ]"
      :data-node-id="isSelect ? '7939:4043' : '7939:4041'"
      style="font-family: 'Inter', 'Noto Sans KR', sans-serif"
    >
      <p class="leading-[normal]">{{ label }}</p>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
  property1: {
    type: String,
    default: 'Default',
    validator: (value) => ['Default', 'Select'].includes(value)
  },
  label: {
    type: String,
    default: '중고장터'
  }
});

const isSelect = computed(() => props.property1 === 'Select');
</script>
