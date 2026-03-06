{{-- 즐겨찾기 관리 --}}

{{-- GNB --}}
<x-gnb-sub title="즐겨찾기 관리" />

{{-- 필터 + 즐겨찾기 등록 버튼 --}}
<div class="flex items-center justify-end gap-[8px] px-[20px] py-[12px] border-b border-gray-border">
  <a href="{{ asset('favorite-write') }}" class="flex items-center h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    즐겨찾기 등록
  </a>
</div>

{{-- 테이블 --}}
<div>

  {{-- 테이블 헤더 --}}
  <div class="grid border-b bg-white" style="grid-template-columns: 1fr 100px">
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">제목</div>
    <div class="flex items-center justify-center py-[12px] text-[13px] text-gray-md">수정/삭제</div>
  </div>

  {{-- 행 1: 기본 즐겨찾기 --}}
  <div class="grid border-b bg-white" style="grid-template-columns: 1fr 100px">
    <div class="flex items-center py-[14px] px-[10px] text-[13px] text-black leading-snug">
      조아테크 포털 사이트
    </div>
    <div class="flex items-center justify-center gap-[4px] py-[14px]">
      <button class="h-[28px] px-[8px] border border-gray-border rounded-full text-[12px] text-black bg-white">수정</button>
      <button class="h-[28px] px-[8px] border border-gray-border rounded-full text-[12px] text-black bg-white">삭제</button>
    </div>
  </div>

</div>
