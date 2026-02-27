{{-- 투자예상분석 --}}

{{-- GNB --}}
<x-gnb-sub title="투자예상분석" />

{{-- 탭 --}}
<div class="bg-white border-b border-gray-border flex px-[20px]">
  <button class="invest-tab invest-tab-active mr-[20px]" data-invest-tab data-target="tab-register">등록</button>
  <button class="invest-tab mr-[20px]" data-invest-tab data-target="tab-result">결과</button>
  <button class="invest-tab" data-invest-tab data-target="tab-list">결과목록</button>
</div>

{{-- 탭 콘텐츠: 등록 --}}
<div id="tab-register" class="flex flex-col gap-[32px] px-[20px] py-[24px]">

  {{-- 기본정보 입력 --}}
  <div class="flex flex-col gap-[16px]">
    <h2 class="title-sub">기본정보 입력</h2>

    {{-- 수요처 --}}
    <div class="form-field">
      <x-form-label-required label="수요처" />
      <div class="form-input-wrapper">
        <input type="text" placeholder="수요처 입력" class="form-input placeholder-gray-text" id="inp-demand" />
      </div>
    </div>

    {{-- 계약기간 --}}
    <div class="form-field">
      <x-form-label-required label="계약기간" />
      <div class="form-input-wrapper relative">
        <select class="form-select text-gray-text" id="inp-period">
          <option value="" disabled selected>계약기간 선택</option>
          <option value="12">1년 (12개월)</option>
          <option value="24">2년 (24개월)</option>
          <option value="36">3년 (36개월)</option>
          <option value="48">4년 (48개월)</option>
          <option value="60">5년 (60개월)</option>
        </select>
        <x-select-chevron />
      </div>
    </div>
  </div>

  {{-- 시설투자비 입력 --}}
  <div class="flex flex-col gap-[16px]">
    <h2 class="title-sub">시설투자비 입력</h2>

    {{-- 제설비 --}}
    <div class="form-field">
      <x-form-label-required label="제설비" />
      <div class="form-input-wrapper">
        <input type="number" value="0" class="form-input text-right" id="inp-install" oninput="calcInvest()" />
      </div>
    </div>

    {{-- 시공비 --}}
    <div class="form-field">
      <x-form-label-required label="시공비" />
      <div class="form-input-wrapper">
        <input type="number" value="0" class="form-input text-right" id="inp-construct" oninput="calcInvest()" />
      </div>
    </div>

    {{-- 기타비용 --}}
    <div class="form-field">
      <x-form-label-required label="기타비용" />
      <div class="form-input-wrapper">
        <input type="number" value="0" class="form-input text-right" id="inp-other" oninput="calcInvest()" />
      </div>
    </div>

    {{-- 투자계 (자동계산) --}}
    <div class="form-field">
      <label class="form-label">투자계 <span class="text-blue-text font-normal">(제설비+시공비+기타비용)</span></label>
      <div class="form-output">
        <span class="form-output-text" id="out-total-invest">0</span>
      </div>
    </div>
  </div>

  {{-- 추정값 입력 --}}
  <div class="flex flex-col gap-[16px]">
    <h2 class="title-sub">추정값 입력</h2>

    {{-- 예상 차입이자율 연리 --}}
    <div class="form-field">
      <label class="form-label">예상 차입이자율 연리(%)</label>
      <div class="form-input-wrapper">
        <input type="number" value="8.00" step="0.01" class="form-input text-right" id="inp-rate" oninput="calcResults()" />
      </div>
    </div>

    {{-- 예상 월사용량 --}}
    <div class="form-field">
      <x-form-label-required label="예상 월사용량(KG)" />
      <div class="form-input-wrapper">
        <input type="number" value="0" class="form-input text-right" id="inp-monthly-kg" oninput="calcResults()" />
      </div>
    </div>

    {{-- 추정단가_매입단가 --}}
    <div class="form-field">
      <x-form-label-required label="추정단가_매입단가(원/KG)" />
      <div class="form-input-wrapper">
        <input type="number" value="0" class="form-input text-right" id="inp-buy-price" oninput="calcResults()" />
      </div>
    </div>

    {{-- 추정단가_마진단가 --}}
    <div class="form-field">
      <x-form-label-required label="추정단가_마진단가(원/KG)" />
      <div class="form-input-wrapper">
        <input type="number" value="0" class="form-input text-right" id="inp-margin" oninput="calcResults()" />
      </div>
    </div>
  </div>

  {{-- 추정값 결과 --}}
  <div class="flex flex-col gap-[16px]">
    <h2 class="title-sub">추정값 결과</h2>

    {{-- 추정단가_판매단가 --}}
    <div class="form-field">
      <label class="form-label">추정단가_판매단가(원/KG) <span class="text-blue-text font-normal">(매입단가+마진단가)</span></label>
      <div class="form-output">
        <span class="form-output-text" id="out-sell-price">0</span>
      </div>
    </div>

    {{-- 추정월현금흐름_매입계 --}}
    <div class="form-field">
      <label class="form-label">추정월현금흐름_매입계 <span class="text-blue-text font-normal">(월사용량×매입단가)</span></label>
      <div class="form-output">
        <span class="form-output-text" id="out-buy-flow">0</span>
      </div>
    </div>

    {{-- 추정월현금흐름_매출계 --}}
    <div class="form-field">
      <label class="form-label">추정월현금흐름_매출계 <span class="text-blue-text font-normal">(월사용량×판매단가)</span></label>
      <div class="form-output">
        <span class="form-output-text" id="out-sell-flow">0</span>
      </div>
    </div>

    {{-- 추정월현금흐름_단순마진계 --}}
    <div class="form-field">
      <label class="form-label">추정월현금흐름_단순마진계 <span class="text-blue-text font-normal">(매출계-매입계)</span></label>
      <div class="form-output">
        <span class="form-output-text" id="out-margin-flow">0</span>
      </div>
    </div>

    {{-- 추정월현금흐름_납부이자 --}}
    <div class="form-field">
      <label class="form-label">추정월현금흐름_납부이자 <span class="text-blue-text font-normal">(투자비×차입이자율(월))</span></label>
      <div class="form-output">
        <span class="form-output-text" id="out-interest">0</span>
      </div>
    </div>
  </div>

