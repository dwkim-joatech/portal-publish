{{-- 투자예상분석 - 결과목록 --}}

{{-- GNB --}}
<x-gnb-sub title="투자예상분석" />

{{-- 탭 --}}
<div class="bg-white border-b border-gray-border flex px-[20px]">
  <a href="{{ asset('invest-expect') }}" class="invest-tab mr-[20px]">등록</a>
  <a href="{{ asset('invest-result') }}" class="invest-tab mr-[20px]">결과</a>
  <span class="invest-tab invest-tab-active">결과목록</span>
</div>

{{-- 결과목록 --}}
<div class="px-[20px] pt-[16px] pb-[2px]">

  {{-- 상단 버튼 행 --}}
  <div class="flex justify-end gap-[8px] mb-[16px]">
    <button class="h-[36px] px-[16px] rounded-full border border-gray-border bg-white text-[13px] text-black flex items-center gap-[6px]" onclick="openFilterSheet()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
      필터
    </button>
    <a href="{{ asset('invest-expect') }}" class="h-[36px] px-[16px] rounded-full border border-gray-border bg-white text-[13px] text-black whitespace-nowrap flex items-center">설비투자 예상분석</a>
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
    <div class="list-grid-3col border-b border-gray-border">
      <div class="list-grid-td text-center">1</div>
      <div class="list-grid-td text-center">24개월</div>
      <div class="list-grid-td flex items-center justify-center">
        <button class="text-gray-dark">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
    <div class="list-grid-3col border-b border-gray-border">
      <div class="list-grid-td text-center">1</div>
      <div class="list-grid-td text-center">24개월</div>
      <div class="list-grid-td flex items-center justify-center">
        <button class="text-gray-dark">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
    <div class="list-grid-3col border-b border-gray-border">
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

{{-- 필터 바텀시트 --}}
<div id="filter-sheet" class="invisible fixed inset-0 z-50 flex flex-col justify-end">
  <div id="filter-overlay" class="absolute inset-0 bg-black-overlay opacity-0 transition-opacity duration-300" onclick="closeFilterSheet()"></div>
  <div id="filter-drawer" class="relative bg-white rounded-t-[20px] px-[20px] pt-[24px] pb-[20px] translate-y-full transition-transform duration-300 flex flex-col gap-[20px]">

    <h2 class="text-[22px] font-bold text-black">필터</h2>

    {{-- 등록일 --}}
    <div class="flex flex-col gap-[8px]">
      <div class="flex items-center gap-[4px]">
        <label class="sheet-label">등록일</label>
        <span class="required-indicator"></span>
      </div>
      <div class="flex items-center gap-[8px]">
        <div class="flex-1 form-input-wrapper gap-[8px] cursor-pointer" onclick="toggleDatePicker('start-date')">
          <input type="text" placeholder="년-월-일" class="w-full text-[13px] text-gray-text outline-none bg-transparent cursor-pointer pointer-events-none" readonly id="start-date-input" />
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        </div>
        <span class="text-[14px] text-black shrink-0">~</span>
        <div class="flex-1 form-input-wrapper gap-[8px] cursor-pointer" onclick="toggleDatePicker('end-date')">
          <input type="text" placeholder="년-월-일" class="w-full text-[13px] text-gray-text outline-none bg-transparent cursor-pointer pointer-events-none" readonly id="end-date-input" />
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
    <div id="date-picker-sheet" class="invisible fixed inset-0 z-[60] flex flex-col justify-end">
      <div id="date-picker-overlay" class="absolute inset-0 bg-black-overlay opacity-0 transition-opacity duration-300" onclick="closeDatePicker()"></div>
      <div id="date-picker-drawer" class="relative bg-white rounded-t-[20px] px-[20px] pt-[24px] pb-[20px] translate-y-full transition-transform duration-300 flex flex-col gap-[20px]">
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
        <div id="calendar-grid" class="grid grid-cols-7 gap-[4px]"></div>

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

    window.openFilterSheet  = function () { openSheet('filter'); };
    window.closeFilterSheet = function () { closeSheet('filter'); };

    var currentDatePicker = null;
    var currentDate = new Date();
    var selectedDate = null;

    window.toggleDatePicker = function (type) {
      currentDatePicker = type;
      selectedDate = null;
      openSheet('date-picker');
      generateCalendar();
    };

    window.closeDatePicker = function () { closeSheet('date-picker'); };

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

    window.selectDate = function (day) {
      selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
      generateCalendar();
    };

    window.changeMonth = function (direction) {
      currentDate.setMonth(currentDate.getMonth() + direction);
      generateCalendar();
    };

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
