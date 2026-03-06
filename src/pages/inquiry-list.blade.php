{{-- 문의 내역 --}}

{{-- GNB --}}
<x-gnb-sub title="문의 내역" />

{{-- 필터 + 문의 내역 버튼 --}}
<div class="flex items-center justify-end gap-[8px] px-[20px] py-[12px] border-b border-gray-border">
  <button class="flex items-center gap-[4px] h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 18h4v-2h-4v2zm-7-10v2h18V8H3zm3 7h12v-2H6v2z"/></svg>
    필터
  </button>
  <button class="flex items-center h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    문의 내역
  </button>
</div>

{{-- 테이블 --}}
<div>

  {{-- 테이블 헤더 --}}
  <div class="grid w-full border-b bg-white" style="grid-template-columns: 70px 1fr 72px">
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">문의유형</div>
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">제목</div>
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">상태</div>
  </div>

  {{-- 데이터 행 --}}
  <div class="grid w-full border-b bg-white" style="grid-template-columns: 70px 1fr 72px">
    <div class="flex items-center justify-center py-[16px] text-[14px] text-black">견적</div>
    <div class="flex items-center justify-center py-[16px] text-[14px] text-black">가스 시설 계약</div>
    <div class="flex items-center justify-center py-[16px]">
      <span class="inline-flex items-center h-[24px] px-[10px] rounded-full bg-blue-light text-primary text-[12px] font-medium">답변중</span>
    </div>
  </div>

</div>