</div>

{{-- 탭 콘텐츠: 결과 --}}
<div id="tab-result" class="hidden">

  {{-- 설비투자수익 예상결과 --}}
  <div class="flex flex-col gap-[16px] px-[20px] pt-[24px] pb-[28px]">
    <h2 class="title-section">설비투자수익 예상결과</h2>

    {{-- 사업투자수익률 --}}
    <div class="form-field">
      <label class="form-label">사업투자수익률(%, 년)</label>
      <div class="form-output">
        <span class="form-output-text" id="res-roi">1,000</span>
      </div>
    </div>

    {{-- 가스판매 순마진총액(총계약기간) --}}
    <div class="form-field">
      <label class="form-label">가스판매 순마진총액(총계약기간)</label>
      <div class="form-output">
        <span class="form-output-text" id="res-total-margin">228</span>
      </div>
    </div>

    {{-- 가스판매 순마진총액(년) --}}
    <div class="form-field">
      <label class="form-label">가스판매 순마진총액(년)</label>
      <div class="form-output">
        <span class="form-output-text" id="res-yearly-margin">114</span>
      </div>
    </div>

    {{-- 가스판매 순마진총액(월) --}}
    <div class="form-field">
      <label class="form-label">가스판매 순마진총액(월)</label>
      <div class="form-output">
        <span class="form-output-text" id="res-monthly-margin">10</span>
      </div>
    </div>
  </div>

  {{-- 세부내역 --}}
  <div class="flex flex-col gap-[12px] px-[20px] pb-[24px]">
    <h2 class="title-section">세부내역</h2>

    {{-- 가로 스크롤 테이블 --}}
    <div class="table-scrollable">
      <table class="w-full min-w-[560px] text-[13px] border-collapse">
        <thead>
          <tr class="table-header">
            <th class="table-th text-left">경과월</th>
            <th class="table-th text-right">월예상매출</th>
            <th class="table-th text-right">가스매입총액</th>
            <th class="table-th text-right">차입이자</th>
            <th class="table-th text-right">NCF</th>
            <th class="table-th text-right">누적NCF</th>
          </tr>
        </thead>
        <tbody id="detail-tbody">
          {{-- M0 초기투자액 행 --}}
          <tr class="table-row">
            <td class="table-td">M0</td>
            <td class="table-td text-center" colspan="5">초기투자액</td>
          </tr>
          {{-- M1~M6 샘플 행 --}}
          <tr class="table-row"><td class="table-td">M1</td><td class="table-td text-right">2</td><td class="table-td text-right">1</td><td class="table-td text-right">0</td><td class="table-td text-right">1</td><td class="table-td text-right">1</td></tr>
          <tr class="table-row"><td class="table-td">M2</td><td class="table-td text-right">2</td><td class="table-td text-right">1</td><td class="table-td text-right">0</td><td class="table-td text-right">1</td><td class="table-td text-right">2</td></tr>
          <tr class="table-row"><td class="table-td">M3</td><td class="table-td text-right">2</td><td class="table-td text-right">1</td><td class="table-td text-right">0</td><td class="table-td text-right">1</td><td class="table-td text-right">3</td></tr>
          <tr class="table-row"><td class="table-td">M4</td><td class="table-td text-right">2</td><td class="table-td text-right">1</td><td class="table-td text-right">0</td><td class="table-td text-right">1</td><td class="table-td text-right">4</td></tr>
          <tr class="table-row"><td class="table-td">M5</td><td class="table-td text-right">2</td><td class="table-td text-right">1</td><td class="table-td text-right">0</td><td class="table-td text-right">1</td><td class="table-td text-right">5</td></tr>
          <tr class="table-row"><td class="table-td">M6</td><td class="table-td text-right">2</td><td class="table-td text-right">1</td><td class="table-td text-right">0</td><td class="table-td text-right">1</td><td class="table-td text-right">6</td></tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

