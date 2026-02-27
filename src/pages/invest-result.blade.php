{{-- 투자예상분석 - 결과 --}}

{{-- GNB --}}
<x-gnb-sub title="투자예상분석" />

{{-- 탭 --}}
<div class="bg-white border-b border-gray-border flex px-[20px]">
  <a href="{{ asset('invest-expect') }}" class="invest-tab mr-[20px]">등록</a>
  <span class="invest-tab invest-tab-active mr-[20px]">결과</span>
  <a href="{{ asset('invest-list') }}" class="invest-tab">결과목록</a>
</div>

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
      <tbody>
        <tr class="table-row">
          <td class="table-td">M0</td>
          <td class="table-td text-center" colspan="5">초기투자액</td>
        </tr>
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

{{-- 결과 저장하기 버튼 --}}
<div class="px-[20px] pb-[20px] pt-[4px]">
  <button class="btn-primary w-full">결과 저장하기</button>
</div>
