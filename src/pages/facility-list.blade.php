{{-- 설비투자 예상분석 내역 --}}

{{-- GNB --}}
<x-gnb-sub title="설비투자 예상분석" />

{{-- 필터 + 설비투자 예상분석 버튼 --}}
<div class="flex items-center justify-end gap-[8px] px-[20px] py-[12px] border-b border-gray-border">
  <button class="flex items-center gap-[4px] h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 18h4v-2h-4v2zm-7-10v2h18V8H3zm3 7h12v-2H6v2z"/></svg>
    필터
  </button>
  <button class="flex items-center h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    설비투자 예상분석
  </button>
</div>

{{-- 테이블 --}}
<div>

  {{-- 테이블 헤더 --}}
  <div class="grid w-full border-b bg-white" style="grid-template-columns: 1fr 1fr 72px">
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">수요처</div>
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">계약기간</div>
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">상세정보</div>
  </div>

  {{-- 데이터 행 --}}
  <div class="grid w-full border-b bg-white" style="grid-template-columns: 1fr 1fr 72px">
    <div class="flex items-center justify-center py-[16px] text-[14px] text-black">1111</div>
    <div class="flex items-center justify-center py-[16px] text-[14px] text-black">2026-03-05</div>
    <div class="flex items-center justify-center py-[16px]">
      <button class="text-gray-dark" onclick="location.href='bulk-check-detail'">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
      </button>
    </div>
  </div>

</div>