{{-- 탭 콘텐츠: 결과목록 --}}
<div id="tab-list" class="hidden px-[20px] pt-[16px] pb-[24px]">

  {{-- 상단 버튼 행 --}}
  <div class="flex justify-end gap-[8px] mb-[16px]">
    <button class="h-[36px] px-[16px] rounded-full border border-gray-border bg-white text-[13px] text-black flex items-center gap-[6px]" onclick="openFilterSheet()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
      필터
    </button>
    <button class="h-[36px] px-[16px] rounded-full border border-gray-border bg-white text-[13px] text-black whitespace-nowrap">설비투자 예상분석</button>
  </div>

  {{-- 목록 테이블 --}}
  <div class="border border-gray-border">
    {{-- 헤더 --}}
    <div class="list-grid-3col border-b border-gray-border bg-white">
      <div class="list-grid-th">수요처</div>
      <div class="list-grid-th">계약기간</div>
      <div class="list-grid-th">상세정보</div>
    </div>
    {{-- 행 1 --}}
    <div class="list-grid-3col border-b border-gray-border">
      <div class="list-grid-td text-center">1</div>
      <div class="list-grid-td text-center">24개월</div>
      <div class="list-grid-td flex items-center justify-center">
        <button class="text-gray-dark">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
    {{-- 행 2 --}}
    <div class="list-grid-3col border-b border-gray-border">
      <div class="list-grid-td text-center">1</div>
      <div class="list-grid-td text-center">24개월</div>
      <div class="list-grid-td flex items-center justify-center">
        <button class="text-gray-dark">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
    {{-- 행 3 --}}
    <div class="list-grid-3col">
      <div class="list-grid-td text-center">1</div>
      <div class="list-grid-td text-center">24개월</div>
      <div class="list-grid-td flex items-center justify-center">
        <button class="text-gray-dark">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
    <div class="list-grid-3col">
      <div class="list-grid-td text-center">1</div>
      <div class="list-grid-td text-center">24개월</div>
      <div class="list-grid-td flex items-center justify-center">
        <button class="text-gray-dark">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
    <div class="list-grid-3col">
      <div class="list-grid-td text-center">1</div>
      <div class="list-grid-td text-center">24개월</div>
      <div class="list-grid-td flex items-center justify-center">
        <button class="text-gray-dark">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
    <div class="list-grid-3col">
      <div class="list-grid-td text-center">1</div>
      <div class="list-grid-td text-center">24개월</div>
      <div class="list-grid-td flex items-center justify-center">
        <button class="text-gray-dark">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
    
  </div>

