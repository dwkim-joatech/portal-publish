{{-- 초대코드 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full" src="{{ asset('images/keyboardArrowRight.svg') }}" style="transform: scaleX(-1)" />
    </button>
    <p class="title-page truncate">초대코드</p>
  </div>
  <button class="relative shrink-0 size-[24px]" onclick="openSideMenu()">
    <img alt="메뉴" class="block size-full" src="{{ asset('images/menu_sub.svg') }}" />
  </button>
</div>

{{-- 본문 --}}
<div class="flex flex-col flex-1 px-[20px] pt-[24px]">

  {{-- 안내 문구 --}}
  <p class="text-[14px] text-black leading-relaxed mb-[24px]">
    초대코드를 입력해주세요.<br>
    초대코드를 등록한 후 간편결제(대면)를 이용하실 수 있습니다.
  </p>

  {{-- 초대코드 등록 --}}
  <div class="form-field gap-[8px]">
    <label class="text-[14px] font-bold text-black">초대코드 등록</label>
    <div class="form-input-wrapper h-[52px] px-[14px]">
      <input type="text" placeholder="초대코드 입력" class="form-input" />
    </div>
  </div>

</div>

{{-- 등록하기 버튼 --}}
<div class="px-[20px] pb-[20px] pt-[16px]">
  <button class="w-full h-[52px] bg-primary text-white text-[15px] font-semibold">등록하기</button>
</div>

