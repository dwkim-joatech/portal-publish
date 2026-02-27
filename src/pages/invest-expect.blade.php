{{-- 투자예상분석 - 등록 --}}

{{-- GNB --}}
<x-gnb-sub title="투자예상분석" />

{{-- 탭 --}}
<div class="bg-white border-b border-gray-border flex px-[20px]">
  <span class="invest-tab invest-tab-active mr-[20px]">등록</span>
  <a href="{{ asset('invest-result') }}" class="invest-tab mr-[20px]">결과</a>
  <a href="{{ asset('invest-list') }}" class="invest-tab">결과목록</a>
</div>

{{-- 등록 폼 --}}
<div class="flex flex-col gap-[32px] px-[20px] py-[24px]">

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

{{-- 결과보기 버튼 --}}
<div class="px-[20px] pb-[20px] pt-[4px]">
  <a href="{{ asset('invest-result') }}" class="btn-primary w-full flex items-center justify-center">결과보기</a>
</div>

<script>
  (function () {
    window.calcInvest = function () {
      var a = parseFloat(document.getElementById('inp-install').value) || 0;
      var b = parseFloat(document.getElementById('inp-construct').value) || 0;
      var c = parseFloat(document.getElementById('inp-other').value) || 0;
      document.getElementById('out-total-invest').textContent = (a + b + c).toLocaleString('ko-KR');
      calcResults();
    };

    window.calcResults = function () {
      var invest = (parseFloat(document.getElementById('inp-install').value) || 0)
                 + (parseFloat(document.getElementById('inp-construct').value) || 0)
                 + (parseFloat(document.getElementById('inp-other').value) || 0);
      var rate     = parseFloat(document.getElementById('inp-rate').value) || 0;
      var monthly  = parseFloat(document.getElementById('inp-monthly-kg').value) || 0;
      var buyPrice = parseFloat(document.getElementById('inp-buy-price').value) || 0;
      var margin   = parseFloat(document.getElementById('inp-margin').value) || 0;

      var sellPrice  = buyPrice + margin;
      var buyFlow    = monthly * buyPrice;
      var sellFlow   = monthly * sellPrice;
      var marginFlow = sellFlow - buyFlow;
      var interest   = invest * (rate / 100 / 12);

      document.getElementById('out-sell-price').textContent  = sellPrice.toLocaleString('ko-KR');
      document.getElementById('out-buy-flow').textContent    = Math.round(buyFlow).toLocaleString('ko-KR');
      document.getElementById('out-sell-flow').textContent   = Math.round(sellFlow).toLocaleString('ko-KR');
      document.getElementById('out-margin-flow').textContent = Math.round(marginFlow).toLocaleString('ko-KR');
      document.getElementById('out-interest').textContent    = Math.round(interest).toLocaleString('ko-KR');
    };
  })();
</script>