</div>

{{-- 결과보기 / 결과 저장하기 버튼 --}}
<div class="px-[20px] pb-[20px] pt-[4px]" id="btn-wrap-result">
  <button class="btn-primary w-full" id="btn-view-result">결과보기</button>
</div>
<div class="px-[20px] pb-[20px] pt-[4px] hidden" id="btn-wrap-save">
  <button class="btn-primary w-full">결과 저장하기</button>
</div>

{{-- 필터 바텀시트 --}}
<div id="filter-sheet" class="invisible fixed inset-0 z-50 flex flex-col justify-end">
  {{-- 딤드 오버레이 --}}
  <div id="filter-overlay" class="absolute inset-0 bg-black-overlay opacity-0 transition-opacity duration-300" onclick="closeFilterSheet()"></div>
  {{-- 시트 --}}
  <div id="filter-drawer" class="relative bg-white rounded-t-[20px] px-[20px] pt-[24px] pb-[20px] mb-[60px] translate-y-full transition-transform duration-300 flex flex-col gap-[20px]">

    <h2 class="text-[22px] font-bold text-black">필터</h2>

    {{-- 등록일 --}}
    <div class="flex flex-col gap-[8px]">
      <div class="flex items-center gap-[4px]">
        <label class="sheet-label">등록일</label>
        <span class="required-indicator"></span>
      </div>
      <div class="flex items-center gap-[8px]">
        <div class="flex-1 form-input-wrapper gap-[8px] cursor-pointer" onclick="toggleDatePicker('start-date')">
          <input type="text" placeholder="년-월-일" class="w-full text-[13px] text-gray-text outline-none bg-transparent cursor-pointer" readonly id="start-date-input" />
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        </div>
        <span class="text-[14px] text-black shrink-0">~</span>
        <div class="flex-1 form-input-wrapper gap-[8px] cursor-pointer" onclick="toggleDatePicker('end-date')">
          <input type="text" placeholder="년-월-일" class="w-full text-[13px] text-gray-text outline-none bg-transparent cursor-pointer" readonly id="end-date-input" />
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        </div>
      </div>
    </div>

    {{-- 수요처 --}}
    <div class="form-field">
      <label class="sheet-label">수요처</label>
      <div class="form-input-wrapper">
        <input type="text" placeholder="수요처 입력" class="form-input placeholder-gray-text" />
      </div>
    </div>

    {{-- 날짜 선택기 바텀시트 --}}
    <div id="date-picker-sheet" class="invisible fixed inset-0 z-50 flex flex-col justify-end">
      {{-- 딤드 오버레이 --}}
      <div id="date-picker-overlay" class="absolute inset-0 bg-black-overlay opacity-0 transition-opacity duration-300" onclick="closeDatePicker()"></div>
      {{-- 시트 --}}
      <div id="date-picker-drawer" class="relative bg-white rounded-t-[20px] px-[20px] pt-[24px] pb-[20px] mb-[60px] translate-y-full transition-transform duration-300 flex flex-col gap-[20px]">
        <h2 class="text-[18px] font-bold text-black">날짜 선택</h2>

        {{-- 월/년 선택 --}}
        <div class="flex items-center justify-between mb-[16px]">
          <button onclick="changeMonth(-1)" class="p-[8px]">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
          </button>
          <div class="text-[16px] font-semibold text-black" id="current-month"></div>
          <button onclick="changeMonth(1)" class="p-[8px]">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
          </button>
        </div>

        {{-- 요일 헤더 --}}
        <div class="grid grid-cols-7 gap-[4px] mb-[8px]">
          <div class="text-center text-[12px] text-red-500 font-semibold">일</div>
          <div class="text-center text-[12px] text-black font-semibold">월</div>
          <div class="text-center text-[12px] text-black font-semibold">화</div>
          <div class="text-center text-[12px] text-black font-semibold">수</div>
          <div class="text-center text-[12px] text-black font-semibold">목</div>
          <div class="text-center text-[12px] text-black font-semibold">금</div>
          <div class="text-center text-[12px] text-blue-500 font-semibold">토</div>
        </div>

        {{-- 날짜 그리드 --}}
        <div id="calendar-grid" class="grid grid-cols-7 gap-[4px]">
          <!-- 날짜는 JavaScript로 동적으로 생성 -->
        </div>

        {{-- 확인 버튼 --}}
        <button onclick="confirmDate()" class="btn-primary w-full">확인</button>
      </div>
    </div>

    {{-- 계약기간 --}}
    <div class="form-field">
      <label class="sheet-label">계약기간</label>
      <div class="form-input-wrapper relative">
        <select class="form-select">
          <option value="">전체</option>
          <option value="12">1년 (12개월)</option>
          <option value="24">2년 (24개월)</option>
          <option value="36">3년 (36개월)</option>
          <option value="48">4년 (48개월)</option>
          <option value="60">5년 (60개월)</option>
        </select>
        <x-select-chevron />
      </div>
    </div>

    {{-- 초기화 / 검색 버튼 --}}
    <div class="flex gap-[8px] pt-[4px]">
      <button class="btn-secondary flex-1" onclick="closeFilterSheet()">초기화</button>
      <button class="btn-primary flex-1" onclick="closeFilterSheet()">검색</button>
    </div>
  </div>
