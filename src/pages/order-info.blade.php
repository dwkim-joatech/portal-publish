{{-- 결제정보 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full scale-x-[-1]" src="{{ asset('images/keyboardArrowRight.svg') }}" />
    </button>
    <p class="title-page truncate">결제정보</p>
  </div>
  <div class="flex items-center gap-[10px]">
    <button class="relative shrink-0 size-[24px]">
      <img alt="장바구니" class="block size-full" src="{{ asset('images/shoppingBag.svg') }}" />
      <span class="absolute -top-[4px] -right-[4px] min-w-[16px] h-[16px] bg-red-500 text-white text-[10px] font-bold rounded-full flex items-center justify-center px-[3px]">8</span>
    </button>
    <button class="relative shrink-0 size-[24px]" onclick="openSideMenu()">
      <img alt="메뉴" class="block size-full" src="{{ asset('images/menu_sub.svg') }}" />
    </button>
  </div>
</div>

{{-- ===== 판매 제품 정보 ===== --}}
<div class="px-[20px] pt-[16px] pb-[20px]">
  <p class="text-secondary pb-[8px] mb-[14px] border-b border-gray-border">판매 제품 정보</p>

  {{-- 상품 1 --}}
  <p class="text-[15px] font-bold text-black mb-[10px]">휴콘스 압력조정기 8kg (2단 감압식 일체형)</p>
  <div class="flex gap-[12px] mb-[18px]">
    <div class="w-[64px] h-[64px] flex-shrink-0 bg-gray-bg flex items-center justify-center">
      <img src="{{ asset('images/image33.png') }}" alt="휴콘스 압력조정기" class="w-full h-full object-contain p-[4px]" />
    </div>
    <div class="flex flex-col gap-[4px]">
      <span class="text-secondary">8KG (280)</span>
      <div class="flex items-baseline gap-[4px]">
        <span class="text-[16px] font-bold text-black">88,000 원</span>
        <span class="text-[12px] text-gray-text">(부가세 포함)</span>
      </div>
      <span class="text-secondary">수량 : 1개</span>
    </div>
  </div>

  {{-- 상품 2 --}}
  <p class="text-[15px] font-bold text-black mb-[10px]">린나이 콘덴싱1종보일러 RC620</p>
  <div class="flex gap-[12px] mb-[18px]">
    <div class="w-[64px] h-[64px] flex-shrink-0 bg-gray-bg flex items-center justify-center">
      <img src="{{ asset('images/image34.png') }}" alt="린나이 콘덴싱보일러" class="w-full h-full object-contain p-[4px]" />
    </div>
    <div class="flex flex-col gap-[4px]">
      <span class="text-secondary">KF(하향식) / RC620-15KF</span>
      <div class="flex items-baseline gap-[4px]">
        <span class="text-[16px] font-bold text-black">561,000 원</span>
        <span class="text-[12px] text-gray-text">(부가세 포함)</span>
      </div>
      <span class="text-secondary">수량 : 1개</span>
    </div>
  </div>

  {{-- 총 주문금액 --}}
  <div class="flex items-center justify-between py-[12px] border-t border-b border-gray-border">
    <span class="text-secondary">총 주문금액 (부가세 포함)</span>
    <span class="text-[16px] font-bold text-black">649,000 원</span>
  </div>
</div>

{{-- ===== 서비스(렌탈) 제품 정보 ===== --}}
<div class="px-[20px] pt-[16px] pb-[20px]">
  <p class="text-secondary pb-[8px] mb-[14px] border-b border-gray-border">서비스(렌탈) 제품 정보</p>

  {{-- 상품 3 --}}
  <p class="text-[15px] font-bold text-black mb-[10px]">IoT 원격검침기(탱크)</p>
  <div class="flex gap-[12px]">
    <div class="w-[64px] h-[64px] flex-shrink-0 bg-gray-bg flex items-center justify-center">
      <img src="{{ asset('images/image35.png') }}" alt="IoT 원격검침기" class="w-full h-full object-contain p-[4px]" />
    </div>
    <div class="flex flex-col gap-[4px]">
      <span class="text-secondary">IoT 원격검침기(탱크) / 5년약정<br>월이용료 별도 문의</span>
      <span class="text-secondary">수량 : 1개</span>
    </div>
  </div>
  <div class="border-b border-gray-border mt-[14px]"></div>
</div>

{{-- ===== 접수자 정보 ===== --}}
<div class="px-[20px] pt-[20px] pb-[24px]">
  <h2 class="text-[18px] font-bold text-black mb-[16px]">접수자 정보</h2>

  <div class="flex flex-col gap-[10px] text-[14px] text-black">

    {{-- 상호 / 수령인 --}}
    <div class="grid grid-cols-2 gap-[8px]">
      <div class="flex gap-[8px]">
        <span class="text-gray-text flex-shrink-0">상호</span>
        <span>조아</span>
      </div>
      <div class="flex gap-[8px]">
        <span class="text-gray-text flex-shrink-0">수령인</span>
        <span>조아</span>
      </div>
    </div>

    {{-- 휴대폰번호 --}}
    <div class="flex gap-[8px]">
      <span class="text-gray-text flex-shrink-0">휴대폰번호</span>
      <span>01023456789</span>
    </div>

    {{-- 배송지 주소 --}}
    <div class="flex gap-[8px]">
      <span class="text-gray-text flex-shrink-0">배송지 주소</span>
      <span>[05203] 서울 강동구 고덕비즈밸리로 26 (고덕동) 1234호</span>
    </div>

    {{-- 현금영수증 / 결제타입 --}}
    <div class="grid grid-cols-2 gap-[8px]">
      <div class="flex gap-[8px]">
        <span class="text-gray-text flex-shrink-0">현금영수증</span>
        <span>미발행</span>
      </div>
      <div class="flex gap-[8px]">
        <span class="text-gray-text flex-shrink-0">결제타입</span>
        <span>가상계좌</span>
      </div>
    </div>

    {{-- 접수메모 --}}
    <div class="flex gap-[8px]">
      <span class="text-gray-text flex-shrink-0">접수메모</span>
      <span>-</span>
    </div>

  </div>
</div>

{{-- ===== 하단 버튼 ===== --}}
<div class="px-[20px] pb-[24px] flex gap-[10px]">
  <button class="flex-1 btn-primary bg-blue-dark border-blue-dark">주문취소</button>
  <button class="flex-1 btn-primary">주문접수 내역</button>
</div>
