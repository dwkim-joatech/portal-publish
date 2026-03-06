{{-- 벌크로리점검 신청내역 상세 --}}

{{-- GNB: 타이틀 + X 닫기 --}}
<div class="flex items-center justify-between px-[20px] h-[60px]">
  <p class="text-[22px] font-bold text-black">벌크로리점검 신청내역</p>
  <button onclick="history.back()" class="size-[28px] flex items-center justify-center">
    <img src="{{ asset('images/close.svg') }}" alt="닫기" class="size-[24px]" />
  </button>
</div>

{{-- 상세 정보 --}}
<div class="px-[20px] pt-[8px] border-t border-gray-border flex flex-col gap-[12px]">

  <div class="flex gap-[4px] text-[15px]">
    <span class="text-black shrink-0">차량 번호 :</span>
    <span class="text-black">1111</span>
  </div>

  <div class="flex gap-[4px] text-[15px]">
    <span class="text-black shrink-0">차량 모델명 :</span>
    <span class="text-black">asdkjae</span>
  </div>

  <div class="flex gap-[4px] text-[15px]">
    <span class="text-black shrink-0">점검 희망일 :</span>
    <span class="text-black">2026-03-05</span>
  </div>

  <div class="flex gap-[4px] text-[15px]">
    <span class="text-black shrink-0">적재 용량 (L 단위) :</span>
    <span class="text-black">11.000</span>
  </div>

  <div class="flex gap-[4px] text-[15px]">
    <span class="text-black shrink-0">적재 용량 (Kg 단위) :</span>
    <span class="text-black">5.888</span>
  </div>

  <div class="flex gap-[4px] text-[15px]">
    <span class="text-black shrink-0">점검 부위 :</span>
    <span class="text-black">-</span>
  </div>

  <div class="flex gap-[4px] text-[15px]">
    <span class="text-black shrink-0">담당사원 :</span>
    <span class="text-black">-</span>
  </div>

  <div class="flex gap-[4px] text-[15px]">
    <span class="text-black shrink-0">전화번호 :</span>
    <span class="text-black">023334455</span>
  </div>

  <div class="flex gap-[4px] text-[15px]">
    <span class="text-black shrink-0">증상 :</span>
    <span class="text-black">증상입력</span>
  </div>

  <div class="flex gap-[4px] text-[15px]">
    <span class="text-black shrink-0">파일첨부 :</span>
    <span class="text-black">-</span>
  </div>

</div>

<div class="px-[20px] pt-[20px]">
  <button class="w-full btn-primary" onclick="location.href='bulk-check-list'">목록</button>
</div>