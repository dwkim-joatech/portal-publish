{{-- 간편결제(대면) --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full scale-x-[-1]" src="{{ asset('images/keyboardArrowRight.svg') }}" />
    </button>
    <p class="title-page truncate">간편결제(대면)</p>
  </div>
  <button class="relative shrink-0 size-[24px]" onclick="openSideMenu()">
      <img alt="메뉴" class="block size-full" src="{{ asset('images/menu_sub.svg') }}" />
    </button>
</div>

{{-- 페이지 배경 --}}
<div class="flex flex-col gap-[8px] pb-[20px]">

  {{-- 초대코드 버튼 --}}
  <div class="flex justify-end px-[20px] pt-[12px]">
    <a href="/invite-code" class="btn-pill">초대코드</a>
  </div>

  {{-- 가로줄 --}}
  <div class="px-[20px]">
    <div class="border-t border-gray-light"></div>
  </div>

  {{-- 사업자 / 쇼핑몰 정보 --}}
  <div class="section-container">
    <h2 class="title-section">사업자 / 쇼핑몰 정보</h2>

    {{-- 상호명 --}}
    <div class="form-field">
      <label class="form-label">상호명</label>
      <div class="form-input-wrapper">
        <input type="text" value="조아테크" class="form-input" />
      </div>
    </div>

    {{-- 사업자번호 --}}
    <div class="form-field">
      <label class="form-label">사업자번호</label>
      <div class="form-input-wrapper">
        <input type="text" value="2068617457" class="form-input" />
      </div>
    </div>
  </div>

  {{-- 가로줄 --}}
  <div class="px-[20px]">
    <div class="border-t border-gray-light"></div>
  </div>

  {{-- 대표자 정보 --}}
  <div class="section-container">
    <h2 class="title-section">대표자 정보</h2>

    {{-- 대표자명 --}}
    <div class="form-field">
      <label class="form-label">대표자명</label>
      <div class="form-input-wrapper">
        <input type="text" placeholder="대표자명 입력" class="form-input" />
      </div>
    </div>

    {{-- 대표자 생년월일 --}}
    <div class="form-field">
      <label class="form-label">대표자 생년월일</label>
      <div class="form-input-wrapper">
        <input type="text" placeholder="대표자 생년월일 입력" class="form-input" />
      </div>
    </div>

    {{-- 대표자 휴대폰 --}}
    <div class="form-field">
      <label class="form-label">대표자 휴대폰</label>
      <div class="form-input-wrapper">
        <input type="tel" placeholder="대표자 휴대폰 입력" class="form-input" />
      </div>
    </div>

    {{-- 대표 이메일 --}}
    <div class="form-field">
      <label class="form-label">대표 이메일</label>
      <div class="form-input-wrapper">
        <input type="email" placeholder="example@company.com" class="form-input" />
      </div>
    </div>
  </div>

  {{-- 가로줄 --}}
  <div class="px-[20px]">
    <div class="border-t border-gray-light"></div>
  </div>

  {{-- 사업장 정보 --}}
  <div class="section-container">
    <h2 class="title-section">사업장 정보</h2>

    {{-- 사업장 주소 --}}
    <div class="form-field">
      <label class="form-label">사업장 주소</label>
      {{-- 우편번호 행 --}}
      <div class="flex gap-[8px]">
        <div class="form-input-wrapper flex-1 bg-gray-bg">
          <input type="text" placeholder="우편번호" class="form-input" />
        </div>
        <button class="shrink-0 h-[44px] px-[14px] border border-gray-border bg-white text-[13px] font-semibold text-black whitespace-nowrap">우편번호 찾기</button>
      </div>
      {{-- 기본주소 --}}
      <div class="form-input-wrapper bg-gray-bg">
        <input type="text" placeholder="기본주소" class="form-input" />
      </div>
      {{-- 상세주소 --}}
      <div class="form-input-wrapper">
        <input type="text" placeholder="상세주소" class="form-input" />
      </div>
    </div>

    {{-- 대표번호 --}}
    <div class="form-field">
      <label class="form-label">대표번호</label>
      <div class="form-input-wrapper">
        <input type="tel" placeholder="대표번호 입력" class="form-input" />
      </div>
    </div>
  </div>

  {{-- 가로줄 --}}
  <div class="px-[20px]">
    <div class="border-t border-gray-light"></div>
  </div>

  {{-- 담당자 정보 --}}
  <div class="section-container">
    <h2 class="title-section">담당자 정보</h2>

    {{-- 담당자 이름 --}}
    <div class="form-field">
      <label class="form-label">담당자 이름</label>
      <div class="form-input-wrapper">
        <input type="text" placeholder="담당자 이름 입력" class="form-input" />
      </div>
    </div>

    {{-- 담당자 이메일 --}}
    <div class="form-field">
      <label class="form-label">담당자 이메일</label>
      <div class="form-input-wrapper">
        <input type="email" placeholder="example@company.com" class="form-input" />
      </div>
    </div>

    {{-- 담당자 연락처 --}}
    <div class="form-field">
      <label class="form-label">담당자 연락처</label>
      <div class="form-input-wrapper">
        <input type="tel" placeholder="담당자 연락처 입력" class="form-input" />
      </div>
    </div>
  </div>

  {{-- 신청하기 버튼 --}}
  <div class="px-[20px] pt-[4px]">
    <button class="w-full btn-primary">신청하기</button>
  </div>

</div>

