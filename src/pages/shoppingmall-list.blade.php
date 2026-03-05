{{-- 쇼핑몰 목록 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full scale-x-[-1]" src="{{ asset('images/keyboardArrowRight.svg') }}" />
    </button>
    <p class="title-page truncate">조아테크 서비스</p>
  </div>
  <div class="flex items-center gap-[10px]">
    <button class="relative shrink-0 size-[24px]">
      <img alt="장바구니" class="block size-full" src="{{ asset('images/shoppingBag.svg') }}" />
    </button>
    <button class="relative shrink-0 size-[24px]" onclick="openSideMenu()">
      <img alt="메뉴" class="block size-full" src="{{ asset('images/menu_sub.svg') }}" />
    </button>
  </div>
</div>

{{-- 메뉴 탭 --}}
<div class="bg-white border-gray-border border-b border-solid flex flex-col items-start justify-end pt-[10px] relative overflow-hidden w-full">
  <div class="flex flex-nowrap gap-[10px] items-center overflow-x-auto hide-scrollbar relative px-[20px] w-full min-w-0" id="shop-menu-tabs">

    <div class="content-stretch flex flex-col h-[50px] items-center justify-center relative shrink-0 px-[10px] cursor-pointer text-gray-text" data-shop-tab style="min-width: max-content;">
      <div class="flex flex-col font-semibold h-full justify-center leading-[0] not-italic relative shrink-0 text-[14px] text-center whitespace-nowrap" data-shop-tab-label>
        <p class="leading-[normal] mt-[3px]">중고장터</p>
      </div>
    </div>

    <div class="content-stretch flex flex-col h-[50px] items-center justify-center relative shrink-0 px-[10px] cursor-pointer font-bold" data-shop-tab style="min-width: max-content;">
      <div class="flex flex-col font-semibold h-full justify-center leading-[0] not-italic relative shrink-0 text-[14px] text-center whitespace-nowrap border-b-[3px] border-black text-black" data-shop-tab-label>
        <p class="leading-[normal] mt-[3px]">쇼핑몰</p>
      </div>
    </div>

    <div class="content-stretch flex flex-col h-[50px] items-center justify-center relative shrink-0 px-[10px] cursor-pointer text-gray-text" data-shop-tab style="min-width: max-content;">
      <div class="flex flex-col font-semibold h-full justify-center leading-[0] not-italic relative shrink-0 text-[14px] text-center whitespace-nowrap" data-shop-tab-label>
        <p class="leading-[normal] mt-[3px]">입찰정보</p>
      </div>
    </div>

    <div class="content-stretch flex flex-col h-[50px] items-center justify-center relative shrink-0 px-[10px] cursor-pointer text-gray-text" data-shop-tab style="min-width: max-content;">
      <div class="flex flex-col font-semibold h-full justify-center leading-[0] not-italic relative shrink-0 text-[14px] text-center whitespace-nowrap" data-shop-tab-label>
        <p class="leading-[normal] mt-[3px]">자료실</p>
      </div>
    </div>

    <div class="content-stretch flex flex-col h-[50px] items-center justify-center relative shrink-0 px-[10px] cursor-pointer text-gray-text" data-shop-tab style="min-width: max-content;">
      <div class="flex flex-col font-semibold h-full justify-center leading-[0] not-italic relative shrink-0 text-[14px] text-center whitespace-nowrap" data-shop-tab-label>
        <p class="leading-[normal] mt-[3px]">공지사항</p>
      </div>
    </div>

    <div class="content-stretch flex flex-col h-[50px] items-center justify-center relative shrink-0 px-[10px] cursor-pointer text-gray-text" data-shop-tab style="min-width: max-content;">
      <div class="flex flex-col font-semibold h-full justify-center leading-[0] not-italic relative shrink-0 text-[14px] text-center whitespace-nowrap" data-shop-tab-label>
        <p class="leading-[normal] mt-[3px]">조아테크소식</p>
      </div>
    </div>

    <div class="content-stretch flex flex-col h-[50px] items-center justify-center relative shrink-0 px-[10px] cursor-pointer text-gray-text" data-shop-tab style="min-width: max-content;">
      <div class="flex flex-col font-semibold h-full justify-center leading-[0] not-italic relative shrink-0 text-[14px] text-center whitespace-nowrap" data-shop-tab-label>
        <p class="leading-[normal] mt-[3px]">업계소식</p>
      </div>
    </div>

    <div class="content-stretch flex flex-col h-[50px] items-center justify-center relative shrink-0 px-[10px] cursor-pointer text-gray-text" data-shop-tab style="min-width: max-content;">
      <div class="flex flex-col font-semibold h-full justify-center leading-[0] not-italic relative shrink-0 text-[14px] text-center whitespace-nowrap" data-shop-tab-label>
        <p class="leading-[normal] mt-[3px]">LPG단가동향</p>
      </div>
    </div>

  </div>
</div>

<script>
  (function () {
    var tabs = Array.from(document.querySelectorAll('[data-shop-tab]'));
    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        tabs.forEach(function (t) {
          var lbl = t.querySelector('[data-shop-tab-label]');
          t.classList.remove('font-bold');
          t.classList.add('text-gray-text');
          lbl.classList.remove('border-b-[3px]', 'border-black', 'text-black');
        });
        var label = tab.querySelector('[data-shop-tab-label]');
        tab.classList.add('font-bold');
        tab.classList.remove('text-gray-text');
        label.classList.add('border-b-[3px]', 'border-black', 'text-black');
      });
    });
  })();
