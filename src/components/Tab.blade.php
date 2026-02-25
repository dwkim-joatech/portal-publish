<div class="content-stretch flex flex-col h-[50px] items-center justify-center relative shrink-0 px-[10px] cursor-pointer {{ $additionalClass }}" data-tab-item style="min-width: max-content;">
  <div class="flex flex-col font-semibold h-full justify-center leading-[0] not-italic relative shrink-0 text-[14px] text-center whitespace-nowrap {{ isset($active) && $active ? 'border-b-[3px] border-black text-black' : '' }}" data-tab-label style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
    <p class="leading-[normal] mt-[3px]">{{ $label }}</p>
  </div>
</div>
