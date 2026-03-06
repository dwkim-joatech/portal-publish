{{-- 즐겨찾기 등록 --}}

{{-- GNB: 타이틀 + X 닫기 --}}
<div class="flex items-center justify-between px-[20px] h-[60px]">
  <p class="text-[22px] font-bold text-black">즐겨찾기 등록</p>
  <button onclick="history.back()" class="size-[28px] flex items-center justify-center text-black">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
</div>

{{-- 폼 영역 --}}
<div class="px-[20px] pt-[12px] pb-[24px] flex flex-col gap-[16px]">

  {{-- 사이트명 --}}
  <div class="form-field">
    <x-form-label-required label="사이트명" />
    <div class="form-input-wrapper">
      <input type="text" placeholder="사이트명 입력" class="form-input" />
    </div>
  </div>

  {{-- URL --}}
  <div class="form-field">
    <x-form-label-required label="URL" />
    <div class="form-input-wrapper">
      <input type="url" placeholder="URL 입력" class="form-input" />
    </div>
  </div>

  {{-- 사이트 설명 --}}
  <div class="form-field">
    <x-form-label-required label="사이트 설명" />
    <div class="form-input-wrapper">
      <input type="text" placeholder="사이트 설명 입력" class="form-input" />
    </div>
  </div>

</div>

{{-- 작성하기 버튼 (하단 고정) --}}
<div class="fixed bottom-[60px] left-0 right-0 px-[20px] pb-[16px] pt-[8px] bg-white">
  <button class="w-full btn-primary">등록</button>
</div>