</script>

{{-- 카테고리 필터 --}}
<div class="flex flex-nowrap gap-[8px] items-center overflow-x-auto hide-scrollbar px-[20px] pt-[16px] pb-[12px]" id="shop-category">

  <button class="shrink-0 h-[34px] px-[14px] rounded-full bg-black text-white text-[13px] font-semibold" data-cat-btn>
    전체
  </button>
  <button class="shrink-0 h-[34px] px-[14px] rounded-full border border-gray-border bg-white text-black text-[13px]" data-cat-btn>
    발신기
  </button>
  <button class="shrink-0 h-[34px] px-[14px] rounded-full border border-gray-border bg-white text-black text-[13px]" data-cat-btn>
    발신형 절체기
  </button>
  <button class="shrink-0 h-[34px] px-[14px] rounded-full border border-gray-border bg-white text-black text-[13px]" data-cat-btn>
    계량기
  </button>
  <button class="shrink-0 h-[34px] px-[14px] rounded-full border border-gray-border bg-white text-black text-[13px]" data-cat-btn>
    액면지시계
  </button>
  <button class="shrink-0 h-[34px] px-[14px] rounded-full border border-gray-border bg-white text-black text-[13px]" data-cat-btn>
    압력조정기
  </button>
  <button class="shrink-0 h-[34px] px-[14px] rounded-full border border-gray-border bg-white text-black text-[13px]" data-cat-btn>
    보일러
  </button>

</div>

<script>
  (function () {
    var btns = Array.from(document.querySelectorAll('[data-cat-btn]'));
    btns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        btns.forEach(function (b) {
          b.classList.remove('bg-black', 'text-white', 'font-semibold', 'border-transparent');
          b.classList.add('border', 'border-gray-border', 'bg-white', 'text-black');
        });
        btn.classList.remove('border', 'border-gray-border', 'bg-white', 'text-black');
        btn.classList.add('bg-black', 'text-white', 'font-semibold', 'border-transparent');
      });
    });
  })();
</script>

{{-- 검색 바 --}}
<div class="flex gap-[8px] px-[20px] pb-[16px]">
  <div class="form-input-wrapper flex-1">
    <input type="text" placeholder="검색어 입력" class="form-input" />
  </div>
  <button class="h-[44px] px-[20px] bg-primary text-white text-[14px] font-semibold shrink-0">
    검색
  </button>
</div>

