{{-- 구매하기 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full scale-x-[-1]" src="{{ asset('images/keyboardArrowRight.svg') }}" />
    </button>
    <p class="title-page truncate">구매하기</p>
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
  <p class="text-secondary mb-[14px]">판매 제품 정보</p>

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
  <div class="bg-gray-bg flex items-center justify-between px-[12px] h-[44px]">
    <span class="text-secondary">총 주문금액 (부가세 포함)</span>
    <span class="text-[16px] font-bold text-black">649,000 원</span>
  </div>
</div>
<div class="border-b border-gray-light"></div>

{{-- ===== 서비스(렌탈) 제품 정보 ===== --}}
<div class="px-[20px] pt-[16px] pb-[20px]">
  <p class="text-secondary mb-[14px]">서비스(렌탈) 제품 정보</p>

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
</div>
<div class="border-b border-gray-light"></div>

{{-- ===== 주문자 정보 ===== --}}
<div class="px-[20px] pt-[20px] pb-[24px] flex flex-col gap-[16px]">

  {{-- 섹션 헤더 --}}
  <div class="flex items-center justify-between">
    <h2 class="text-[18px] font-bold text-black">주문자 정보</h2>
    <button class="btn-pill" onclick="location.href='delivery-select'">배송정보 선택</button>
  </div>

  {{-- 결제수단 선택 --}}
  <div class="form-field">
    <x-form-label-required label="결제수단 선택" />
    <div class="flex flex-wrap gap-x-[16px] gap-y-[10px] pt-[4px]">
      <label class="flex items-center gap-[6px] cursor-pointer">
        <input type="radio" name="payment" value="cms" checked class="accent-primary w-[16px] h-[16px]" />
        <span class="text-[14px] text-black">자동이체 CMS</span>
      </label>
      <label class="flex items-center gap-[6px] cursor-pointer">
        <input type="radio" name="payment" value="virtual" class="accent-primary w-[16px] h-[16px]" />
        <span class="text-[14px] text-black">가상계좌</span>
      </label>
      <label class="flex items-center gap-[6px] cursor-pointer">
        <input type="radio" name="payment" value="card" class="accent-primary w-[16px] h-[16px]" />
        <span class="text-[14px] text-black">카드</span>
      </label>
      <label class="flex items-center gap-[6px] cursor-pointer">
        <input type="radio" name="payment" value="etc" class="accent-primary w-[16px] h-[16px]" />
        <span class="text-[14px] text-black">기타</span>
      </label>
    </div>
  </div>

  {{-- 상호 --}}
  <div class="form-field">
    <x-form-label-required label="상호" />
    <div class="form-input-wrapper">
      <input type="text" placeholder="상호 입력" class="form-input" />
    </div>
  </div>

  {{-- 수령인 --}}
  <div class="form-field">
    <x-form-label-required label="수령인" />
    <div class="form-input-wrapper">
      <input type="text" placeholder="수령인 입력" class="form-input" />
    </div>
  </div>

  {{-- 휴대폰번호 --}}
  <div class="form-field">
    <x-form-label-required label="휴대폰번호" />
    <div class="form-input-wrapper">
      <input type="tel" placeholder="휴대폰번호입력" class="form-input" />
    </div>
  </div>

  {{-- 배송지 주소 --}}
  <div class="form-field">
    <x-form-label-required label="배송지 주소" />
    <div class="flex gap-[8px]">
      <div class="form-input-wrapper flex-1">
        <input type="text" placeholder="우편번호" class="form-input" />
      </div>
      <button class="btn-outline px-[14px] text-[13px] flex-shrink-0">우편번호 찾기</button>
    </div>
    <div class="form-input-wrapper">
      <input type="text" placeholder="기본주소" class="form-input" />
    </div>
    <div class="form-input-wrapper">
      <input type="text" placeholder="상세주소" class="form-input" />
    </div>
  </div>

  {{-- 세금계산서 --}}
  <div class="form-field">
    <x-form-label-required label="세금계산서" />
    <div class="relative form-input-wrapper">
      <select class="form-select">
        <option value="">세금계산서 선택</option>
        <option>전자세금계산서</option>
        <option>종이세금계산서</option>
        <option>미발행</option>
      </select>
      <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[12px] size-[16px] pointer-events-none rotate-90" />
    </div>
    <div class="form-input-wrapper">
      <input type="text" placeholder="'-'를 포함하지 않고 입력" class="form-input" />
    </div>
  </div>

  {{-- 주문메모 --}}
  <div class="form-field">
    <x-form-label-required label="주문메모" />
    <div class="border border-gray-border p-[12px] bg-white h-[120px]">
      <textarea placeholder="주문메모 입력" class="w-full h-full text-[14px] text-black outline-none bg-transparent resize-none placeholder-gray-text"></textarea>
    </div>
  </div>

</div>

{{-- ===== 동의 영역 ===== --}}
<div class="border-t border-gray-light px-[20px] py-[16px] flex flex-col gap-[10px]">

  {{-- 전체 동의 --}}
  <label class="flex items-start gap-[10px] cursor-pointer">
    <div class="size-[20px] rounded-full border border-gray-border flex items-center justify-center flex-shrink-0 mt-[1px]">
      <svg width="11" height="11" viewBox="0 0 24 24" fill="#999"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
    </div>
    <span class="text-[14px] font-semibold text-black">전체 동의하기</span>
  </label>

  {{-- 동의 1 --}}
  <label class="flex items-start gap-[10px] cursor-pointer">
    <div class="size-[20px] rounded-full border border-gray-border flex items-center justify-center flex-shrink-0 mt-[1px]">
      <svg width="11" height="11" viewBox="0 0 24 24" fill="#999"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
    </div>
    <span class="text-[13px] text-black leading-snug">주문할 상품의 상품명, 가격, 배송정보 등 판매 조건을 확인하였으며, 구매진행에 동의합니다. <span class="text-red-required">(필수)</span></span>
  </label>

  {{-- 동의 2 --}}
  <label class="flex items-start gap-[10px] cursor-pointer">
    <div class="size-[20px] rounded-full border border-gray-border flex items-center justify-center flex-shrink-0 mt-[1px]">
      <svg width="11" height="11" viewBox="0 0 24 24" fill="#999"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
    </div>
    <span class="text-[13px] text-black">개인정보수집에 동의합니다. <span class="text-red-required">(필수)</span></span>
  </label>

</div>

{{-- 결제하기 버튼 --}}
<div class="px-[20px] pb-[24px]">
  <button class="w-full btn-primary" onclick="location.href='order-info'">결제하기</button>
</div>
