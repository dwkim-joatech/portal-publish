{{-- 중고장터 목록 --}}

{{-- GNB --}}
<x-gnb-sub title="조아테크 서비스" />

{{-- 메뉴 탭 --}}
<x-menu-tab />

{{-- 필터 + 글작성 버튼 --}}
<div class="flex items-center justify-end gap-[6px] px-[20px] pt-[20px] pb-[10px]">
  <button class="flex items-center gap-[4px] h-[30px] px-[10px] bg-white border border-[#bbb] rounded-full text-[13px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 18h4v-2h-4v2zm-7-10v2h18V8H3zm3 7h12v-2H6v2z"/></svg>
    필터
  </button>
  <button class="h-[30px] px-[10px] bg-white border border-[#bbb] rounded-full text-[13px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
    글작성
  </button>
</div>

{{-- 목록 --}}
<div class="px-[20px]">

  {{-- 아이템 1: 판매글 + 거래중 --}}
  <a href="junggo-detail" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
    <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
      <img src="{{ asset('images/image32.png') }}" alt="" class="absolute w-full h-full object-cover" />
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(32,116,226,0.6)] text-[#2074e2] rounded-full flex items-center">판매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(32,116,226,0.15)] text-[#2074e2] rounded-full flex items-center">거래중</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">[탱크/용기] 250,200Kg 소형저장탱크 할부판매 합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-[#999]" style="font-family: 'Inter', sans-serif">
        <span>서울</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

  {{-- 아이템 2: 구매글 + 거래완료 --}}
  <a href="junggo-detail" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
    <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
      <img src="{{ asset('images/image34.png') }}" alt="" class="absolute w-full h-full object-cover" />
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(57,189,40,0.6)] text-[#39bd28] rounded-full flex items-center">구매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(102,102,102,0.15)] text-[#666] rounded-full flex items-center">거래완료</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">[탱크/용기] 200KG 탱크 구합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-[#999]" style="font-family: 'Inter', sans-serif">
        <span>서울</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

  {{-- 아이템 3: 판매글 + 거래중 --}}
  <a href="junggo-detail" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
    <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
      <img src="{{ asset('images/image26.png') }}" alt="" class="absolute w-full h-full object-cover" />
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(32,116,226,0.6)] text-[#2074e2] rounded-full flex items-center">판매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(32,116,226,0.15)] text-[#2074e2] rounded-full flex items-center">거래중</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">[탱크/용기] 250,200Kg 소형저장탱크 할부판매 합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-[#999]" style="font-family: 'Inter', sans-serif">
        <span>서울</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

  {{-- 아이템 4: 구매글 + 거래완료 (이미지 없음) --}}
  <a href="'{{ asset('junggo-detail') }}'" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
    <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden flex items-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ccc"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(57,189,40,0.6)] text-[#39bd28] rounded-full flex items-center">구매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(102,102,102,0.15)] text-[#666] rounded-full flex items-center">거래완료</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">[탱크/용기] 200KG 탱크 구합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-[#999]" style="font-family: 'Inter', sans-serif">
        <span>서울</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

  {{-- 아이템 5: 구매글 + 거래완료 --}}
  <a href="'{{ asset('junggo-detail') }}'" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
    <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
      <img src="{{ asset('images/image28.png') }}" alt="" class="absolute w-full h-full object-cover" />
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(57,189,40,0.6)] text-[#39bd28] rounded-full flex items-center">구매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(102,102,102,0.15)] text-[#666] rounded-full flex items-center">거래완료</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">[탱크/용기] 200KG 탱크 구합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-[#999]" style="font-family: 'Inter', sans-serif">
        <span>서울</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

</div>
