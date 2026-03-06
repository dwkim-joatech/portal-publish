{{-- 완성검사 신청 내역 --}}

{{-- GNB --}}
<x-gnb-sub title="완성검사 신청" />

{{-- 필터 + 완성검사 신청 버튼 --}}
<div class="flex items-center justify-end gap-[8px] px-[20px] py-[12px] border-b border-gray-border">
  <button class="flex items-center gap-[4px] h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 18h4v-2h-4v2zm-7-10v2h18V8H3zm3 7h12v-2H6v2z"/></svg>
    필터
  </button>
  <button class="flex items-center h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    완성검사 신청
  </button>
</div>

{{-- 테이블 --}}
<div>

  {{-- 테이블 헤더 --}}
  <div class="grid border-b bg-white" style="grid-template-columns: 1fr 80px 72px">
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">사용시설 상호</div>
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">상태</div>
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">상세정보</div>
  </div>

  <div class="grid border-b bg-white" style="grid-template-columns: 1fr 80px 72px">
    <div class="flex items-center py-[16px] px-[16px] text-[14px] text-black">조아테크 본사</div>
    <div class="flex items-center justify-center py-[16px] text-[13px] text-black">접수</div>
    <div class="flex items-center justify-center py-[16px]">
      <button class="text-gray-dark">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
      </button>
    </div>
  </div>
  {{-- 빈 상태 --}}
  <div class="grid border-b bg-gray-bg" style="grid-template-columns: 1fr 40px 72px">
    <div class="col-span-3 flex items-center justify-center py-[20px] px-[16px] text-center text-[14px] text-gray-text">완성검사 신청내역이 없습니다.</div>
  </div>

</div>
