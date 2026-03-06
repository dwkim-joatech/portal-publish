{{-- 회원정보수정 --}}

{{-- GNB --}}
<x-gnb-sub title="회원정보수정" />

{{-- 폼 영역 --}}
<div class="px-[20px] pt-[20px] pb-[24px] flex flex-col gap-[16px]">

  {{-- 아이디(휴대폰번호) --}}
  <div class="form-field">
    <x-form-label-required label="아이디(휴대폰번호)" />
    <div class="form-input-wrapper bg-gray-bg">
      <input type="text" value="01023456789" class="form-input bg-gray-bg" readonly />
    </div>
  </div>

  {{-- 비밀번호 --}}
  <div class="form-field">
    <x-form-label-required label="비밀번호" />
    <div class="form-input-wrapper">
      <input type="password" placeholder="4자 이상 20자 이하로 입력" class="form-input" />
    </div>
  </div>

  {{-- 비밀번호 확인 --}}
  <div class="form-field">
    <x-form-label-required label="비밀번호 확인" />
    <div class="form-input-wrapper">
      <input type="password" placeholder="4자 이상 20자 이하로 입력" class="form-input" />
    </div>
  </div>

  {{-- 이름 --}}
  <div class="form-field">
    <x-form-label-required label="이름" />
    <div class="form-input-wrapper">
      <input type="text" value="김조아" class="form-input" />
    </div>
  </div>

  {{-- 휴대폰번호 --}}
  <div class="form-field">
    <x-form-label-required label="휴대폰번호" />
    <div class="form-input-wrapper">
      <input type="tel" value="01022223333" class="form-input" />
    </div>
  </div>

  {{-- 이메일 --}}
  <div class="form-field">
    <label class="form-label">이메일</label>
    <div class="form-input-wrapper">
      <input type="email" value="aaaaaa@bbbb.com" class="form-input" />
    </div>
  </div>

  {{-- 회사명 --}}
  <div class="form-field">
    <x-form-label-required label="회사명" />
    <div class="form-input-wrapper">
      <input type="text" value="조아" class="form-input" />
    </div>
  </div>

  {{-- 사업자번호 --}}
  <div class="form-field">
    <x-form-label-required label="사업자번호" />
    <div class="form-input-wrapper">
      <input type="text" value="2124566992" class="form-input" />
    </div>
  </div>

  {{-- 회사 전화번호 --}}
  <div class="form-field">
    <label class="form-label">회사 전화번호</label>
    <div class="form-input-wrapper">
      <input type="tel" value="022345555" class="form-input" />
    </div>
  </div>

  {{-- 회사 주소 --}}
  <div class="form-field">
    <x-form-label-required label="회사 주소" />
    <div class="flex gap-[8px]">
      <div class="form-input-wrapper flex-1 bg-gray-bg">
        <input type="text" placeholder="우편번호" class="form-input bg-gray-bg" readonly />
      </div>
      <button class="btn-outline px-[14px] text-[13px] font-bold flex-shrink-0">우편번호 찾기</button>
    </div>
    <div class="form-input-wrapper bg-gray-bg">
      <input type="text" placeholder="기본주소" class="form-input bg-gray-bg" readonly />
    </div>
    <div class="form-input-wrapper">
      <input type="text" placeholder="상세주소" class="form-input" />
    </div>
  </div>

  {{-- 마케팅수신 동의 --}}
  <label class="flex items-center gap-[10px] cursor-pointer">
    <input type="checkbox" class="w-[18px] h-[18px] accent-primary" checked />
    <span class="text-[14px] text-black">마케팅수신에 동의합니다. <span class="text-gray-text">(선택)</span></span>
  </label>

  {{-- 제출 버튼 --}}
  <button class="w-full btn-primary mt-[8px]">회원정보수정</button>

</div>
