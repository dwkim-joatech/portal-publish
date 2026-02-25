<div class="bg-white border-[#ddd] border-solid border-t content-stretch flex h-[60px] items-center relative shadow-[0px_-2px_8px_0px_rgba(0,0,0,0.05)]" data-name="navigation">
  <!-- 홈 -->
  <div class="content-stretch flex flex-col gap-[2px] items-center justify-center relative shrink-0 size-[60px]" data-name="navigation/01">
    <div class="relative shrink-0 size-[24px]">
      <img alt="홈" class="block max-w-none size-full" src="{{ asset('images/homeFill.svg') }}" />
    </div>
    <p class="font-normal leading-[normal] not-italic relative shrink-0 text-[12px] text-black text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
      홈
    </p>
  </div>

  <x-navigation-item icon="{{ asset('images/propane.svg') }}" label="탱크" />
  <x-navigation-item icon="{{ asset('images/propaneTank.svg') }}" label="용기" />
  <x-navigation-item icon="{{ asset('images/speed.svg') }}" label="검침" />
  <x-navigation-item icon="{{ asset('images/localShipping.svg') }}" label="배송" />
  <x-navigation-item icon="{{ asset('images/moreHoriz.svg') }}" label="더보기" />
</div>
