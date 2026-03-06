{{-- 중고장터 내역 (마이페이지) --}}

{{-- GNB --}}
<x-gnb-sub title="중고장터 내역" />

{{-- 필터 + 글작성 버튼 --}}
<div class="flex items-center justify-end gap-[8px] px-[20px] py-[12px] border-b border-gray-border">
  <button class="flex items-center gap-[4px] h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 18h4v-2h-4v2zm-7-10v2h18V8H3zm3 7h12v-2H6v2z"/></svg>
    필터
  </button>
  <a href="{{ asset('junggo-write') }}" class="flex items-center h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    글작성
  </a>
</div>

{{-- 목록 --}}
<div class="px-[20px]">

  <a href="{{ asset('junggo-detail') }}" class="flex gap-[10px] py-[20px] border-b border-gray-light">
    <div class="relative w-[80px] h-[80px] bg-gray-light flex-shrink-0 overflow-hidden">
      <img src="{{ asset('images/image32.png') }}" alt="" class="absolute w-full h-full object-cover" />
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-primary/60 text-primary rounded-full flex items-center">판매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-primary/15 text-primary rounded-full flex items-center">거래중</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal">[탱크/용기] 250,200Kg 소형저장탱크 할부판매 합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-gray-text">
        <span>서울</span>
        <div class="w-px h-[12px] bg-gray-border"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-gray-border"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

</div>
