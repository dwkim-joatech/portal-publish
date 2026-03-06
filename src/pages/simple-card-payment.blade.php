{{-- 간편카드결제 내역 --}}

{{-- GNB --}}
<x-gnb-sub title="간편카드결제 내역" />

{{-- 필터 + 업체초대 버튼 --}}
<div class="flex items-center justify-end gap-[8px] px-[20px] py-[12px]">
  <button class="flex items-center gap-[4px] h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 18h4v-2h-4v2zm-7-10v2h18V8H3zm3 7h12v-2H6v2z"/></svg>
    필터
  </button>
  <button class="flex items-center h-[34px] px-[14px] border border-gray-border rounded-full text-[14px] text-black bg-white">
    업체초대
  </button>
</div>

{{-- 업체 선택 드롭다운 --}}
<div class="px-[20px] pb-[12px]">
  <div class="relative border border-gray-border h-[44px] flex items-center px-[12px] bg-white">
    <select class="w-full text-[14px] text-black outline-none bg-transparent appearance-none pr-[28px]">
      <option>(주)조아테크</option>
    </select>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[12px] size-[18px] rotate-90 pointer-events-none" />
  </div>
</div>

{{-- 사용자 초대코드 --}}
<div class="mx-[20px] mb-[12px] px-[14px] h-[44px] flex items-center bg-gray-bg">
  <span class="text-[14px] text-black">사용자 초대코드 : <span class="font-semibold">ADCGAH3V</span></span>
</div>

{{-- 상태 필터 탭 --}}
<div class="px-[20px] pb-[12px] overflow-x-auto" data-status-filter>
  <div class="flex items-center gap-[6px] w-max min-w-max">
    <button type="button" class="h-[34px] px-[14px] rounded-full text-[14px] whitespace-nowrap font-medium bg-black text-white" data-status-filter-button data-active="true">전체 0</button>
    <button type="button" class="h-[34px] px-[14px] rounded-full text-[14px] whitespace-nowrap text-black border border-gray-border bg-white" data-status-filter-button>결제성공 0</button>
    <button type="button" class="h-[34px] px-[14px] rounded-full text-[14px] whitespace-nowrap text-black border border-gray-border bg-white" data-status-filter-button>결제실패 0</button>
    <button type="button" class="h-[34px] px-[14px] rounded-full text-[14px] whitespace-nowrap text-black border border-gray-border bg-white" data-status-filter-button>결제취소 0</button>
  </div>
</div>

{{-- 빈 상태 --}}
<div class="border-t border-b border-gray-border bg-gray-bg flex items-center justify-center py-[40px]">
  <p class="text-[14px] text-gray-text">간편결제(대면) 신청내역이 없습니다.</p>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const filterGroup = document.querySelector('[data-status-filter]');

    if (!filterGroup) {
      return;
    }

    const filterButtons = filterGroup.querySelectorAll('[data-status-filter-button]');
    const activeClasses = ['font-medium', 'bg-black', 'text-white'];
    const inactiveClasses = ['text-black', 'border', 'border-gray-border', 'bg-white'];

    filterButtons.forEach((button) => {
      button.addEventListener('click', () => {
        filterButtons.forEach((targetButton) => {
          targetButton.dataset.active = 'false';
          targetButton.classList.remove(...activeClasses);
          targetButton.classList.add(...inactiveClasses);
        });

        button.dataset.active = 'true';
        button.classList.remove(...inactiveClasses);
        button.classList.add(...activeClasses);
      });
    });
  });
</script>

