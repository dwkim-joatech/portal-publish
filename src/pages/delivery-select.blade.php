{{-- 배송지 선택 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <p class="title-page truncate">배송지 선택</p>
  </div>
  <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 13.0537L6.927 18.127C6.7885 18.2653 6.61442 18.3362 6.40475 18.3395C6.19525 18.3427 6.018 18.2718 5.873 18.127C5.72817 17.982 5.65575 17.8063 5.65575 17.6C5.65575 17.3937 5.72817 17.218 5.873 17.073L10.9463 12L5.873 6.927C5.73467 6.7885 5.66383 6.61442 5.6605 6.40475C5.65733 6.19525 5.72817 6.018 5.873 5.873C6.018 5.72817 6.19367 5.65575 6.4 5.65575C6.60633 5.65575 6.782 5.72817 6.927 5.873L12 10.9462L17.073 5.873C17.2115 5.73467 17.3856 5.66383 17.5953 5.6605C17.8048 5.65733 17.982 5.72817 18.127 5.873C18.2718 6.018 18.3443 6.19367 18.3443 6.4C18.3443 6.60633 18.2718 6.782 18.127 6.927L13.0538 12L18.127 17.073C18.2653 17.2115 18.3362 17.3856 18.3395 17.5952C18.3427 17.8047 18.2718 17.982 18.127 18.127C17.982 18.2718 17.8063 18.3443 17.6 18.3443C17.3937 18.3443 17.218 18.2718 17.073 18.127L12 13.0537Z" fill="#000"/>
    </svg>
  </button>
</div>

{{-- ===== 배송지 목록 ===== --}}
<div class="flex flex-col">

  {{-- 테이블 헤더 --}}
  <div class="grid grid-cols-[1fr_auto] border-b border-gray-border px-[20px] py-[10px]">
    <span class="text-[13px] text-gray-text">배송지 정보</span>
    <span class="text-[13px] text-gray-text">선택</span>
  </div>

  {{-- 주소 항목 1 --}}
  <div class="grid grid-cols-[1fr_auto] items-center gap-[12px] px-[20px] py-[16px] border-b border-gray-border">
    <div class="flex flex-col gap-[4px] min-w-0">
      <div class="flex items-center gap-[6px]">
        <span class="text-[14px] font-semibold text-black">조아/조아</span>
        <span class="text-[11px] font-medium text-primary bg-blue-light rounded-full px-[8px] py-[2px] leading-tight">기본</span>
      </div>
      <p class="text-[13px] text-gray-md leading-snug">서울 강동구 가래여울길 71 (고덕동)</p>
    </div>
    <div class="flex gap-[6px] flex-shrink-0">
      <button class="h-[32px] px-[12px] text-[13px] text-black border border-gray-border rounded-full bg-white">수정</button>
      <button class="h-[32px] px-[12px] text-[13px] text-black border border-gray-border rounded-full bg-white">선택</button>
    </div>
  </div>

  {{-- 주소 항목 2 --}}
  <div class="grid grid-cols-[1fr_auto] items-center gap-[12px] px-[20px] py-[16px] border-b border-gray-border">
    <div class="flex flex-col gap-[4px] min-w-0">
      <span class="text-[14px] font-semibold text-black">조아2/조아2</span>
      <p class="text-[13px] text-gray-md leading-snug">서울 강동구 고덕비즈밸리로 26 (고덕동) 1234호</p>
    </div>
    <div class="flex gap-[6px] flex-shrink-0">
      <button class="h-[32px] px-[12px] text-[13px] text-black border border-gray-border rounded-full bg-white">수정</button>
      <button class="h-[32px] px-[12px] text-[13px] text-black border border-gray-border rounded-full bg-white">선택</button>
    </div>
  </div>

  {{-- 주소 항목 3 --}}
  <div class="grid grid-cols-[1fr_auto] items-center gap-[12px] px-[20px] py-[16px] border-b border-gray-border">
    <div class="flex flex-col gap-[4px] min-w-0">
      <span class="text-[14px] font-semibold text-black">조아3/조아3</span>
      <p class="text-[13px] text-gray-md leading-snug">서울 강동구 가래여울길 24 (고덕동)</p>
    </div>
    <div class="flex gap-[6px] flex-shrink-0">
      <button class="h-[32px] px-[12px] text-[13px] text-black border border-gray-border rounded-full bg-white">수정</button>
      <button class="h-[32px] px-[12px] text-[13px] text-black border border-gray-border rounded-full bg-white">선택</button>
    </div>
  </div>

</div>

{{-- ===== 배송지 추가 버튼 ===== --}}
<div class="px-[20px] py-[16px] mt-auto">
  <button class="w-full btn-primary" onclick="location.href='delivery-reg'">배송지 추가</button>
</div>
