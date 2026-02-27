{{-- 쇼핑몰 상세 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full" src="{{ asset('images/keyboardArrowRight.svg') }}" style="transform: scaleX(-1)" />
    </button>
    <p class="title-page truncate">쇼핑몰</p>
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
  <h1 class="text-[20px] font-semibold text-black leading-snug">휴콘스 압력조정기 8kg (2단 감압식 일체형)</h1>
</div>

{{-- 상품 이미지 슬라이더 --}}
<div class="relative w-full flex items-center justify-center" style="aspect-ratio: 1/1;">
  <button class="absolute left-[12px] top-1/2 -translate-y-1/2 z-10 size-[36px] flex items-center justify-center bg-white-overlay rounded-full shadow" id="img-prev">
    <img alt="이전" class="block size-[20px]" src="{{ asset('images/keyboardArrowRight.svg') }}" style="transform: scaleX(-1)" />
  </button>
  <img src="{{ asset('images/image33.png') }}" alt="휴콘스 압력조정기" class="w-full h-full object-contain p-[20px]" id="product-img" />
  <button class="absolute right-[12px] top-1/2 -translate-y-1/2 z-10 size-[36px] flex items-center justify-center bg-white-overlay rounded-full shadow" id="img-next">
    <img alt="다음" class="block size-[20px]" src="{{ asset('images/keyboardArrowRight.svg') }}" />
  </button>
</div>

{{-- 제품 선택 영역 --}}
<div class="px-[20px] pt-[20px] flex flex-col gap-[12px]">

  {{-- 드롭다운 제목 --}}
  <p class="text-[14px] font-semibold text-black">
    제품 선택 <span class="font-normal text-gray-text">(부가세 별도)</span>
  </p>

  {{-- 드롭다운 --}}
  <select class="w-full h-[44px] border border-gray-border bg-white px-[12px] form-select">
    <option value="" disabled selected>제품 선택</option>
    <option value="8kg">8KG (280) [+80000원]</option>
    <option value="16kg">16KG (560) [+160000원]</option>
    <option value="24kg">24KG (1020) [+240000원]</option>
  </select>

  {{-- 선택된 옵션들 컨테이너 --}}
  <div id="selected-options-container" class="flex flex-col gap-[12px]">
    <!-- 동적으로 선택된 옵션 박스들이 여기에 추가됩니다 -->
  </div>

</div>

{{-- 합계 --}}
<div class="px-[20px] pt-[16px] flex justify-end">
  <span class="text-[20px] font-bold text-black" id="grand-total">0 원</span>
</div>

{{-- 구매 버튼 --}}
<div class="px-[20px] pt-[12px] pb-[24px] flex gap-[8px]">
  <button class="flex-1 btn-secondary">장바구니 담기</button>
  <button class="flex-1 btn-primary">주문하기</button>
</div>

{{-- 유선문의 --}}
<div class="border-t border-gray-light px-[20px] pt-[20px] pb-[24px]">
  <div class="flex items-center justify-between mb-[12px]">
    <span class="text-[18px] font-bold text-black">유선문의</span>
    <button class="btn-pill">제품 문의</button>
  </div>
  <div class="flex flex-col gap-[2px]">
    <p class="text-[14px] font-semibold text-black">고객센터</p>
    <p class="text-[14px] text-black">1566-2399</p>
    <p class="text-[13px] text-gray-md">월-금 09:00~18:00 (주말, 공휴일 휴무)</p>
  </div>
</div>

{{-- 하단 버튼 --}}
<div class="px-[20px] pb-[20px] flex gap-[8px]">
  <a href="/shoppingmall-list" class="flex-1 btn-outline h-[48px] flex items-center justify-center text-[15px]">제품목록</a>
  <a href="#" class="flex-1 btn-outline h-[48px] flex items-center justify-center text-[15px]">나의 주문내역</a>
</div>

<script>
  (function () {
    var selectedOptions = {}; // 선택된 옵션들 저장
    var optionCounter = 0; // 옵션 ID 생성용 카운터

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

    function updateGrandTotal() {
      var grandTotal = 0;
      for (var optionId in selectedOptions) {
        var option = selectedOptions[optionId];
        grandTotal += option.price * option.qty;
      }
      document.getElementById('grand-total').textContent = fmt(grandTotal);
    }

    function createOptionBox(optionValue, optionText, price) {
      var optionId = 'option-' + (++optionCounter);
      selectedOptions[optionId] = {
        value: optionValue,
        text: optionText,
        price: price,
        qty: 1
      };

      var optionBox = document.createElement('div');
      optionBox.className = 'border border-[#ddd] px-[12px] py-[10px] flex flex-col gap-[10px]';
      optionBox.id = optionId;

      optionBox.innerHTML = `
        <div class="flex items-center justify-between">
          <span class="text-[13px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">${optionText}</span>
          <button class="size-[18px] flex items-center justify-center text-[#999]" onclick="removeOption('${optionId}')">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M1 1L13 13M13 1L1 13" stroke="#999" stroke-width="1.5" stroke-linecap="round"/></svg>
          </button>
        </div>
        <div class="flex items-center justify-between">
          <div class="flex items-center border border-[#ddd] h-[36px]">
            <button class="w-[36px] h-full flex items-center justify-center text-[18px] text-black leading-none" onclick="updateQty('${optionId}', -1)">−</button>
            <span class="w-[36px] h-full flex items-center justify-center text-[14px] text-black" style="font-family: 'Inter', sans-serif;" id="qty-${optionId}">1</span>
            <button class="w-[36px] h-full flex items-center justify-center text-[18px] text-black leading-none" onclick="updateQty('${optionId}', 1)">+</button>
          </div>
          <span class="text-[14px] font-semibold text-black" style="font-family: 'Inter', sans-serif;" id="total-${optionId}">${fmt(price)}</span>
        </div>
      `;

      return optionBox;
    }

    window.removeOption = function(optionId) {
      delete selectedOptions[optionId];
      var element = document.getElementById(optionId);
      if (element) {
        element.remove();
      }
      updateGrandTotal();
    };

    window.updateQty = function(optionId, change) {
      var option = selectedOptions[optionId];
      if (option) {
        option.qty = Math.max(1, option.qty + change);
        document.getElementById('qty-' + optionId).textContent = option.qty;
        document.getElementById('total-' + optionId).textContent = fmt(option.price * option.qty);
        updateGrandTotal();
      }
    };

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

    // 이미지 슬라이더 이벤트 리스너
    document.getElementById('img-prev').addEventListener('click', prevImage);
    document.getElementById('img-next').addEventListener('click', nextImage);

    // 드롭다운 선택 이벤트
    document.querySelector('select').addEventListener('change', function() {
      if (this.value) {
        var selectedText = this.options[this.selectedIndex].text;
        var priceMatch = selectedText.match(/\[+([0-9,]+)원\]/);
        var price = priceMatch ? parseInt(priceMatch[1].replace(/,/g, '')) : 80000;
        
        // 이미 선택된 옵션인지 확인
        var alreadySelected = false;
        for (var optionId in selectedOptions) {
          if (selectedOptions[optionId].value === this.value) {
            alreadySelected = true;
            break;
          }
        }

        if (!alreadySelected) {
          var optionBox = createOptionBox(this.value, selectedText, price);
          document.getElementById('selected-options-container').appendChild(optionBox);
          updateGrandTotal();
        }

        // 드롭다운 초기화
        this.value = '';
      }
    });
  })();
</script>

