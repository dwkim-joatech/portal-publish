{{-- 투자예상분석 --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full" src="{{ asset('images/keyboardArrowRight.svg') }}" style="transform: scaleX(-1)" />
    </button>
    <p class="font-semibold leading-normal text-[22px] text-black truncate" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">투자예상분석</p>
  </div>
  <button class="relative shrink-0 size-[24px]">
    <img alt="메뉴" class="block size-full" src="{{ asset('images/menu_sub.svg') }}" />
  </button>
</div>

{{-- 탭 --}}
<div class="bg-white border-b border-[#ddd] flex px-[20px]">
  <button class="h-[44px] px-[4px] mr-[20px] text-[14px] font-semibold text-black border-b-[2px] border-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" data-invest-tab data-target="tab-register">등록</button>
  <button class="h-[44px] px-[4px] mr-[20px] text-[14px] text-[#999]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" data-invest-tab data-target="tab-result">결과</button>
  <button class="h-[44px] px-[4px] text-[14px] text-[#999]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" data-invest-tab data-target="tab-list">결과목록</button>
</div>

{{-- 탭 콘텐츠: 등록 --}}
<div id="tab-register" class="flex flex-col gap-[32px] px-[20px] py-[24px]">

  {{-- 기본정보 입력 --}}
  <div class="flex flex-col gap-[16px]">
    <h2 class="text-[15px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">기본정보 입력</h2>

    {{-- 수요처 --}}
    <div class="flex flex-col gap-[6px]">
      <div class="flex items-center gap-[4px]">
        <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">수요처</label>
        <span class="inline-block w-[5px] h-[5px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
      </div>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="text" placeholder="수요처 입력" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" id="inp-demand" />
      </div>
    </div>

    {{-- 계약기간 --}}
    <div class="flex flex-col gap-[6px]">
      <div class="flex items-center gap-[4px]">
        <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">계약기간</label>
        <span class="inline-block w-[5px] h-[5px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
      </div>
      <div class="relative border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <select class="w-full appearance-none bg-transparent text-[14px] text-[#bbb] outline-none" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" id="inp-period">
          <option value="" disabled selected>계약기간 선택</option>
          <option value="12">1년 (12개월)</option>
          <option value="24">2년 (24개월)</option>
          <option value="36">3년 (36개월)</option>
          <option value="48">4년 (48개월)</option>
          <option value="60">5년 (60개월)</option>
        </select>
        <div class="pointer-events-none absolute right-[12px] top-1/2 -translate-y-1/2">
          <svg width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1L6 6L11 1" stroke="#666" stroke-width="1.5" stroke-linecap="round"/></svg>
        </div>
      </div>
    </div>
  </div>

  {{-- 시설투자비 입력 --}}
  <div class="flex flex-col gap-[16px]">
    <h2 class="text-[15px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">시설투자비 입력</h2>

    {{-- 제설비 --}}
    <div class="flex flex-col gap-[6px]">
      <div class="flex items-center gap-[4px]">
        <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">제설비</label>
        <span class="inline-block w-[5px] h-[5px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
      </div>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="number" value="0" class="w-full text-[14px] text-black outline-none bg-transparent text-right" style="font-family: 'Inter', sans-serif;" id="inp-install" oninput="calcInvest()" />
      </div>
    </div>

    {{-- 시공비 --}}
    <div class="flex flex-col gap-[6px]">
      <div class="flex items-center gap-[4px]">
        <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">시공비</label>
        <span class="inline-block w-[5px] h-[5px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
      </div>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="number" value="0" class="w-full text-[14px] text-black outline-none bg-transparent text-right" style="font-family: 'Inter', sans-serif;" id="inp-construct" oninput="calcInvest()" />
      </div>
    </div>

    {{-- 기타비용 --}}
    <div class="flex flex-col gap-[6px]">
      <div class="flex items-center gap-[4px]">
        <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">기타비용</label>
        <span class="inline-block w-[5px] h-[5px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
      </div>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="number" value="0" class="w-full text-[14px] text-black outline-none bg-transparent text-right" style="font-family: 'Inter', sans-serif;" id="inp-other" oninput="calcInvest()" />
      </div>
    </div>

    {{-- 투자계 (자동계산) --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">투자계 <span class="text-[#2074e2] font-normal">(제설비+시공비+기타비용)</span></label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <span class="w-full text-[14px] text-black text-right" style="font-family: 'Inter', sans-serif;" id="out-total-invest">0</span>
      </div>
    </div>
  </div>

  {{-- 추정값 입력 --}}
  <div class="flex flex-col gap-[16px]">
    <h2 class="text-[15px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">추정값 입력</h2>

    {{-- 예상 차입이자율 연리 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">예상 차입이자율 연리(%)</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="number" value="8.00" step="0.01" class="w-full text-[14px] text-black outline-none bg-transparent text-right" style="font-family: 'Inter', sans-serif;" id="inp-rate" oninput="calcResults()" />
      </div>
    </div>

    {{-- 예상 월사용량 --}}
    <div class="flex flex-col gap-[6px]">
      <div class="flex items-center gap-[4px]">
        <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">예상 월사용량(KG)</label>
        <span class="inline-block w-[5px] h-[5px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
      </div>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="number" value="0" class="w-full text-[14px] text-black outline-none bg-transparent text-right" style="font-family: 'Inter', sans-serif;" id="inp-monthly-kg" oninput="calcResults()" />
      </div>
    </div>

    {{-- 추정단가_매입단가 --}}
    <div class="flex flex-col gap-[6px]">
      <div class="flex items-center gap-[4px]">
        <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">추정단가_매입단가(원/KG)</label>
        <span class="inline-block w-[5px] h-[5px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
      </div>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="number" value="0" class="w-full text-[14px] text-black outline-none bg-transparent text-right" style="font-family: 'Inter', sans-serif;" id="inp-buy-price" oninput="calcResults()" />
      </div>
    </div>

    {{-- 추정단가_마진단가 --}}
    <div class="flex flex-col gap-[6px]">
      <div class="flex items-center gap-[4px]">
        <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">추정단가_마진단가(원/KG)</label>
        <span class="inline-block w-[5px] h-[5px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
      </div>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="number" value="0" class="w-full text-[14px] text-black outline-none bg-transparent text-right" style="font-family: 'Inter', sans-serif;" id="inp-margin" oninput="calcResults()" />
      </div>
    </div>
  </div>

  {{-- 추정값 결과 --}}
  <div class="flex flex-col gap-[16px]">
    <h2 class="text-[15px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">추정값 결과</h2>

    {{-- 추정단가_판매단가 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">추정단가_판매단가(원/KG) <span class="text-[#2074e2] font-normal">(매입단가+마진단가)</span></label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <span class="w-full text-[14px] text-black text-right" style="font-family: 'Inter', sans-serif;" id="out-sell-price">0</span>
      </div>
    </div>

    {{-- 추정월현금흐름_매입계 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">추정월현금흐름_매입계 <span class="text-[#2074e2] font-normal">(월사용량×매입단가)</span></label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <span class="w-full text-[14px] text-black text-right" style="font-family: 'Inter', sans-serif;" id="out-buy-flow">0</span>
      </div>
    </div>

    {{-- 추정월현금흐름_매출계 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">추정월현금흐름_매출계 <span class="text-[#2074e2] font-normal">(월사용량×판매단가)</span></label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <span class="w-full text-[14px] text-black text-right" style="font-family: 'Inter', sans-serif;" id="out-sell-flow">0</span>
      </div>
    </div>

    {{-- 추정월현금흐름_단순마진계 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">추정월현금흐름_단순마진계 <span class="text-[#2074e2] font-normal">(매출계-매입계)</span></label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <span class="w-full text-[14px] text-black text-right" style="font-family: 'Inter', sans-serif;" id="out-margin-flow">0</span>
      </div>
    </div>

    {{-- 추정월현금흐름_납부이자 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">추정월현금흐름_납부이자 <span class="text-[#2074e2] font-normal">(투자비×차입이자율(월))</span></label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <span class="w-full text-[14px] text-black text-right" style="font-family: 'Inter', sans-serif;" id="out-interest">0</span>
      </div>
    </div>
  </div>

</div>

{{-- 탭 콘텐츠: 결과 --}}
<div id="tab-result" class="hidden">

  {{-- 설비투자수익 예상결과 --}}
  <div class="flex flex-col gap-[16px] px-[20px] pt-[24px] pb-[28px]">
    <h2 class="text-[16px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">설비투자수익 예상결과</h2>

    {{-- 사업투자수익률 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">사업투자수익률(%, 년)</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <span class="w-full text-[14px] text-black text-right" style="font-family: 'Inter', sans-serif;" id="res-roi">1,000</span>
      </div>
    </div>

    {{-- 가스판매 순마진총액(총계약기간) --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">가스판매 순마진총액(총계약기간)</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <span class="w-full text-[14px] text-black text-right" style="font-family: 'Inter', sans-serif;" id="res-total-margin">228</span>
      </div>
    </div>

    {{-- 가스판매 순마진총액(년) --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">가스판매 순마진총액(년)</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <span class="w-full text-[14px] text-black text-right" style="font-family: 'Inter', sans-serif;" id="res-yearly-margin">114</span>
      </div>
    </div>

    {{-- 가스판매 순마진총액(월) --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">가스판매 순마진총액(월)</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <span class="w-full text-[14px] text-black text-right" style="font-family: 'Inter', sans-serif;" id="res-monthly-margin">10</span>
      </div>
    </div>
  </div>

  {{-- 세부내역 --}}
  <div class="flex flex-col gap-[12px] px-[20px] pb-[24px]">
    <h2 class="text-[16px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">세부내역</h2>

    {{-- 가로 스크롤 테이블 --}}
    <div class="overflow-x-auto hide-scrollbar border border-[#eee]">
      <table class="w-full min-w-[560px] text-[13px]" style="font-family: 'Inter', sans-serif; border-collapse: collapse;">
        <thead>
          <tr class="bg-[#f5f5f5] border-b border-[#eee]">
            <th class="text-left px-[12px] py-[10px] font-semibold text-black whitespace-nowrap" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">경과월</th>
            <th class="text-right px-[12px] py-[10px] font-semibold text-black whitespace-nowrap" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">월예상매출</th>
            <th class="text-right px-[12px] py-[10px] font-semibold text-black whitespace-nowrap" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">가스매입총액</th>
            <th class="text-right px-[12px] py-[10px] font-semibold text-black whitespace-nowrap" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">차입이자</th>
            <th class="text-right px-[12px] py-[10px] font-semibold text-black whitespace-nowrap" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">NCF</th>
            <th class="text-right px-[12px] py-[10px] font-semibold text-black whitespace-nowrap" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">누적NCF</th>
          </tr>
        </thead>
        <tbody id="detail-tbody">
          {{-- M0 초기투자액 행 --}}
          <tr class="border-b border-[#eee]">
            <td class="px-[12px] py-[10px] text-black">M0</td>
            <td class="px-[12px] py-[10px] text-center text-black" colspan="5" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">초기투자액</td>
          </tr>
          {{-- M1~M12 샘플 행 --}}
          <tr class="border-b border-[#eee]"><td class="px-[12px] py-[10px] text-black">M1</td><td class="px-[12px] py-[10px] text-right text-black">2</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">0</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">1</td></tr>
          <tr class="border-b border-[#eee]"><td class="px-[12px] py-[10px] text-black">M2</td><td class="px-[12px] py-[10px] text-right text-black">2</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">0</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">2</td></tr>
          <tr class="border-b border-[#eee]"><td class="px-[12px] py-[10px] text-black">M3</td><td class="px-[12px] py-[10px] text-right text-black">2</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">0</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">3</td></tr>
          <tr class="border-b border-[#eee]"><td class="px-[12px] py-[10px] text-black">M4</td><td class="px-[12px] py-[10px] text-right text-black">2</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">0</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">4</td></tr>
          <tr class="border-b border-[#eee]"><td class="px-[12px] py-[10px] text-black">M5</td><td class="px-[12px] py-[10px] text-right text-black">2</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">0</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">5</td></tr>
          <tr class="border-b border-[#eee]"><td class="px-[12px] py-[10px] text-black">M6</td><td class="px-[12px] py-[10px] text-right text-black">2</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">0</td><td class="px-[12px] py-[10px] text-right text-black">1</td><td class="px-[12px] py-[10px] text-right text-black">6</td></tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

{{-- 탭 콘텐츠: 결과목록 --}}
<div id="tab-list" class="hidden px-[20px] pt-[16px] pb-[24px]">

  {{-- 상단 버튼 행 --}}
  <div class="flex justify-end gap-[8px] mb-[16px]">
    <button class="h-[36px] px-[16px] rounded-full border border-[#ccc] bg-white text-[13px] text-black flex items-center gap-[6px]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" onclick="openFilterSheet()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
      필터
    </button>
    <button class="h-[36px] px-[16px] rounded-full border border-[#ccc] bg-white text-[13px] text-black whitespace-nowrap" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">설비투자 예상분석</button>
  </div>

  {{-- 목록 테이블 --}}
  <div class="border border-[#ddd]">
    {{-- 헤더 --}}
    <div class="grid border-b border-[#ddd] bg-white" style="grid-template-columns: 1fr 1fr 60px;">
      <div class="px-[16px] py-[14px] text-[13px] font-bold text-black text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">수요처</div>
      <div class="px-[16px] py-[14px] text-[13px] font-bold text-black text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">계약기간</div>
      <div class="px-[16px] py-[14px] text-[13px] font-bold text-black text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">상세정보</div>
    </div>
    {{-- 행 1 --}}
    <div class="grid border-b border-[#ddd]" style="grid-template-columns: 1fr 1fr 60px;">
      <div class="px-[16px] py-[16px] text-[14px] text-black text-center" style="font-family: 'Inter', sans-serif;">1</div>
      <div class="px-[16px] py-[16px] text-[14px] text-black text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">24개월</div>
      <div class="px-[16px] py-[16px] flex items-center justify-center">
        <button class="text-[#555]">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
    {{-- 행 2 --}}
    <div class="grid border-b border-[#ddd]" style="grid-template-columns: 1fr 1fr 60px;">
      <div class="px-[16px] py-[16px] text-[14px] text-black text-center" style="font-family: 'Inter', sans-serif;">1</div>
      <div class="px-[16px] py-[16px] text-[14px] text-black text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">24개월</div>
      <div class="px-[16px] py-[16px] flex items-center justify-center">
        <button class="text-[#555]">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
    {{-- 행 3 --}}
    <div class="grid" style="grid-template-columns: 1fr 1fr 60px;">
      <div class="px-[16px] py-[16px] text-[14px] text-black text-center" style="font-family: 'Inter', sans-serif;">1</div>
      <div class="px-[16px] py-[16px] text-[14px] text-black text-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">24개월</div>
      <div class="px-[16px] py-[16px] flex items-center justify-center">
        <button class="text-[#555]">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </div>
    </div>
  </div>

</div>

{{-- 결과보기 / 결과 저장하기 버튼 --}}
<div class="px-[20px] pb-[20px] pt-[4px]" id="btn-wrap-result">
  <button class="w-full h-[50px] bg-[#2074e2] text-white text-[15px] font-semibold" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" id="btn-view-result">결과보기</button>
</div>
<div class="px-[20px] pb-[20px] pt-[4px] hidden" id="btn-wrap-save">
  <button class="w-full h-[50px] bg-[#2074e2] text-white text-[15px] font-semibold" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">결과 저장하기</button>
</div>

{{-- 필터 바텀시트 --}}
<div id="filter-sheet" class="invisible fixed inset-0 z-50 flex flex-col justify-end" style="max-width:360px; margin:0 auto;">
  {{-- 딤드 오버레이 --}}
  <div id="filter-overlay" class="absolute inset-0 bg-black/60 opacity-0 transition-opacity duration-300" onclick="closeFilterSheet()"></div>
  {{-- 시트 --}}
  <div id="filter-drawer" class="relative bg-white rounded-t-[20px] px-[20px] pt-[24px] pb-[20px] mb-[60px] translate-y-full transition-transform duration-300 flex flex-col gap-[20px]">

    <h2 class="text-[22px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">필터</h2>

    {{-- 등록일 --}}
    <div class="flex flex-col gap-[8px]">
      <div class="flex items-center gap-[4px]">
        <label class="text-[14px] font-bold text-black" style="font-family: 'Inter', sans-serif;">등록일</label>
        <span class="inline-block w-[6px] h-[6px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
      </div>
      <div class="flex items-center gap-[8px]">
        <div class="flex-1 border border-[#ddd] h-[44px] flex items-center px-[12px] gap-[8px] bg-white cursor-pointer" onclick="toggleDatePicker('start-date')">
          <input type="text" placeholder="년-월-일" class="w-full text-[13px] text-[#bbb] outline-none bg-transparent cursor-pointer" style="font-family: 'Inter', sans-serif;" readonly id="start-date-input" />
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        </div>
        <span class="text-[14px] text-black shrink-0">~</span>
        <div class="flex-1 border border-[#ddd] h-[44px] flex items-center px-[12px] gap-[8px] bg-white cursor-pointer" onclick="toggleDatePicker('end-date')">
          <input type="text" placeholder="년-월-일" class="w-full text-[13px] text-[#bbb] outline-none bg-transparent cursor-pointer" style="font-family: 'Inter', sans-serif;" readonly id="end-date-input" />
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        </div>
      </div>
    </div>

    {{-- 수요처 --}}
    <div class="flex flex-col gap-[8px]">
      <label class="text-[14px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">수요처</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="text" placeholder="수요처 입력" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" />
      </div>
    </div>

    {{-- 날짜 선택기 바텀시트 --}}
    <div id="date-picker-sheet" class="invisible fixed inset-0 z-50 flex flex-col justify-end" style="max-width:360px; margin:0 auto;">
      {{-- 딤드 오버레이 --}}
      <div id="date-picker-overlay" class="absolute inset-0 bg-black/60 opacity-0 transition-opacity duration-300" onclick="closeDatePicker()"></div>
      {{-- 시트 --}}
      <div id="date-picker-drawer" class="relative bg-white rounded-t-[20px] px-[20px] pt-[24px] pb-[20px] mb-[60px] translate-y-full transition-transform duration-300 flex flex-col gap-[20px]">
        <h2 class="text-[18px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">날짜 선택</h2>
        
        {{-- 월/년 선택 --}}
        <div class="flex items-center justify-between mb-[16px]">
          <button onclick="changeMonth(-1)" class="p-[8px]">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
          </button>
          <div class="text-[16px] font-semibold text-black" id="current-month" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;"></div>
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
        <button onclick="confirmDate()" class="w-full h-[50px] bg-[#2074e2] text-white text-[15px] font-semibold" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">확인</button>
      </div>
    </div>

    {{-- 계약기간 --}}
    <div class="flex flex-col gap-[8px]">
      <label class="text-[14px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">계약기간</label>
      <div class="relative border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <select class="w-full appearance-none bg-transparent text-[14px] text-black outline-none" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">
          <option value="">전체</option>
          <option value="12">1년 (12개월)</option>
          <option value="24">2년 (24개월)</option>
          <option value="36">3년 (36개월)</option>
          <option value="48">4년 (48개월)</option>
          <option value="60">5년 (60개월)</option>
        </select>
        <div class="pointer-events-none absolute right-[12px] top-1/2 -translate-y-1/2">
          <svg width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1L6 6L11 1" stroke="#666" stroke-width="1.5" stroke-linecap="round"/></svg>
        </div>
      </div>
    </div>

    {{-- 초기화 / 검색 버튼 --}}
    <div class="flex gap-[8px] pt-[4px]">
      <button class="flex-1 h-[50px] bg-[#1a2e5a] text-white text-[15px] font-semibold" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" onclick="closeFilterSheet()">초기화</button>
      <button class="flex-1 h-[50px] bg-[#2074e2] text-white text-[15px] font-semibold" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" onclick="closeFilterSheet()">검색</button>
    </div>
  </div>
</div>

<script>
  (function () {
    // 탭 전환
    var tabs = Array.from(document.querySelectorAll('[data-invest-tab]'));
    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        tabs.forEach(function (t) {
          t.classList.remove('font-semibold', 'text-black', 'border-b-[2px]', 'border-black');
          t.classList.add('text-[#999]');
        });
        tab.classList.remove('text-[#999]');
        tab.classList.add('font-semibold', 'text-black', 'border-b-[2px]', 'border-black');

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

    // 추정값 결과 계산
    document.getElementById('btn-view-result').addEventListener('click', function () {
      document.querySelector('[data-target="tab-result"]').click();
    });

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
    window.openFilterSheet = function () {
      var sheet   = document.getElementById('filter-sheet');
      var overlay = document.getElementById('filter-overlay');
      var drawer  = document.getElementById('filter-drawer');
      sheet.classList.remove('invisible');
      void sheet.offsetWidth;
      overlay.classList.remove('opacity-0');
      overlay.classList.add('opacity-100');
      drawer.classList.remove('translate-y-full');
      drawer.classList.add('translate-y-0');
      document.body.style.overflow = 'hidden';
    };

    window.closeFilterSheet = function () {
      var sheet   = document.getElementById('filter-sheet');
      var overlay = document.getElementById('filter-overlay');
      var drawer  = document.getElementById('filter-drawer');
      overlay.classList.remove('opacity-100');
      overlay.classList.add('opacity-0');
      drawer.classList.remove('translate-y-0');
      drawer.classList.add('translate-y-full');
      setTimeout(function () { sheet.classList.add('invisible'); }, 300);
      document.body.style.overflow = '';
    };

    // 날짜 선택기 관련 변수
    var currentDatePicker = null;
    var currentDate = new Date();
    var selectedDate = null;

    // 날짜 선택기 열기
    window.toggleDatePicker = function (type) {
      currentDatePicker = type;
      selectedDate = null;
      
      var sheet = document.getElementById('date-picker-sheet');
      var overlay = document.getElementById('date-picker-overlay');
      var drawer = document.getElementById('date-picker-drawer');
      
      sheet.classList.remove('invisible');
      setTimeout(function () {
        overlay.classList.remove('opacity-0');
        drawer.classList.remove('translate-y-full');
        drawer.classList.add('translate-y-0');
      }, 10);
      
      document.body.style.overflow = 'hidden';
      generateCalendar();
    };

    // 날짜 선택기 닫기
    window.closeDatePicker = function () {
      var sheet = document.getElementById('date-picker-sheet');
      var overlay = document.getElementById('date-picker-overlay');
      var drawer = document.getElementById('date-picker-drawer');
      
      overlay.classList.add('opacity-0');
      drawer.classList.remove('translate-y-0');
      drawer.classList.add('translate-y-full');
      setTimeout(function () { sheet.classList.add('invisible'); }, 300);
      document.body.style.overflow = '';
    };

    // 달력 생성
    window.generateCalendar = function () {
      var year = currentDate.getFullYear();
      var month = currentDate.getMonth();
      
      // 현재 월 표시
      document.getElementById('current-month').textContent = year + '년 ' + (month + 1) + '월';
      
      // 첫째 날과 마지막 날 계산
      var firstDay = new Date(year, month, 1);
      var lastDay = new Date(year, month + 1, 0);
      var prevLastDay = new Date(year, month, 0);
      
      var firstDayIndex = firstDay.getDay();
      var lastDayDate = lastDay.getDate();
      var prevLastDayDate = prevLastDay.getDate();
      
      var dates = '';
      
      // 이전 달 날짜
      for (var x = firstDayIndex; x > 0; x--) {
        dates += '<div class="text-center py-[8px] text-[13px] text-[#ccc]">' + (prevLastDayDate - x + 1) + '</div>';
      }
      
      // 현재 달 날짜
      for (var i = 1; i <= lastDayDate; i++) {
        var isToday = new Date().getDate() === i && new Date().getMonth() === month && new Date().getFullYear() === year;
        var isSelected = selectedDate && selectedDate.getDate() === i && selectedDate.getMonth() === month && selectedDate.getFullYear() === year;
        
        var classes = 'text-center py-[8px] text-[13px] cursor-pointer rounded-[8px] ';
        if (isToday) classes += 'bg-[#2074e2] text-white ';
        else if (isSelected) classes += 'bg-[#e3f2fd] text-[#2074e2] ';
        else classes += 'text-black hover:bg-[#f5f5f5] ';
        
        dates += '<div class="' + classes + '" onclick="selectDate(' + i + ')">' + i + '</div>';
      }
      
      // 다음 달 날짜
      var nextDays = 42 - (firstDayIndex + lastDayDate);
      for (var j = 1; j <= nextDays; j++) {
        dates += '<div class="text-center py-[8px] text-[13px] text-[#ccc]">' + j + '</div>';
      }
      
      document.getElementById('calendar-grid').innerHTML = dates;
    };

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
