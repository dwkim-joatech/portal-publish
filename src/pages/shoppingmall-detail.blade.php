{{-- 쇼핑몰 상세 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full" src="{{ asset('images/keyboardArrowRight.svg') }}" style="transform: scaleX(-1)" />
    </button>
    <p class="font-semibold leading-normal text-[22px] text-black truncate" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">쇼핑몰</p>
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

{{-- 상품명 --}}
<div class="px-[20px] pt-[20px] pb-[16px]">
  <h1 class="text-[20px] font-semibold text-black leading-snug" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">휴콘스 압력조정기 8kg (2단 감압식 일체형)</h1>
</div>

{{-- 상품 이미지 슬라이더 --}}
<div class="relative w-full flex items-center justify-center" style="aspect-ratio: 1/1;">
  <button class="absolute left-[12px] top-1/2 -translate-y-1/2 z-10 size-[36px] flex items-center justify-center bg-white/80 rounded-full shadow" id="img-prev">
    <img alt="이전" class="block size-[20px]" src="{{ asset('images/keyboardArrowRight.svg') }}" style="transform: scaleX(-1)" />
  </button>
  <img src="{{ asset('images/image33.png') }}" alt="휴콘스 압력조정기" class="w-full h-full object-contain p-[20px]" id="product-img" />
  <button class="absolute right-[12px] top-1/2 -translate-y-1/2 z-10 size-[36px] flex items-center justify-center bg-white/80 rounded-full shadow" id="img-next">
    <img alt="다음" class="block size-[20px]" src="{{ asset('images/keyboardArrowRight.svg') }}" />
  </button>
</div>

{{-- 제품 선택 영역 --}}
<div class="px-[20px] pt-[20px] flex flex-col gap-[12px]">

  {{-- 드롭다운 제목 --}}
  <p class="text-[14px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
    제품 선택 <span class="font-normal text-[#999]">(부가세 별도)</span>
  </p>

  {{-- 드롭다운 --}}
  <select class="w-full h-[44px] border border-[#ddd] bg-white px-[12px] text-[14px] text-black outline-none" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">
    <option value="" disabled selected>제품 선택</option>
    <option value="8kg">8KG (280) [+80000원]</option>
    <option value="16kg">16KG (560) [+160000원]</option>
    <option value="24kg">24KG (1020) [+240000원]</option>
  </select>

  {{-- 선택된 옵션 행 --}}
  <div class="border border-[#ddd] px-[12px] py-[10px] flex flex-col gap-[10px] hidden" id="selected-option">
    <div class="flex items-center justify-between">
      <span class="text-[13px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">8KG (280) [+80000원]</span>
      <button class="size-[18px] flex items-center justify-center text-[#999]" id="remove-option">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M1 1L13 13M13 1L1 13" stroke="#999" stroke-width="1.5" stroke-linecap="round"/></svg>
      </button>
    </div>
    <div class="flex items-center justify-between">
      {{-- 수량 조절 --}}
      <div class="flex items-center border border-[#ddd] h-[36px]">
        <button class="w-[36px] h-full flex items-center justify-center text-[18px] text-black leading-none" id="qty-minus">−</button>
        <span class="w-[36px] h-full flex items-center justify-center text-[14px] text-black" style="font-family: 'Inter', sans-serif;" id="qty-display">1</span>
        <button class="w-[36px] h-full flex items-center justify-center text-[18px] text-black leading-none" id="qty-plus">+</button>
      </div>
      {{-- 소계 --}}
      <span class="text-[14px] font-semibold text-black" style="font-family: 'Inter', sans-serif;" id="line-total">80,000 원</span>
    </div>
  </div>

</div>

{{-- 합계 --}}
<div class="px-[20px] pt-[16px] flex justify-end">
  <span class="text-[20px] font-bold text-black" style="font-family: 'Inter', sans-serif;" id="grand-total">80,000 원</span>
</div>

{{-- 구매 버튼 --}}
<div class="px-[20px] pt-[12px] pb-[24px] flex gap-[8px]">
  <button class="flex-1 h-[50px] bg-[#1a2e5a] text-white text-[15px] font-semibold" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">장바구니 담기</button>
  <button class="flex-1 h-[50px] bg-[#2074e2] text-white text-[15px] font-semibold" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">주문하기</button>
</div>

{{-- 유선문의 --}}
<div class="border-t border-[#eee] px-[20px] pt-[20px] pb-[24px]">
  <div class="flex items-center justify-between mb-[12px]">
    <span class="text-[18px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">유선문의</span>
    <button class="h-[32px] px-[14px] rounded-full border border-[#ddd] text-[13px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">제품 문의</button>
  </div>
  <div class="flex flex-col gap-[2px]">
    <p class="text-[14px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">고객센터</p>
    <p class="text-[14px] text-black" style="font-family: 'Inter', sans-serif">1566-2399</p>
    <p class="text-[13px] text-[#666]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">월-금 09:00~18:00 (주말, 공휴일 휴무)</p>
  </div>
</div>

{{-- 하단 버튼 --}}
<div class="px-[20px] pb-[20px] flex gap-[8px]">
  <a href="/shoppingmall-list" class="flex-1 h-[48px] border border-[#ddd] flex items-center justify-center text-[14px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">제품목록</a>
  <a href="#" class="flex-1 h-[48px] border border-[#ddd] flex items-center justify-center text-[14px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">나의 주문내역</a>
</div>

<script>
  (function () {
    var unitPrice = 80000;
    var qty = 1;

    // 이미지 슬라이더 변수
    var images = [
      '{{ asset("images/image33.png") }}',
      '{{ asset("images/image34.png") }}',
      '{{ asset("images/image35.png") }}'
    ];
    var currentImageIndex = 0;

    function fmt(n) {
      return n.toLocaleString('ko-KR') + ' 원';
    }

    function updateTotals() {
      document.getElementById('qty-display').textContent = qty;
      document.getElementById('line-total').textContent = fmt(unitPrice * qty);
      document.getElementById('grand-total').textContent = fmt(unitPrice * qty);
    }

    // 이미지 업데이트 함수
    function updateImage() {
      document.getElementById('product-img').src = images[currentImageIndex];
    }

    // 이전 이미지
    function prevImage() {
      currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
      updateImage();
    }

    // 다음 이미지
    function nextImage() {
      currentImageIndex = (currentImageIndex + 1) % images.length;
      updateImage();
    }

    document.getElementById('qty-minus').addEventListener('click', function () {
      if (qty > 1) { qty--; updateTotals(); }
    });
    document.getElementById('qty-plus').addEventListener('click', function () {
      qty++; updateTotals();
    });

    document.getElementById('remove-option').addEventListener('click', function () {
      document.getElementById('selected-option').classList.add('hidden');
      document.querySelector('select').value = '';
      document.getElementById('grand-total').textContent = '0 원';
    });

    // 이미지 슬라이더 이벤트 리스너
    document.getElementById('img-prev').addEventListener('click', prevImage);
    document.getElementById('img-next').addEventListener('click', nextImage);

    // 드롭다운 선택 이벤트
    document.querySelector('select').addEventListener('change', function() {
      if (this.value) {
        var selectedText = this.options[this.selectedIndex].text;
        var priceMatch = selectedText.match(/\[+([0-9,]+)원\]/);
        var price = priceMatch ? parseInt(priceMatch[1].replace(/,/g, '')) : 80000;
        
        unitPrice = price;
        qty = 1;
        
        // 선택된 옵션 텍스트 업데이트
        document.querySelector('#selected-option span').textContent = selectedText;
        
        // 선택된 옵션 영역 표시 및 가격 업데이트
        document.getElementById('selected-option').classList.remove('hidden');
        updateTotals();
      }
    });
  })();
</script>

<script>
  function openSideMenu() {
    const sideMenu = document.getElementById('side-menu');
    const overlay  = document.getElementById('side-menu-overlay');
    const drawer   = document.getElementById('side-menu-drawer');
    
    if (sideMenu && overlay && drawer) {
      sideMenu.classList.remove('invisible');
      void sideMenu.offsetWidth;
      overlay.classList.remove('opacity-0');
      overlay.classList.add('opacity-100');
      drawer.classList.remove('translate-x-full');
      drawer.classList.add('translate-x-0');
      document.body.style.overflow = 'hidden';
    }
  }
</script>
