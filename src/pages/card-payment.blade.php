{{-- 간편카드결제 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full scale-x-[-1]" src="{{ asset('images/keyboardArrowRight.svg') }}" />
    </button>
    <p class="title-page truncate">간편카드결제</p>
  </div>
  <button class="relative shrink-0 size-[24px]" onclick="openSideMenu()">
    <img alt="메뉴" class="block size-full" src="{{ asset('images/menu_sub.svg') }}" />
  </button>
</div>

{{-- ===== 폼 영역 ===== --}}
<div class="px-[20px] pt-[16px] pb-[24px] flex flex-col gap-[16px]">

  {{-- 초대회사코드 버튼 --}}
  <div class="flex justify-end">
    <button class="btn-pill">초대회사코드</button>
  </div>

  {{-- 업체 정보 카드 --}}
  <div class="bg-gray-bg rounded-[8px] px-[16px] py-[14px] flex flex-col gap-[4px]">
    <p class="text-[15px] font-bold text-black">(주)조아테크</p>
    <p class="text-[13px] text-gray-md">대표자명 : 하명현</p>
    <p class="text-[13px] text-gray-md">사업자번호 : 206-86-17457</p>
  </div>

  {{-- 결제 금액 --}}
  <div class="form-field">
    <x-form-label-required label="결제 금액" />
    <div class="form-input-wrapper">
      <input type="number" placeholder="결제 금액 입력" class="form-input" />
    </div>
  </div>

  {{-- 카드 번호 --}}
  <div class="form-field">
    <x-form-label-required label="카드 번호" />
    <div class="form-input-wrapper">
      <input type="text" placeholder="카드 번호 16자리 입력" class="form-input" inputmode="numeric" maxlength="16" />
    </div>
  </div>

  {{-- 유효기간 + 할부 --}}
  <div class="grid grid-cols-2 gap-[10px]">
    <div class="form-field">
      <x-form-label-required label="유효기간" />
      <div class="form-input-wrapper">
        <input type="text" placeholder="MM / YY" class="form-input" inputmode="numeric" maxlength="5" />
      </div>
    </div>
    <div class="form-field">
      <x-form-label-required label="할부" />
      <div class="relative form-input-wrapper">
        <select class="form-select">
          <option value="0">일시불</option>
          <option value="2">2개월</option>
          <option value="3">3개월</option>
          <option value="6">6개월</option>
          <option value="12">12개월</option>
        </select>
        <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[12px] size-[16px] pointer-events-none rotate-90" />
      </div>
    </div>
  </div>

  {{-- 메모 --}}
  <div class="form-field">
    <x-form-label-required label="메모" />
    <div class="relative form-input-wrapper">
      <select class="form-select">
        <option value="etc">기타</option>
        <option value="gas">가스비</option>
        <option value="rental">렌탈료</option>
      </select>
      <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[12px] size-[16px] pointer-events-none rotate-90" />
    </div>
    <div class="form-input-wrapper">
      <input type="text" placeholder="메모 입력" class="form-input" />
    </div>
  </div>

</div>

{{-- ===== 결제하기 버튼 ===== --}}
<div class="px-[20px] pb-[24px]">
  <button class="w-full btn-primary">결제하기</button>
</div>
