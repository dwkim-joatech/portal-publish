{{-- 간편결제(대면) --}}

{{-- GNB --}}
<div class="bg-white flex h-[60px] items-center gap-[10px] overflow-hidden px-[20px]">
  <div class="flex flex-1 gap-[10px] items-center min-w-0">
    <button class="relative shrink-0 size-[28px] flex items-center justify-center" onclick="history.back()">
      <img alt="뒤로가기" class="block size-full" src="{{ asset('images/keyboardArrowRight.svg') }}" style="transform: scaleX(-1)" />
    </button>
    <p class="font-semibold leading-normal text-[22px] text-black truncate" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">간편결제(대면)</p>
  </div>
  <button class="relative shrink-0 size-[24px]" onclick="openSideMenu()">
      <img alt="메뉴" class="block size-full" src="{{ asset('images/menu_sub.svg') }}" />
    </button>
</div>

{{-- 페이지 배경 --}}
<div class="flex flex-col gap-[8px] pb-[20px]">

  {{-- 초대코드 버튼 --}}
  <div class="flex justify-end px-[20px] pt-[12px]">
    <a href="/invite-code" class="h-[32px] px-[16px] rounded-full border border-[#ccc] bg-white text-[13px] text-black flex items-center" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">초대코드</a>
  </div>

  {{-- 가로줄 --}}
  <div class="px-[20px]">
    <div class="border-t border-[#eee]"></div>
  </div>

  {{-- 사업자 / 쇼핑몰 정보 --}}
  <div class="bg-white px-[20px] pt-[20px] pb-[24px] flex flex-col gap-[16px]">
    <h2 class="text-[16px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">사업자 / 쇼핑몰 정보</h2>

    {{-- 상호명 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">상호명</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="text" value="조아테크" class="w-full text-[14px] text-black outline-none bg-transparent" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" />
      </div>
    </div>

    {{-- 사업자번호 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">사업자번호</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="text" value="2068617457" class="w-full text-[14px] text-black outline-none bg-transparent" style="font-family: 'Inter', sans-serif;" />
      </div>
    </div>
  </div>

  {{-- 가로줄 --}}
  <div class="px-[20px]">
    <div class="border-t border-[#eee]"></div>
  </div>

  {{-- 대표자 정보 --}}
  <div class="bg-white px-[20px] pt-[20px] pb-[24px] flex flex-col gap-[16px]">
    <h2 class="text-[16px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">대표자 정보</h2>

    {{-- 대표자명 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">대표자명</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="text" placeholder="대표자명 입력" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" />
      </div>
    </div>

    {{-- 대표자 생년월일 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">대표자 생년월일</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="text" placeholder="대표자 생년월일 입력" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" />
      </div>
    </div>

    {{-- 대표자 휴대폰 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">대표자 휴대폰</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="tel" placeholder="대표자 휴대폰 입력" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', sans-serif;" />
      </div>
    </div>

    {{-- 대표 이메일 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">대표 이메일</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="email" placeholder="example@company.com" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', sans-serif;" />
      </div>
    </div>
  </div>

  {{-- 가로줄 --}}
  <div class="px-[20px]">
    <div class="border-t border-[#eee]"></div>
  </div>

  {{-- 사업장 정보 --}}
  <div class="bg-white px-[20px] pt-[20px] pb-[24px] flex flex-col gap-[16px]">
    <h2 class="text-[16px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">사업장 정보</h2>

    {{-- 사업장 주소 --}}
    <div class="flex flex-col gap-[8px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">사업장 주소</label>
      {{-- 우편번호 행 --}}
      <div class="flex gap-[8px]">
        <div class="flex-1 border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
          <input type="text" placeholder="우편번호" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', sans-serif;" />
        </div>
        <button class="shrink-0 h-[44px] px-[14px] border border-[#ddd] bg-white text-[13px] font-semibold text-black whitespace-nowrap" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">우편번호 찾기</button>
      </div>
      {{-- 기본주소 --}}
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-[#f5f5f5]">
        <input type="text" placeholder="기본주소" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" />
      </div>
      {{-- 상세주소 --}}
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="text" placeholder="상세주소" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" />
      </div>
    </div>

    {{-- 대표번호 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">대표번호</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="tel" placeholder="대표번호 입력" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', sans-serif;" />
      </div>
    </div>
  </div>

  {{-- 가로줄 --}}
  <div class="px-[20px]">
    <div class="border-t border-[#eee]"></div>
  </div>

  {{-- 담당자 정보 --}}
  <div class="bg-white px-[20px] pt-[20px] pb-[24px] flex flex-col gap-[16px]">
    <h2 class="text-[16px] font-bold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">담당자 정보</h2>

    {{-- 담당자 이름 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">담당자 이름</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="text" placeholder="담당자 이름 입력" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;" />
      </div>
    </div>

    {{-- 담당자 이메일 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">담당자 이메일</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="email" placeholder="example@company.com" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', sans-serif;" />
      </div>
    </div>

    {{-- 담당자 연락처 --}}
    <div class="flex flex-col gap-[6px]">
      <label class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">담당자 연락처</label>
      <div class="border border-[#ddd] h-[44px] flex items-center px-[12px] bg-white">
        <input type="tel" placeholder="담당자 연락처 입력" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#bbb]" style="font-family: 'Inter', sans-serif;" />
      </div>
    </div>
  </div>

  {{-- 신청하기 버튼 --}}
  <div class="px-[20px] pt-[4px]">
    <button class="w-full h-[50px] bg-[#2074e2] text-white text-[15px] font-semibold" style="font-family: 'Inter', 'Noto Sans KR', sans-serif;">신청하기</button>
  </div>

</div>

<script>
  function openSideMenu() {
    const sideMenu = document.getElementById('side-menu');
    const overlay  = document.getElementById('side-menu-overlay');
    const drawer   = document.getElementById('side-menu-drawer');
    
    if (sideMenu && overlay && drawer) {
      sideMenu.classList.remove('invisible');
      void sideMenu.offsetWidth;
      overlay.classList.remove('opacity-0');
      overlay.classList.add('opacity-100');
      drawer.classList.remove('translate-x-full');
      drawer.classList.add('translate-x-0');
      document.body.style.overflow = 'hidden';
    }
  }
</script>
