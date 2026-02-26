{{-- 중고장터 상세 --}}

{{-- GNB --}}
<x-gnb-sub title="중고장터" />

{{-- 본문 콘텐츠 --}}
<div class="flex flex-col gap-[20px] px-[20px] py-[20px]">

  {{-- 제목 영역 --}}
  <div class="flex flex-col gap-[6px]">
    <h1 class="text-[20px] font-semibold text-black leading-normal w-full" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">250,200Kg 소형저장탱크 할부판매 합니다.</h1>
    <div class="flex items-center gap-[6px] text-[13px] text-[#999]" style="font-family: 'Inter', sans-serif">
      <span>서울</span>
      <div class="w-px h-[12px] bg-[#ddd]"></div>
      <span>0105259****</span>
      <div class="w-px h-[12px] bg-[#ddd]"></div>
      <span>2026.01.16</span>
    </div>
    <div class="flex gap-[6px]">
      <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(32,116,226,0.6)] text-[#2074e2] rounded-full flex items-center">판매글</span>
      <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(32,116,226,0.15)] text-[#2074e2] rounded-full flex items-center">거래중</span>
    </div>
  </div>

  {{-- 대표 이미지 --}}
  <div class="relative w-full aspect-square bg-[#eee] overflow-hidden">
    <img src="{{ asset('images/image33.png') }}" alt="" class="absolute w-full h-full object-cover" />
  </div>

  {{-- 본문 내용 --}}
  <div class="text-[14px] text-black leading-[18px] w-full" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
    <p>조아테크 고객님 대상으로 소형탱크 250Kg를 60개월 28,000에 할부판매 합니다.<br>
    (2단감압조정기 + 볼밸브) 포함<br>
    6개단위로 배송합니다.<br>
    현진,서평 탱크선택</p>
  </div>

  {{-- 이전/다음 글 네비게이션 --}}
  <div class="border-t border-b border-[#eee] flex flex-col w-full">
    <div class="flex items-center gap-[10px] py-[10px] border-b border-[#eee]">
      <div class="relative shrink-0 size-[20px]">
        <img alt="" class="block size-full" src="{{ asset('images/keyboardArrowRight.svg') }}" style="transform: rotate(-90deg)" />
      </div>
      <span class="flex-1 text-[12px] text-black leading-normal truncate" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">LPG 50KG 용기 판매합니다.</span>
    </div>
    <div class="flex items-center gap-[10px] py-[10px]">
      <div class="relative shrink-0 size-[20px]">
        <img alt="" class="block size-full" src="{{ asset('images/keyboardArrowRight.svg') }}" style="transform: rotate(90deg)" />
      </div>
      <span class="flex-1 text-[12px] text-black leading-normal truncate" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">200KG 탱크 구합니다.</span>
    </div>
  </div>

  {{-- 댓글 영역 --}}
  <div class="flex flex-col gap-[6px] w-full">
    <div class="flex items-baseline">
      <span class="text-[14px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">댓글</span>
      <span class="text-[14px] text-[#999] ml-[2px]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif"> (총 1개)</span>
    </div>
    <div class="flex gap-[10px]">
      <div class="flex-1 border border-[#ddd] h-[40px] flex items-center px-[10px]">
        <span class="text-[14px] text-[#999]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">댓글 입력</span>
      </div>
      <button class="bg-[#2074e2] text-white text-[14px] font-semibold h-[40px] px-[16px] flex-shrink-0" style="font-family: 'Inter', sans-serif">작성</button>
    </div>
  </div>

  {{-- 댓글 목록 --}}
  <div class="border-b border-[#eee] flex flex-col gap-[6px] pb-[20px]">
    <p class="text-[14px] text-black leading-[18px]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">구매 희망합니다.</p>
    <div class="flex items-center justify-between text-[12px] text-[#666]" style="font-family: 'Inter', sans-serif">
      <span>0102345****</span>
      <span>2026.01.25</span>
    </div>
  </div>

</div>
