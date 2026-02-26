{{-- 중고장터 목록 --}}

{{-- GNB --}}
<x-gnb-sub title="조아테크 서비스" />

{{-- 메뉴 탭 --}}
<x-menu-tab />

{{-- 필터 + 글작성 버튼 --}}
<div class="flex items-center justify-end gap-[6px] px-[20px] pt-[20px] pb-[10px]">
  <button id="btn-filter" class="flex items-center gap-[4px] h-[30px] px-[10px] bg-white border border-[#bbb] rounded-full text-[13px] text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 18h4v-2h-4v2zm-7-10v2h18V8H3zm3 7h12v-2H6v2z"/></svg>
    필터
  </button>
  <a href="{{ asset('junggo-write') }}" class="h-[30px] px-[10px] bg-white border border-[#bbb] rounded-full text-[13px] text-black flex items-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
    글작성
  </a>
</div>

{{-- 필터 팝업 --}}
<div id="filter-overlay" class="fixed inset-0 bg-black/50 z-[100] hidden" style="max-width: 360px; margin: 0 auto;">
  <div class="absolute bottom-0 left-0 right-0 bg-white rounded-t-[16px]">

    {{-- 팝업 헤더 --}}
    <div class="flex h-[60px] items-center justify-between px-[20px] border-b border-[#eee]">
      <p class="text-[18px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">필터</p>
      <button id="btn-filter-close" class="relative size-[24px] flex items-center justify-center">
        <img src="{{ asset('images/close.svg') }}" alt="닫기" class="block size-full" />
      </button>
    </div>

    {{-- 팝업 폼 --}}
    <div class="px-[20px] py-[20px] flex flex-col gap-[20px]">

      {{-- 작성일 --}}
      <div class="flex flex-col gap-[6px]">
        <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">작성일</span>
        <div class="flex gap-[6px]">
          <div class="flex-1 border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
            <input type="date" class="w-full text-[14px] text-black outline-none bg-transparent" style="font-family: 'Inter', sans-serif" />
          </div>
          <span class="flex items-center justify-center w-[20px] h-[40px] text-[14px] text-black">~</span>
          <div class="flex-1 border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
            <input type="date" class="w-full text-[14px] text-black outline-none bg-transparent" style="font-family: 'Inter', sans-serif" />
          </div>
        </div>
      </div>

      {{-- 구분 --}}
      <div class="flex flex-col gap-[6px]">
        <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">구분</span>
        <div class="relative border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
          <select class="w-full appearance-none bg-transparent text-[14px] text-black outline-none" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
            <option value="">전체</option>
            <option>판매글</option>
            <option>구매글</option>
          </select>
          <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[10px] size-[16px] pointer-events-none" style="transform: rotate(90deg)" />
        </div>
      </div>

      {{-- 진행상태 --}}
      <div class="flex flex-col gap-[6px]">
        <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">진행상태</span>
        <div class="relative border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
          <select class="w-full appearance-none bg-transparent text-[14px] text-black outline-none" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
            <option value="">전체</option>
            <option>거래중</option>
            <option>거래완료</option>
          </select>
          <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[10px] size-[16px] pointer-events-none" style="transform: rotate(90deg)" />
        </div>
      </div>

      {{-- 검색어 --}}
      <div class="flex flex-col gap-[6px]">
        <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">검색어</span>
        <div class="border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
          <input type="text" placeholder="검색어를 입력해주세요" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#ccc]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif" />
        </div>
      </div>

    </div>

    {{-- 팝업 버튼 --}}
    <div class="flex gap-[10px] px-[20px] pb-[20px] pt-[4px]">
      <button id="btn-filter-reset" class="flex-1 h-[40px] bg-[#131E56] border border-[#ddd] text-[14px] text-white" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">초기화</button>
      <button class="flex-1 h-[40px] bg-[#2074e2] text-white text-[14px] font-semibold" style="font-family: 'Inter', sans-serif">검색</button>
    </div>

  </div>
</div>

