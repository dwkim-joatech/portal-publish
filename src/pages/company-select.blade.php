{{-- 간편카드결제 - 업체 선택 --}}

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
<div class="px-[20px] pt-[20px] pb-[24px] flex flex-col gap-[16px]">

  {{-- 안내 문구 --}}
  <p class="text-[14px] text-black leading-relaxed">간편카드결제 서비스를 이용하려면 결제를 진행할 업체를 선택해주세요.</p>

  {{-- 업체 선택 --}}
  <div class="form-field">
    <x-form-label-required label="업체 선택" />
    <div class="relative form-input-wrapper">
      <select class="form-select">
        <option value="">업체 선택</option>
        <option value="joatech">조아테크</option>
      </select>
      <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[12px] size-[16px] pointer-events-none rotate-90" />
    </div>
  </div>

</div>

{{-- ===== 선택 완료 버튼 ===== --}}
<div class="px-[20px] pb-[24px]">
  <button class="w-full btn-primary" onclick="location.href='../card-payment'">선택 완료</button>
</div>
