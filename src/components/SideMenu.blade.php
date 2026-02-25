<div id="side-menu" class="fixed inset-0 z-[100] invisible" data-name="side-menu">
  <!-- 어두운 오버레이 -->
  <div id="side-menu-overlay" class="absolute inset-0 bg-[rgba(0,0,0,0.6)] opacity-0 transition-opacity duration-300"></div>

  <!-- 드로어 패널 (300px, 우측) -->
  <div id="side-menu-drawer" class="absolute right-0 top-0 h-full w-[300px] bg-white flex flex-col overflow-clip translate-x-full transition-transform duration-300 ease-in-out">

    <!-- 상태바 (네이비) -->
    <!-- <div class="bg-[#131e56] h-[40px] relative w-full shrink-0">
      <p class="absolute font-normal leading-[normal] opacity-90 text-[13px] text-[rgba(255,255,255,0.6)] whitespace-pre-wrap" style="inset: 32.5% 85.28% 30% 5.56%; font-family: 'Roboto', sans-serif;">12:30</p>
    </div> -->

    <!-- GNB (네이비) -->
    <div class="bg-[#131e56] h-[60px] flex items-center px-[20px] py-[18px] shrink-0">
      <p class="font-semibold leading-[normal] text-[22px] text-white flex-1" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">전체 메뉴</p>
      <button id="side-menu-close" class="relative shrink-0 size-[24px]">
        <img alt="닫기" class="block max-w-none size-full brightness-0 invert" src="{{ asset('images/close.svg') }}" />
      </button>
    </div>

    <!-- 앱 메뉴 그리드 (3×3, 네이비 배경) -->
    <div class="bg-[#131e56] shrink-0 px-0 pt-[20px]">
      <!-- 1행 -->
      <div class="flex items-center">
        <div class="flex flex-1 flex-col gap-[4px] items-center justify-center px-[10px] py-[10px]">
          <div class="relative shrink-0 size-[24px]">
            <img alt="간편결제(대면)" class="block max-w-none size-full" src="{{ asset('images/creditCard.svg') }}" />
          </div>
          <p class="font-normal leading-[16px] text-[12px] text-[rgba(255,255,255,0.8)] text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">간편결제(대면)</p>
        </div>
        <div class="flex flex-1 flex-col gap-[4px] items-center justify-center px-[10px] py-[10px]">
          <div class="relative shrink-0 size-[24px]">
            <img alt="완성검사" class="block max-w-none size-full" src="{{ asset('images/manageSearch.svg') }}" />
          </div>
          <p class="font-normal leading-[16px] text-[12px] text-[rgba(255,255,255,0.8)] text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">완성검사</p>
        </div>
        <div class="flex flex-1 flex-col gap-[4px] items-center justify-center px-[10px] py-[10px]">
          <div class="relative shrink-0 size-[24px]">
            <img alt="벌크로리점검" class="block max-w-none size-full" src="{{ asset('images/mystery.svg') }}" />
          </div>
          <p class="font-normal leading-[16px] text-[12px] text-[rgba(255,255,255,0.8)] text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">벌크로리점검</p>
        </div>
      </div>
      <!-- 2행 -->
      <div class="flex items-start">
        <div class="flex flex-1 flex-col gap-[4px] items-center justify-center px-[10px] py-[10px]">
          <div class="relative shrink-0 size-[24px]">
            <img alt="연료전환" class="block max-w-none size-full" src="{{ asset('images/cached.svg') }}" />
          </div>
          <p class="font-normal leading-[16px] text-[12px] text-[rgba(255,255,255,0.8)] text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">연료전환</p>
        </div>
        <div class="flex flex-1 flex-col gap-[4px] items-center justify-center px-[10px] py-[10px]">
          <div class="relative shrink-0 size-[24px]">
            <img alt="단위변환" class="block max-w-none size-full" src="{{ asset('images/calculate.svg') }}" />
          </div>
          <p class="font-normal leading-[16px] text-[12px] text-[rgba(255,255,255,0.8)] text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">단위변환</p>
        </div>
        <div class="flex flex-1 flex-col gap-[4px] items-center justify-center px-[10px] py-[10px]">
          <div class="relative shrink-0 size-[24px]">
            <img alt="투자예상분석" class="block max-w-none size-full" src="{{ asset('images/trendingUp.svg') }}" />
          </div>
          <p class="font-normal leading-[16px] text-[12px] text-[rgba(255,255,255,0.8)] text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">투자예상분석</p>
        </div>
      </div>
      <!-- 3행 -->
      <div class="flex items-start pb-[30px]">
        <div class="flex flex-1 flex-col gap-[4px] items-center justify-center px-[10px] py-[10px]">
          <div class="relative shrink-0 size-[24px]">
            <img alt="채권추심" class="block max-w-none size-full" src="{{ asset('images/accountBalance.svg') }}" />
          </div>
          <p class="font-normal leading-[16px] text-[12px] text-[rgba(255,255,255,0.8)] text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">채권추심</p>
        </div>
        <div class="flex flex-1 flex-col gap-[4px] items-center justify-center px-[10px] py-[10px]">
          <div class="relative shrink-0 size-[24px]">
            <img alt="기화율분석" class="block max-w-none size-full" src="{{ asset('images/insertChart.svg') }}" />
          </div>
          <p class="font-normal leading-[16px] text-[12px] text-[rgba(255,255,255,0.8)] text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">기화율분석</p>
        </div>
        <div class="flex flex-1 flex-col gap-[4px] items-center justify-center px-[10px] py-[10px]">
          <div class="relative shrink-0 size-[24px]">
            <img alt="계도물안내" class="block max-w-none size-full" src="{{ asset('images/book2.svg') }}" />
          </div>
          <p class="font-normal leading-[16px] text-[12px] text-[rgba(255,255,255,0.8)] text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">계도물안내</p>
        </div>
      </div>
    </div>

    <!-- 네비게이션 리스트 (흰 배경) -->
    <div class="flex flex-col gap-[20px] justify-start p-[20px] overflow-y-auto flex-1">
      <a href="#" class="flex gap-[10px] items-center w-full">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/shoppingBasket.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">중고장터</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
      <a href="#" class="flex gap-[10px] items-center w-full">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/storefront.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">쇼핑몰</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
      <a href="#" class="flex gap-[10px] items-center w-full">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/article.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">입찰정보</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
      <a href="#" class="flex gap-[10px] items-center w-full">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/dataTable.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">자료실</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
      <a href="#" class="flex gap-[10px] items-center w-full">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/notifications.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">공지사항</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
      <a href="#" class="flex gap-[10px] items-center w-full">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/domain.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">조아테크소식</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
      <a href="#" class="flex gap-[10px] items-center w-full">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/newsmode.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">업계소식</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
      <a href="#" class="flex gap-[10px] items-center w-full border-b border-[#eee] pb-[20px]">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/ssidChart.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">LPG 단가동향</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
      <a href="#" class="flex gap-[10px] items-center w-full">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/homeUnselected.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">홈</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
      <a href="#" class="flex gap-[10px] items-center w-full">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/shoppingBag.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">장바구니</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
      <a href="#" class="flex gap-[10px] items-center w-full pb-[20px]">
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/person.svg') }}" /></div>
        <p class="flex-1 font-normal leading-[24px] text-[14px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">마이페이지</p>
        <div class="relative shrink-0 size-[24px]"><img alt="" class="block max-w-none size-full" src="{{ asset('images/keyboardArrowRight24.svg') }}" /></div>
      </a>
    </div>

  </div>
</div>

<script>
  (function() {
    const sideMenu = document.getElementById('side-menu');
    const overlay  = document.getElementById('side-menu-overlay');
    const drawer   = document.getElementById('side-menu-drawer');
    const closeBtn = document.getElementById('side-menu-close');
    const menuBtn  = document.querySelector('[data-name="gnb/main"] [alt="메뉴"]');
    let closeTimeout;

    function openMenu() {
      clearTimeout(closeTimeout);
      sideMenu.classList.remove('invisible');
      // Forcing reflow to allow transition to run properly
      void sideMenu.offsetWidth;
      overlay.classList.remove('opacity-0');
      overlay.classList.add('opacity-100');
      drawer.classList.remove('translate-x-full');
      drawer.classList.add('translate-x-0');
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      overlay.classList.remove('opacity-100');
      overlay.classList.add('opacity-0');
      drawer.classList.remove('translate-x-0');
      drawer.classList.add('translate-x-full');
      document.body.style.overflow = '';

      closeTimeout = setTimeout(() => {
        sideMenu.classList.add('invisible');
      }, 300);
    }

    if (menuBtn)  menuBtn.closest('div').addEventListener('click', openMenu);
    if (overlay)  overlay.addEventListener('click', closeMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
  })();
</script>
