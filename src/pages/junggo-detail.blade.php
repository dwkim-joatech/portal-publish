{{-- 중고장터 상세 --}}

{{-- GNB --}}
<x-gnb-sub title="중고장터" />

{{-- 본문 콘텐츠 --}}
<div class="flex flex-col gap-[20px] px-[20px] py-[20px]">

  {{-- 제목 영역 --}}
  <div class="flex flex-col gap-[6px]">
    <h1 class="text-[20px] font-semibold text-black leading-normal w-full">250,200Kg 소형저장탱크 할부판매 합니다.</h1>
    <div class="flex items-center gap-[6px] text-[13px] text-gray-text">
      <span>서울</span>
      <div class="w-px h-[12px] bg-gray-border"></div>
      <span>0105259****</span>
      <div class="w-px h-[12px] bg-gray-border"></div>
      <span>2026.01.16</span>
    </div>
    <div class="flex gap-[6px]">
      <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-primary/60 text-primary rounded-full flex items-center">판매글</span>
      <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-primary/15 text-primary rounded-full flex items-center">거래중</span>
    </div>
  </div>

  {{-- 대표 이미지 --}}
  <div class="relative w-full aspect-square bg-gray-light overflow-hidden">
    <img src="{{ asset('images/image33.png') }}" alt="" class="absolute w-full h-full object-cover" />
  </div>

  {{-- 본문 내용 --}}
  <div class="text-[14px] text-black leading-[18px] w-full">
    <p>조아테크 고객님 대상으로 소형탱크 250Kg를 60개월 28,000에 할부판매 합니다.<br>
    (2단감압조정기 + 볼밸브) 포함<br>
    6개단위로 배송합니다.<br>
    현진,서평 탱크선택</p>
  </div>

  {{-- 이전/다음 글 네비게이션 --}}
  <div class="border-t border-b border-gray-light flex flex-col w-full">
    <div class="flex items-center gap-[10px] py-[10px] border-b border-gray-light">
      <div class="relative shrink-0 size-[20px]">
        <img alt="" class="block size-full -rotate-90" src="{{ asset('images/keyboardArrowRight.svg') }}" />
      </div>
      <span class="flex-1 text-[12px] text-black leading-normal truncate">LPG 50KG 용기 판매합니다.</span>
    </div>
    <div class="flex items-center gap-[10px] py-[10px]">
      <div class="relative shrink-0 size-[20px]">
        <img alt="" class="block size-full rotate-90" src="{{ asset('images/keyboardArrowRight.svg') }}" />
      </div>
      <span class="flex-1 text-[12px] text-black leading-normal truncate">200KG 탱크 구합니다.</span>
    </div>
  </div>

  {{-- 댓글 영역 --}}
  <div class="flex flex-col gap-[6px] w-full">
    <div class="flex items-baseline">
      <span class="text-[14px] font-semibold text-black">댓글</span>
      <span class="text-[14px] text-gray-text ml-[2px]"> (총 1개)</span>
    </div>
    <div class="flex gap-[10px]">
      <div class="flex-1 border border-gray-border h-[40px] flex items-center px-[10px]">
        <span class="text-[14px] text-gray-text">댓글 입력</span>
      </div>
      <button class="bg-primary text-white text-[14px] font-semibold h-[40px] px-[16px] flex-shrink-0">작성</button>
    </div>
  </div>

  {{-- 댓글 목록 --}}
  <div class="border-b border-gray-light flex flex-col gap-[6px] pb-[20px]">
    <p class="text-[14px] text-black leading-[18px]">구매 희망합니다.</p>
    <div class="flex items-center justify-between text-[12px] text-gray-md">
      <span>0102345****</span>
      <span>2026.01.25</span>
    </div>
  </div>

</div>
