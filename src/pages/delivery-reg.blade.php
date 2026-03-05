{{-- 배송지 등록 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <p class="title-page truncate">배송지 등록</p>
  </div>
  <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 13.0537L6.927 18.127C6.7885 18.2653 6.61442 18.3362 6.40475 18.3395C6.19525 18.3427 6.018 18.2718 5.873 18.127C5.72817 17.982 5.65575 17.8063 5.65575 17.6C5.65575 17.3937 5.72817 17.218 5.873 17.073L10.9463 12L5.873 6.927C5.73467 6.7885 5.66383 6.61442 5.6605 6.40475C5.65733 6.19525 5.72817 6.018 5.873 5.873C6.018 5.72817 6.19367 5.65575 6.4 5.65575C6.60633 5.65575 6.782 5.72817 6.927 5.873L12 10.9462L17.073 5.873C17.2115 5.73467 17.3856 5.66383 17.5953 5.6605C17.8048 5.65733 17.982 5.72817 18.127 5.873C18.2718 6.018 18.3443 6.19367 18.3443 6.4C18.3443 6.60633 18.2718 6.782 18.127 6.927L13.0538 12L18.127 17.073C18.2653 17.2115 18.3362 17.3856 18.3395 17.5952C18.3427 17.8047 18.2718 17.982 18.127 18.127C17.982 18.2718 17.8063 18.3443 17.6 18.3443C17.3937 18.3443 17.218 18.2718 17.073 18.127L12 13.0537Z" fill="#000"/>
    </svg>
  </button>
</div>

{{-- ===== 폼 영역 ===== --}}
<div class="px-[20px] pt-[20px] pb-[24px] flex flex-col gap-[16px]">

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
      <input type="tel" placeholder="'-'를 포함하지 않고 입력" class="form-input" />
    </div>
  </div>

  {{-- 배송지 주소 --}}
  <div class="form-field">
    <label class="form-label">배송지 주소</label>
    <div class="flex gap-[8px]">
      <div class="form-input-wrapper flex-1 bg-gray-bg">
        <input type="text" placeholder="우편번호" class="form-input bg-gray-bg" readonly />
      </div>
      <button class="btn-outline px-[14px] text-[13px] font-bold flex-shrink-0">우편번호 찾기</button>
    </div>
    <div class="form-input-wrapper bg-gray-bg">
      <input type="text" placeholder="기본주소" class="form-input bg-gray-bg" readonly />
    </div>
    <div class="form-input-wrapper">
      <input type="text" placeholder="상세주소" class="form-input" />
    </div>
  </div>

  {{-- 기본배송지 체크박스 --}}
  <label class="flex items-center gap-[10px] cursor-pointer">
    <div class="size-[20px] rounded-full border border-gray-border flex items-center justify-center flex-shrink-0">
      <svg width="11" height="11" viewBox="0 0 24 24" fill="#999"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
    </div>
    <span class="text-[14px] text-black">기본배송지로 하시겠습니까?</span>
  </label>

</div>

{{-- ===== 작성하기 버튼 ===== --}}
<div class="px-[20px] pb-[24px]">
  <button class="w-full btn-primary">작성하기</button>
</div>