{{-- 상품 목록 --}}
<div class="px-[20px]">

  {{-- 아이템 1 --}}
  <a href="/shoppingmall-detail" class="flex gap-[12px] py-[16px] border-b border-gray-light">
    <div class="relative w-[80px] h-[80px] bg-gray-bg flex-shrink-0 overflow-hidden flex items-center justify-center">
      <img src="{{ asset('images/image27.png') }}" alt="" class="absolute w-full h-full object-contain p-[4px]" />
    </div>
    <div class="flex-1 flex flex-col justify-center gap-[6px]">
      <p class="text-[14px] font-semibold text-black leading-snug">IoT 원격검침기(탱크)</p>
      <p class="text-[16px] font-bold text-black">0 원</p>
    </div>
  </a>

  {{-- 아이템 2 --}}
  <a href="/shoppingmall-detail" class="flex gap-[12px] py-[16px] border-b border-gray-light">
    <div class="relative w-[80px] h-[80px] bg-gray-bg flex-shrink-0 overflow-hidden flex items-center justify-center">
      <img src="{{ asset('images/image30.png') }}" alt="" class="absolute w-full h-full object-contain p-[4px]" />
    </div>
    <div class="flex-1 flex flex-col justify-center gap-[6px]">
      <p class="text-[14px] font-semibold text-black leading-snug">액면지시계 JOA-300</p>
      <p class="text-[16px] font-bold text-black">20,000 원</p>
    </div>
  </a>

  {{-- 아이템 3 --}}
  <a href="/shoppingmall-detail" class="flex gap-[12px] py-[16px] border-b border-gray-light">
    <div class="relative w-[80px] h-[80px] bg-gray-bg flex-shrink-0 overflow-hidden flex items-center justify-center">
      <img src="{{ asset('images/image33.png') }}" alt="" class="absolute w-full h-full object-contain p-[4px]" />
    </div>
    <div class="flex-1 flex flex-col justify-center gap-[6px]">
      <p class="text-[14px] font-semibold text-black leading-snug">휴콘스 압력조정기 8kg (2단 감압식 일체형)</p>
      <p class="text-[16px] font-bold text-black">80,000 원</p>
    </div>
  </a>

  {{-- 아이템 4 --}}
  <a href="#" class="flex gap-[12px] py-[16px] border-b border-gray-light">
    <div class="relative w-[80px] h-[80px] bg-gray-bg flex-shrink-0 overflow-hidden flex items-center justify-center">
      <img src="{{ asset('images/image35.png') }}" alt="" class="absolute w-full h-full object-contain p-[4px]" />
    </div>
    <div class="flex-1 flex flex-col justify-center gap-[6px]">
      <p class="text-[14px] font-semibold text-black leading-snug">린나이 콘덴싱1종보일러 RC620</p>
      <p class="text-[16px] font-bold text-black">510,000 원</p>
    </div>
  </a>

  {{-- 아이템 5 --}}
  <a href="#" class="flex gap-[12px] py-[16px] border-b border-gray-light">
    <div class="relative w-[80px] h-[80px] bg-gray-bg flex-shrink-0 overflow-hidden flex items-center justify-center">
      <img src="{{ asset('images/image29.png') }}" alt="" class="absolute w-full h-full object-contain p-[4px]" />
    </div>
    <div class="flex-1 flex flex-col justify-center gap-[6px]">
      <p class="text-[14px] font-semibold text-black leading-snug">가스 자동절체기 (100kg용)</p>
      <p class="text-[16px] font-bold text-black">150,000 원</p>
    </div>
  </a>

  {{-- 아이템 6 --}}
  <a href="#" class="flex gap-[12px] py-[16px] border-b border-gray-light">
    <div class="relative w-[80px] h-[80px] bg-gray-bg flex-shrink-0 overflow-hidden flex items-center justify-center">
      <img src="{{ asset('images/image31.png') }}" alt="" class="absolute w-full h-full object-contain p-[4px]" />
    </div>
    <div class="flex-1 flex flex-col justify-center gap-[6px]">
      <p class="text-[14px] font-semibold text-black leading-snug">LPG 용기 밸브 (20kg)</p>
      <p class="text-[16px] font-bold text-black">35,000 원</p>
    </div>
  </a>

</div>
