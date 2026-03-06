{{-- 마이페이지 --}}

{{-- GNB --}}
<x-gnb-sub title="마이페이지" />

 {{-- 메뉴 목록 --}}
 <div class="px-[20px]">

  <a href="{{ asset('order-list') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-black">주문접수 내역</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px] text-gray-text" />
  </a>

  <a href="{{ asset('inspection-list') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-primary font-medium">완성검사 신청</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px]" />
  </a>

  <a href="{{ asset('bulk-check-list') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-black">벌크로리점검 신청</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px]" />
  </a>

  <a href="{{ asset('facility-list') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-black">설비투자 예상분석</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px]" />
  </a>

  <a href="{{ asset('debt-list') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-black">채권추심 신청</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px]" />
  </a>

  <a href="{{ asset('my-junggo-list') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-black">중고장터 내역</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px]" />
  </a>

  <a href="{{ asset('simple-card-payment') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-black">간편카드결제 내역</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px]" />
  </a>

  <a href="{{ asset('inquiry-list') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-black">문의 내역</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px]" />
  </a>

  <a href="{{ asset('member-info') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-black">회원정보수정</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px]" />
  </a>

  <a href="{{ asset('delivery-address') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-black">배송지 관리</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px]" />
  </a>

  <a href="{{ asset('favorite-list') }}" class="flex items-center justify-between h-[56px] border-b border-gray-light">
    <span class="text-[15px] text-black">즐겨찾기 관리</span>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="size-[20px]" />
  </a>

 </div>
