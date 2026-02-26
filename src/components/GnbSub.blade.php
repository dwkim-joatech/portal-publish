{{-- Status bar (light theme for white backgrounds) --}}
<div class="h-[40px] relative w-full bg-white" data-name="status/40px">
  <div class="absolute inset-[20%_2.78%_20%_5.56%]" data-name="Material/Android/Status bar content">
    <p class="absolute font-normal leading-normal opacity-90 text-[13px] text-[#999] whitespace-pre-wrap" style="top: 0; left: 0; font-family: 'Roboto', sans-serif;">12:30</p>
    <div class="absolute inset-[20%_2.78%_20%_75.56%]" data-name="bounds">
      <img alt="" class="block max-w-none size-full" src="{{ asset('images/bounds.svg') }}" />
    </div>
    <div class="absolute inset-[35%_17.78%_35%_77.78%]" data-name="wifi">
      <img alt="" class="block max-w-none size-full" src="{{ asset('images/wifi.svg') }}" />
    </div>
    <div class="absolute inset-[35%_11.67%_35%_85%]" data-name="reception">
      <img alt="" class="block max-w-none size-full" src="{{ asset('images/reception.svg') }}" />
    </div>
    <div class="absolute inset-[32.5%_5.56%_35%_92.22%]" data-name="battery">
      <img alt="" class="block max-w-none size-full" src="{{ asset('images/battery.svg') }}" />
    </div>
  </div>
</div>

{{-- Sub GNB header --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]" data-name="gnb/sub">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[24px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full" src="{{ asset('images/keyboardArrowRight.svg') }}" style="transform: scaleX(-1)" />
    </button>
    <p class="font-semibold leading-normal text-[22px] text-black truncate" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">{{ $title }}</p>
  </div>
  <button class="relative shrink-0 size-[24px]">
    <img alt="메뉴" class="block max-w-none size-full" src="{{ asset('images/menu.svg') }}" />
  </button>
</div>
