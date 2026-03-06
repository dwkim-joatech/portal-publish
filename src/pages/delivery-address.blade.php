{{-- 배송지 관리 --}}

{{-- GNB --}}
<x-gnb-sub title="배송지 관리" />

{{-- 필터 + 배송지 등록 버튼 --}}
<div class="flex items-center justify-end gap-[8px] px-[20px] py-[12px] border-b border-gray-border">
  <button class="flex items-center gap-[4px] h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 18h4v-2h-4v2zm-7-10v2h18V8H3zm3 7h12v-2H6v2z"/></svg>
    필터
  </button>
  <a href="{{ asset('delivery-reg') }}" class="flex items-center h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    배송지 등록
  </a>
</div>

{{-- 테이블 --}}
<div>

  {{-- 테이블 헤더 --}}
  <div class="grid border-b bg-white" style="grid-template-columns: 90px 1fr 100px">
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">상호</div>
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">주소</div>
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">수정/삭제</div>
  </div>

  {{-- 행 1: 기본 배송지 --}}
  <div class="grid border-b bg-white" style="grid-template-columns: 90px 1fr 100px">
    <div class="flex items-center justify-center py-[14px] gap-[4px] flex-wrap px-[4px]">
      <span class="text-[14px] text-black">조아</span>
      <span class="inline-flex items-center h-[18px] px-[6px] rounded-full bg-blue-light text-primary text-[11px]">기본</span>
    </div>
    <div class="flex items-center py-[14px] px-[10px] text-[13px] text-black leading-snug">
      [05203] 서울 강동구 가래여울길 71 (고덕동)
    </div>
    <div class="flex items-center justify-center gap-[4px] py-[14px]">
      <button class="h-[28px] px-[8px] border border-gray-border rounded-full text-[12px] text-black bg-white">수정</button>
      <button class="h-[28px] px-[8px] border border-gray-border rounded-full text-[12px] text-black bg-white">삭제</button>
    </div>
  </div>

  {{-- 행 2 --}}
  <div class="grid border-b bg-white" style="grid-template-columns: 90px 1fr 100px">
    <div class="flex items-center justify-center py-[14px]">
      <span class="text-[14px] text-black">조아2</span>
    </div>
    <div class="flex items-center py-[14px] px-[10px] text-[13px] text-black leading-snug">
      [05203] 서울 강동구 고덕비즈밸리로 26 (고덕동) 1234호
    </div>
    <div class="flex items-center justify-center gap-[4px] py-[14px]">
      <button class="h-[28px] px-[8px] border border-gray-border rounded-full text-[12px] text-black bg-white">수정</button>
      <button class="h-[28px] px-[8px] border border-gray-border rounded-full text-[12px] text-black bg-white">삭제</button>
    </div>
  </div>

  {{-- 행 3 --}}
  <div class="grid border-b bg-white" style="grid-template-columns: 90px 1fr 100px">
    <div class="flex items-center justify-center py-[14px]">
      <span class="text-[14px] text-black">조아333</span>
    </div>
    <div class="flex items-center py-[14px] px-[10px] text-[13px] text-black leading-snug">
      [05203] 서울 강동구 가래여울길 24 (고덕동)
    </div>
    <div class="flex items-center justify-center gap-[4px] py-[14px]">
      <button class="h-[28px] px-[8px] border border-gray-border rounded-full text-[12px] text-black bg-white">수정</button>
      <button class="h-[28px] px-[8px] border border-gray-border rounded-full text-[12px] text-black bg-white">삭제</button>
    </div>
  </div>

</div>
