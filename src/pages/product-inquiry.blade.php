{{-- 제품 문의 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full scale-x-[-1]" src="{{ asset('images/keyboardArrowRight.svg') }}" />
    </button>
    <p class="title-page truncate">제품 문의</p>
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

{{-- 입력 폼 --}}
<div class="px-[20px] py-[20px] flex flex-col gap-[20px]">

  {{-- 문의유형 --}}
  <div class="form-field">
    <x-form-label-required label="문의유형" />
    <div class="relative border border-gray-border h-[44px] flex items-center px-[12px] bg-white">
      <select class="form-select">
        <option value="견적" selected>견적</option>
        <option value="일반">일반</option>
        <option value="불만">불만</option>
        <option value="기타">기타</option>
      </select>
      <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[12px] size-[18px] pointer-events-none rotate-90" />
    </div>
  </div>

  {{-- 제목 --}}
  <div class="form-field">
    <x-form-label-required label="제목" />
    <div class="border border-gray-border h-[44px] flex items-center px-[12px] bg-white">
      <input type="text" placeholder="제목 입력" class="form-input" />
    </div>
  </div>

  {{-- 휴대폰번호 --}}
  <div class="form-field">
    <x-form-label-required label="휴대폰번호" />
    <div class="border border-gray-border h-[44px] flex items-center px-[12px] bg-white">
      <input type="tel" placeholder="'-'를 포함하지 않고 입력" class="form-input" />
    </div>
  </div>

  {{-- 문의내용 --}}
  <div class="form-field">
    <x-form-label-required label="문의내용" />
    <div class="border border-gray-border h-[360px] p-[12px] bg-white">
      <textarea placeholder="문의내용 입력" class="w-full h-full text-[14px] text-black outline-none bg-transparent resize-none placeholder-gray-text"></textarea>
    </div>
  </div>

  {{-- 파일첨부 --}}
  <div class="form-field">
    <label class="form-label">파일첨부 <span class="font-normal text-gray-text">(5개까지 첨부가능합니다.)</span></label>
    <div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:10px;">
      {{-- 추가 버튼 --}}
      <label style="width:100px;height:100px;border:1px solid #ddd;background:#fff;display:flex;align-items:center;justify-content:center;cursor:pointer;flex-shrink:0;">
        <input type="file" accept="image/*" multiple class="hidden" id="file-input" />
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="#999"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
      </label>
      {{-- 첨부 이미지 1 --}}
      <div style="position:relative;width:100px;height:100px;overflow:hidden;flex-shrink:0;">
        <img src="{{ asset('images/image33.png') }}" alt="" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;" />
        <button style="position:absolute;top:4px;right:4px;width:26px;height:26px;background:#000;border-radius:50%;display:flex;align-items:center;justify-content:center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="white"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
        </button>
      </div>
      {{-- 첨부 이미지 2 --}}
      <div style="position:relative;width:100px;height:100px;overflow:hidden;flex-shrink:0;">
        <img src="{{ asset('images/image34.png') }}" alt="" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;" />
        <button style="position:absolute;top:4px;right:4px;width:26px;height:26px;background:#000;border-radius:50%;display:flex;align-items:center;justify-content:center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="white"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
        </button>
      </div>
      {{-- 첨부 이미지 3 --}}
      <div style="position:relative;width:100px;height:100px;overflow:hidden;flex-shrink:0;">
        <img src="{{ asset('images/image35.png') }}" alt="" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;" />
        <button style="position:absolute;top:4px;right:4px;width:26px;height:26px;background:#000;border-radius:50%;display:flex;align-items:center;justify-content:center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="white"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
        </button>
      </div>
      {{-- 첨부 이미지 4 --}}
      <div style="position:relative;width:100px;height:100px;overflow:hidden;flex-shrink:0;">
        <img src="{{ asset('images/image33.png') }}" alt="" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;" />
        <button style="position:absolute;top:4px;right:4px;width:26px;height:26px;background:#000;border-radius:50%;display:flex;align-items:center;justify-content:center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="white"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
        </button>
      </div>
      {{-- 첨부 이미지 5 --}}
      <div style="position:relative;width:100px;height:100px;overflow:hidden;flex-shrink:0;">
        <img src="{{ asset('images/image34.png') }}" alt="" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;" />
        <button style="position:absolute;top:4px;right:4px;width:26px;height:26px;background:#000;border-radius:50%;display:flex;align-items:center;justify-content:center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="white"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
        </button>
      </div>
    </div>
  </div>

  {{-- 개인정보 동의 --}}
  <label class="flex items-center gap-[10px] cursor-pointer">
    <input type="checkbox" class="size-[18px] accent-primary" />
    <span class="text-[14px] text-black">개인정보수집에 동의합니다. <span class="text-red-required font-semibold">(필수)</span></span>
  </label>

</div>

{{-- 문의하기 버튼 --}}
<div class="px-[20px] pb-[24px] pt-[4px]">
  <button class="w-full btn-primary h-[50px] text-[16px]">문의하기</button>
</div>