<script>
  (function () {
    var overlay = document.getElementById('filter-overlay');
    document.getElementById('btn-filter').addEventListener('click', function () {
      overlay.classList.remove('hidden');
    });
    document.getElementById('btn-filter-close').addEventListener('click', function () {
      overlay.classList.add('hidden');
    });
    document.getElementById('btn-filter-reset').addEventListener('click', function () {
      overlay.querySelectorAll('input, select, textarea').forEach(function (el) {
        el.value = '';
      });
    });
    overlay.addEventListener('click', function (e) {
      if (e.target === overlay) overlay.classList.add('hidden');
    });
  })();
</script>

{{-- 목록 --}}
<div class="px-[20px]">

  {{-- 아이템 1: 판매글 + 거래중 --}}
  <a href="{{ asset('junggo-detail') }}" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
    <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
      <img src="{{ asset('images/image32.png') }}" alt="" class="absolute w-full h-full object-cover" />
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(32,116,226,0.6)] text-[#2074e2] rounded-full flex items-center">판매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(32,116,226,0.15)] text-[#2074e2] rounded-full flex items-center">거래중</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">[탱크/용기] 250,200Kg 소형저장탱크 할부판매 합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-[#999]" style="font-family: 'Inter', sans-serif">
        <span>서울</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

  {{-- 아이템 2: 구매글 + 거래완료 --}}
  <a href="{{ asset('junggo-detail') }}" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
    <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
      <img src="{{ asset('images/image34.png') }}" alt="" class="absolute w-full h-full object-cover" />
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(57,189,40,0.6)] text-[#39bd28] rounded-full flex items-center">구매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(102,102,102,0.15)] text-[#666] rounded-full flex items-center">거래완료</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">[탱크/용기] 200KG 탱크 구합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-[#999]" style="font-family: 'Inter', sans-serif">
        <span>서울</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

  {{-- 아이템 3: 판매글 + 거래중 --}}
  <a href="{{ asset('junggo-detail') }}" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
    <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
      <img src="{{ asset('images/image26.png') }}" alt="" class="absolute w-full h-full object-cover" />
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(32,116,226,0.6)] text-[#2074e2] rounded-full flex items-center">판매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(32,116,226,0.15)] text-[#2074e2] rounded-full flex items-center">거래중</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">[탱크/용기] 250,200Kg 소형저장탱크 할부판매 합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-[#999]" style="font-family: 'Inter', sans-serif">
        <span>서울</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

  {{-- 아이템 4: 구매글 + 거래완료 (이미지 없음) --}}
  <a href="{{ asset('junggo-detail') }}" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
    <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden flex items-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ccc"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(57,189,40,0.6)] text-[#39bd28] rounded-full flex items-center">구매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(102,102,102,0.15)] text-[#666] rounded-full flex items-center">거래완료</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">[탱크/용기] 200KG 탱크 구합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-[#999]" style="font-family: 'Inter', sans-serif">
        <span>서울</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

  {{-- 아이템 5: 구매글 + 거래완료 --}}
  <a href="{{ asset('junggo-detail') }}" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
    <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
      <img src="{{ asset('images/image28.png') }}" alt="" class="absolute w-full h-full object-cover" />
    </div>
    <div class="flex-1 flex flex-col gap-[6px]">
      <div class="flex gap-[6px]">
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(57,189,40,0.6)] text-[#39bd28] rounded-full flex items-center">구매글</span>
        <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(102,102,102,0.15)] text-[#666] rounded-full flex items-center">거래완료</span>
      </div>
      <p class="text-[14px] font-semibold text-black leading-normal" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">[탱크/용기] 200KG 탱크 구합니다.</p>
      <div class="flex items-center gap-[6px] text-[12px] text-[#999]" style="font-family: 'Inter', sans-serif">
        <span>서울</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>0105259****</span>
        <div class="w-px h-[12px] bg-[#ddd]"></div>
        <span>2026.01.16</span>
      </div>
    </div>
  </a>

</div>