</div>

<script>
  (function () {
    // 공통 바텀시트 열기/닫기 헬퍼
    function openSheet(sheetId) {
      var sheet   = document.getElementById(sheetId + '-sheet');
      var overlay = document.getElementById(sheetId + '-overlay');
      var drawer  = document.getElementById(sheetId + '-drawer');
      sheet.classList.remove('invisible');
      void sheet.offsetWidth;
      overlay.classList.remove('opacity-0');
      overlay.classList.add('opacity-100');
      drawer.classList.remove('translate-y-full');
      drawer.classList.add('translate-y-0');
      document.body.style.overflow = 'hidden';
    }

    function closeSheet(sheetId) {
      var sheet   = document.getElementById(sheetId + '-sheet');
      var overlay = document.getElementById(sheetId + '-overlay');
      var drawer  = document.getElementById(sheetId + '-drawer');
      overlay.classList.remove('opacity-100');
      overlay.classList.add('opacity-0');
      drawer.classList.remove('translate-y-0');
      drawer.classList.add('translate-y-full');
      setTimeout(function () { sheet.classList.add('invisible'); }, 300);
      document.body.style.overflow = '';
    }

    // 탭 전환
    var tabs = Array.from(document.querySelectorAll('[data-invest-tab]'));
    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        tabs.forEach(function (t) { t.classList.remove('invest-tab-active'); });
        tab.classList.add('invest-tab-active');

        var target = tab.getAttribute('data-target');
        ['tab-register', 'tab-result', 'tab-list'].forEach(function (id) {
          document.getElementById(id).classList.toggle('hidden', id !== target);
        });
        document.getElementById('btn-wrap-result').classList.toggle('hidden', target !== 'tab-register');
        document.getElementById('btn-wrap-save').classList.toggle('hidden', target !== 'tab-result');
      });
    });

    // 투자계 계산
    window.calcInvest = function () {
      var a = parseFloat(document.getElementById('inp-install').value) || 0;
      var b = parseFloat(document.getElementById('inp-construct').value) || 0;
      var c = parseFloat(document.getElementById('inp-other').value) || 0;
      document.getElementById('out-total-invest').textContent = (a + b + c).toLocaleString('ko-KR');
      calcResults();
    };

    // 결과보기 버튼
    document.getElementById('btn-view-result').addEventListener('click', function () {
      document.querySelector('[data-target="tab-result"]').click();
    });

    // 추정값 결과 계산
    window.calcResults = function () {
      var invest = (parseFloat(document.getElementById('inp-install').value) || 0)
                 + (parseFloat(document.getElementById('inp-construct').value) || 0)
                 + (parseFloat(document.getElementById('inp-other').value) || 0);
      var rate     = parseFloat(document.getElementById('inp-rate').value) || 0;
      var monthly  = parseFloat(document.getElementById('inp-monthly-kg').value) || 0;
      var buyPrice = parseFloat(document.getElementById('inp-buy-price').value) || 0;
      var margin   = parseFloat(document.getElementById('inp-margin').value) || 0;

      var sellPrice   = buyPrice + margin;
      var buyFlow     = monthly * buyPrice;
      var sellFlow    = monthly * sellPrice;
      var marginFlow  = sellFlow - buyFlow;
      var interest    = invest * (rate / 100 / 12);

      document.getElementById('out-sell-price').textContent  = sellPrice.toLocaleString('ko-KR');
      document.getElementById('out-buy-flow').textContent    = Math.round(buyFlow).toLocaleString('ko-KR');
      document.getElementById('out-sell-flow').textContent   = Math.round(sellFlow).toLocaleString('ko-KR');
      document.getElementById('out-margin-flow').textContent = Math.round(marginFlow).toLocaleString('ko-KR');
      document.getElementById('out-interest').textContent    = Math.round(interest).toLocaleString('ko-KR');
    };

    // 필터 바텀시트
    window.openFilterSheet  = function () { openSheet('filter'); };
    window.closeFilterSheet = function () { closeSheet('filter'); };

    // 날짜 선택기 관련 변수
    var currentDatePicker = null;
    var currentDate = new Date();
    var selectedDate = null;

    // 날짜 선택기 열기
    window.toggleDatePicker = function (type) {
      currentDatePicker = type;
      selectedDate = null;
      openSheet('date-picker');
      generateCalendar();
    };

    // 날짜 선택기 닫기
    window.closeDatePicker = function () { closeSheet('date-picker'); };

    // 달력 생성
    function generateCalendar() {
      var year = currentDate.getFullYear();
      var month = currentDate.getMonth();
      document.getElementById('current-month').textContent = year + '년 ' + (month + 1) + '월';

      var firstDay = new Date(year, month, 1);
      var lastDay = new Date(year, month + 1, 0);
      var prevLastDay = new Date(year, month, 0);
      var firstDayIndex = firstDay.getDay();
      var lastDayDate = lastDay.getDate();
      var prevLastDayDate = prevLastDay.getDate();
      var today = new Date();
      var dates = '';

      for (var x = firstDayIndex; x > 0; x--) {
        dates += '<div class="text-center py-[8px] text-[13px] text-gray-text">' + (prevLastDayDate - x + 1) + '</div>';
      }
      for (var i = 1; i <= lastDayDate; i++) {
        var isToday = today.getDate() === i && today.getMonth() === month && today.getFullYear() === year;
        var isSelected = selectedDate && selectedDate.getDate() === i && selectedDate.getMonth() === month && selectedDate.getFullYear() === year;
        var classes = 'text-center py-[8px] text-[13px] cursor-pointer rounded-[8px] ';
        if (isToday) classes += 'bg-primary text-white ';
        else if (isSelected) classes += 'bg-blue-light text-blue-text ';
        else classes += 'text-black hover:bg-gray-bg ';
        dates += '<div class="' + classes + '" onclick="selectDate(' + i + ')">' + i + '</div>';
      }
      var nextDays = 42 - (firstDayIndex + lastDayDate);
      for (var j = 1; j <= nextDays; j++) {
        dates += '<div class="text-center py-[8px] text-[13px] text-gray-text">' + j + '</div>';
      }
      document.getElementById('calendar-grid').innerHTML = dates;
    }

    // 날짜 선택
    window.selectDate = function (day) {
      selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
      generateCalendar();
    };

    // 월 변경
    window.changeMonth = function (direction) {
      currentDate.setMonth(currentDate.getMonth() + direction);
      generateCalendar();
    };

    // 날짜 확인
    window.confirmDate = function () {
      if (selectedDate) {
        var formattedDate = selectedDate.getFullYear() + '-' +
                           String(selectedDate.getMonth() + 1).padStart(2, '0') + '-' +
                           String(selectedDate.getDate()).padStart(2, '0');
        if (currentDatePicker === 'start-date') {
          document.getElementById('start-date-input').value = formattedDate;
        } else if (currentDatePicker === 'end-date') {
          document.getElementById('end-date-input').value = formattedDate;
        }
      }
      closeDatePicker();
    };
  })();
</script>
