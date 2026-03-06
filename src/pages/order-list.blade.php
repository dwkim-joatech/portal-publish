{{-- 주문접수 내역 --}}

{{-- GNB (장바구니 배지 포함 커스텀) --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] px-[20px]" data-name="gnb/sub">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full scale-x-[-1]" src="{{ asset('images/keyboardArrowRight.svg') }}" />
    </button>
    <p class="font-semibold leading-normal text-[22px] text-black truncate">주문접수 내역</p>
  </div>
  <div class="flex items-center gap-[12px]">
    {{-- 장바구니 아이콘 + 배지 --}}
    <button class="relative size-[28px] flex items-center justify-center">
      <img src="{{ asset('images/shoppingBag.svg') }}" alt="장바구니" class="size-[24px]" />
      <span class="absolute -top-[2px] -right-[4px] min-w-[18px] h-[18px] bg-red-500 text-white text-[10px] font-bold rounded-full flex items-center justify-center px-[3px]">8</span>
    </button>
    {{-- 메뉴 --}}
    <button class="relative shrink-0 size-[24px]">
      <img alt="메뉴" class="block max-w-none size-full" src="{{ asset('images/menu_sub.svg') }}" />
    </button>
  </div>
</div>

{{-- 필터 + 쇼핑몰 바로가기 --}}
<div class="flex items-center justify-end gap-[8px] px-[20px] py-[12px] border-b border-gray-light">
  <button class="flex items-center gap-[4px] h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 18h4v-2h-4v2zm-7-10v2h18V8H3zm3 7h12v-2H6v2z"/></svg>
    필터
  </button>
  <a href="{{ asset('shoppingmall-list') }}" class="flex items-center h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    쇼핑몰 바로가기
  </a>
</div>

{{-- 주문 목록 --}}
<div class="px-[20px]">

  {{-- 주문 아이템 1 --}}
  <div class="py-[20px] border-b border-gray-light flex flex-col gap-[8px]">
    <span class="inline-flex items-center h-[24px] px-[10px] rounded-full bg-blue-light text-primary text-[12px] font-medium self-start">주문확인중</span>
    <div class="flex flex-col gap-[6px] text-[14px] text-black">
      <div class="flex gap-[4px]">
        <span class="text-gray-md shrink-0">주문번호 :</span>
        <span>98</span>
      </div>
      <div class="flex gap-[4px]">
        <span class="text-gray-md shrink-0">결제타입 :</span>
        <span>기타</span>
      </div>
      <div class="flex gap-[4px]">
        <span class="text-gray-md shrink-0">제품 정보 :</span>
        <span class="leading-snug">휴콘스 압력조정기 8kg (2단 감압식 일체형) 외 4개</span>
      </div>
      <div class="flex gap-[4px]">
        <span class="text-gray-md shrink-0">총합계금액 (부가세포함) :</span>
        <span>649,000 원</span>
      </div>
      <div class="flex gap-[4px]">
        <span class="text-gray-md shrink-0">주문접수일 :</span>
        <span>2026-03-03 12:12:12</span>
      </div>
    </div>
  </div>

  {{-- 주문 아이템 2 --}}
  <div class="py-[20px] border-b border-gray-light flex flex-col gap-[8px]">
    <span class="inline-flex items-center h-[24px] px-[10px] rounded-full bg-blue-light text-primary text-[12px] font-medium self-start">주문확인중</span>
    <div class="flex flex-col gap-[6px] text-[14px] text-black">
      <div class="flex gap-[4px]">
        <span class="text-gray-md shrink-0">주문번호 :</span>
        <span>97</span>
      </div>
      <div class="flex gap-[4px]">
        <span class="text-gray-md shrink-0">결제타입 :</span>
        <span>가상계좌</span>
      </div>
      <div class="flex gap-[4px]">
        <span class="text-gray-md shrink-0">제품 정보 :</span>
        <span class="leading-snug">IoT 원격검침기(탱크)</span>
      </div>
      <div class="flex gap-[4px]">
        <span class="text-gray-md shrink-0">총합계금액 (부가세포함) :</span>
        <span>0 원</span>
      </div>
      <div class="flex gap-[4px]">
        <span class="text-gray-md shrink-0">주문접수일 :</span>
        <span>2026-03-03 12:12:12</span>
      </div>
    </div>
  </div>

</div>
