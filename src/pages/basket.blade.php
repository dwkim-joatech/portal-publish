{{-- 장바구니 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full scale-x-[-1]" src="{{ asset('images/keyboardArrowRight.svg') }}" />
    </button>
    <p class="title-page truncate">장바구니</p>
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

{{-- ===== 판매 제품 섹션 ===== --}}

{{-- 섹션 헤더 --}}
<div class="flex items-center gap-[10px] px-[20px] py-[14px]">
  <div class="size-[22px] rounded-full bg-primary flex items-center justify-center flex-shrink-0">
    <svg width="13" height="13" viewBox="0 0 24 24" fill="white"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
  </div>
  <span class="text-[15px] font-semibold text-black flex-1">판매 제품</span>
  <button class="text-[13px] text-gray-text">선택 삭제</button>
</div>
<div class="border-b border-gray-light"></div>

{{-- 상품 1: 휴콘스 압력조정기 --}}
<div class="px-[20px] pt-[16px] pb-[20px]">
  {{-- 상품명 행 --}}
  <div class="flex items-center gap-[8px] mb-[14px]">
    <div class="size-[22px] rounded-full border border-gray-border flex items-center justify-center flex-shrink-0">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="#bbb"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
    </div>
    <span class="title-sub flex-1">휴콘스 압력조정기 8kg (2단 감압식 일체형)</span>
    <button class="flex-shrink-0 size-[20px] flex items-center justify-center">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="#999"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
    </button>
  </div>
  {{-- 상품 정보 --}}
  <div class="flex gap-[14px]">
    <div class="w-[80px] h-[80px] flex-shrink-0 bg-gray-bg flex items-center justify-center">
      <img src="{{ asset('images/image33.png') }}" alt="휴콘스 압력조정기" class="w-full h-full object-contain p-[6px]" />
    </div>
    <div class="flex flex-col gap-[6px] flex-1">
      <span class="text-[13px] text-gray-text">8KG (280)</span>
      <div class="flex items-baseline gap-[6px]">
        <span class="text-[18px] font-bold text-black">88,000 원</span>
        <span class="text-[12px] text-gray-text">(부가세 포함)</span>
      </div>
      {{-- 수량 선택 --}}
      <div class="flex items-center border border-gray-border h-[36px] w-fit">
        <button class="w-[36px] h-full flex items-center justify-center text-[18px] text-black leading-none border-r border-gray-border">−</button>
        <span class="w-[40px] h-full flex items-center justify-center text-[14px] text-black border-r border-gray-border">1</span>
        <button class="w-[36px] h-full flex items-center justify-center text-[18px] text-black leading-none">+</button>
      </div>
    </div>
  </div>
</div>
<div class="border-b border-gray-light"></div>

{{-- 상품 2: 린나이 콘덴싱1종보일러 --}}
<div class="px-[20px] pt-[16px] pb-[20px]">
  {{-- 상품명 행 --}}
  <div class="flex items-center gap-[8px] mb-[14px]">
    <div class="size-[22px] rounded-full border border-gray-border flex items-center justify-center flex-shrink-0">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="#bbb"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
    </div>
    <span class="title-sub flex-1">린나이 콘덴싱1종보일러 RC620</span>
    <button class="flex-shrink-0 size-[20px] flex items-center justify-center">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="#999"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
    </button>
  </div>
  {{-- 상품 정보 --}}
  <div class="flex gap-[14px]">
    <div class="w-[80px] h-[80px] flex-shrink-0 bg-gray-bg flex items-center justify-center">
      <img src="{{ asset('images/image34.png') }}" alt="린나이 콘덴싱보일러" class="w-full h-full object-contain p-[6px]" />
    </div>
    <div class="flex flex-col gap-[6px] flex-1">
      <span class="text-[13px] text-gray-text">KF(하향식) / RC620-15KF</span>
      <div class="flex items-baseline gap-[6px]">
        <span class="text-[18px] font-bold text-black">561,000 원</span>
        <span class="text-[12px] text-gray-text">(부가세 포함)</span>
      </div>
      {{-- 수량 선택 --}}
      <div class="flex items-center border border-gray-border h-[36px] w-fit">
        <button class="w-[36px] h-full flex items-center justify-center text-[18px] text-black leading-none border-r border-gray-border">−</button>
        <span class="w-[40px] h-full flex items-center justify-center text-[14px] text-black border-r border-gray-border">1</span>
        <button class="w-[36px] h-full flex items-center justify-center text-[18px] text-black leading-none">+</button>
      </div>
    </div>
  </div>
</div>
<div class="border-b border-gray-light"></div>

{{-- ===== 서비스(렌탈) 제품 섹션 ===== --}}

{{-- 섹션 헤더 --}}
<div class="flex items-center gap-[10px] px-[20px] py-[14px]">
  <div class="size-[22px] rounded-full border border-gray-border flex items-center justify-center flex-shrink-0">
    <svg width="12" height="12" viewBox="0 0 24 24" fill="#bbb"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
  </div>
  <span class="text-[15px] font-semibold text-black flex-1">서비스(렌탈) 제품</span>
  <button class="text-[13px] text-gray-text">선택 삭제</button>
</div>
<div class="border-b border-gray-light"></div>

{{-- 상품 3: IoT 원격검침기 --}}
<div class="px-[20px] pt-[16px] pb-[20px]">
  {{-- 상품명 행 --}}
  <div class="flex items-center gap-[8px] mb-[14px]">
    <div class="size-[22px] rounded-full border border-gray-border flex items-center justify-center flex-shrink-0">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="#bbb"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
    </div>
    <span class="title-sub flex-1">IoT 원격검침기(탱크)</span>
    <button class="flex-shrink-0 size-[20px] flex items-center justify-center">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="#999"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
    </button>
  </div>
  {{-- 상품 정보 --}}
  <div class="flex gap-[14px]">
    <div class="w-[80px] h-[80px] flex-shrink-0 bg-gray-bg flex items-center justify-center">
      <img src="{{ asset('images/image35.png') }}" alt="IoT 원격검침기" class="w-full h-full object-contain p-[6px]" />
    </div>
    <div class="flex flex-col gap-[6px] flex-1">
      <span class="text-[13px] text-gray-text">IoT 원격검침기(탱크) / 5년약정<br>월이용료 별도 문의</span>
      {{-- 수량 선택 --}}
      <div class="flex items-center border border-gray-border h-[36px] w-fit">
        <button class="w-[36px] h-full flex items-center justify-center text-[18px] text-black leading-none border-r border-gray-border">−</button>
        <span class="w-[40px] h-full flex items-center justify-center text-[14px] text-black border-r border-gray-border">1</span>
        <button class="w-[36px] h-full flex items-center justify-center text-[18px] text-black leading-none">+</button>
      </div>
    </div>
  </div>
</div>
<div class="border-b border-gray-light"></div>

{{-- 하단 구매 버튼 --}}
<div class="px-[20px] py-[16px] flex gap-[8px]">
  <button class="flex-1 btn-secondary">선택제품 구매</button>
  <button class="flex-1 btn-primary">전체제품 구매</button>
</div>
