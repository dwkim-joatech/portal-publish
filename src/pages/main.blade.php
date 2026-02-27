{{-- 홈 메인 --}}

{{-- 상단 배너 섹션 (GNB) --}}
<div class="relative w-full h-[380px] overflow-hidden">
  {{-- 배경 이미지 --}}
  <div class="absolute inset-0 w-full h-[400px] top-0 z-0">
    <img src="{{ asset('images/flame.jpg') }}" alt="" class="w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>
  </div>

  {{-- 상태바 --}}
  <x-status-bar class="absolute top-0 left-0 right-0 z-30" />

  {{-- GNB --}}
  <x-gnb-main class="absolute top-[40px] left-0 right-0 z-40" />

  {{-- 텍스트 --}}
  <div class="absolute left-[20px] top-[164px] z-10 w-[260px]">
    <div class="bg-primary h-[2px] w-[94px] mb-[10px]"></div>
    <div class="text-white">
      <p class="text-[26px] leading-[32px]"><span class="font-semibold">조아테크</span><span class="font-light">는</span></p>
      <p class="text-[26px] font-light leading-[32px]">가스산업계의 변화를</p>
      <p class="text-[26px] font-light leading-[32px]">주도합니다.</p>
    </div>
  </div>

  {{-- 앱 메뉴 (이미지 위에 겹침) --}}
  <div class="absolute bottom-0 left-0 right-0 z-20">
    <x-menu-app class="w-full" />
  </div>
</div>

{{-- 조아테크 서비스 섹션 --}}
<div class="w-full bg-white">
  <div class="flex items-center justify-between pt-[40px] pb-[10px] px-[20px]">
    <h2 class="title-lg">조아테크 서비스</h2>
    <a href="{{ asset('junggo-list') }}" class="flex items-center">
      <span class="text-secondary">더보기</span>
      <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="w-[16px] h-[16px]" />
    </a>
  </div>

  <x-menu-tab />

  {{-- 중고장터 리스트 --}}
  <div class="px-[20px]">

    {{-- 판매글 + 거래중 --}}
    <a href="{{ asset('junggo-detail') }}" class="flex gap-[10px] py-[20px] border-b border-gray-light">
      <div class="relative w-[80px] h-[80px] bg-gray-light flex-shrink-0 overflow-hidden">
        <img src="{{ asset('images/image32.png') }}" alt="" class="absolute w-full h-full object-cover" />
      </div>
      <div class="flex-1 flex flex-col gap-[6px]">
        <div class="flex gap-[6px]">
          <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-primary/60 text-primary rounded-full flex items-center">판매글</span>
          <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-primary/15 text-primary rounded-full flex items-center">거래중</span>
        </div>
        <p class="text-[14px] font-semibold text-black leading-normal">[탱크/용기] 250,200Kg 소형저장탱크 할부판매 합니다.</p>
        <div class="flex items-center gap-[6px] text-[12px] text-gray-text">
          <span>서울</span>
          <div class="w-px h-[12px] bg-gray-border"></div>
          <span>0105259****</span>
          <div class="w-px h-[12px] bg-gray-border"></div>
          <span>2026.01.16</span>
        </div>
      </div>
    </a>

    {{-- 구매글 + 거래완료 --}}
    <a href="{{ asset('junggo-detail') }}" class="flex gap-[10px] py-[20px] border-b border-gray-light">
      <div class="relative w-[80px] h-[80px] bg-gray-light flex-shrink-0 overflow-hidden">
        <img src="{{ asset('images/image34.png') }}" alt="" class="absolute w-full h-full object-cover" />
      </div>
      <div class="flex-1 flex flex-col gap-[6px]">
        <div class="flex gap-[6px]">
          <span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-success/60 text-success rounded-full flex items-center">구매글</span>
          <span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-gray-text/15 text-gray-md rounded-full flex items-center">거래완료</span>
        </div>
        <p class="text-[14px] font-semibold text-black leading-normal">[탱크/용기] 200KG 탱크 구합니다.</p>
        <div class="flex items-center gap-[6px] text-[12px] text-gray-text">
          <span>서울</span>
          <div class="w-px h-[12px] bg-gray-border"></div>
          <span>0105259****</span>
          <div class="w-px h-[12px] bg-gray-border"></div>
          <span>2026.01.16</span>
        </div>
      </div>
    </a>

  </div>
</div>

{{-- 업계소식 섹션 --}}
<div class="w-full bg-white">
  <div class="flex items-center justify-between pt-[40px] pb-[10px] px-[20px]">
    <h2 class="title-lg">업계소식</h2>
    <div class="flex items-center">
      <span class="text-secondary">더보기</span>
      <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="w-[16px] h-[16px]" />
    </div>
  </div>

  <div class="px-[20px]">
    {{-- 뉴스 1 --}}
    <div class="flex gap-[10px] py-[20px] border-b border-gray-light">
      <div class="relative w-[80px] h-[80px] bg-gray-light flex-shrink-0 overflow-hidden">
        <img src="{{ asset('images/image30.png') }}" alt="" class="absolute w-full h-full object-cover" />
      </div>
      <div class="flex-1 flex flex-col gap-[6px]">
        <p class="text-[14px] font-semibold text-black leading-normal">LPG판매협회, 벌크로리 순회점검 '체계화·고도화' 방안 수립</p>
        <div class="flex items-center gap-[6px] text-[12px] text-gray-text">
          <span>가스신문</span>
          <div class="w-px h-[12px] bg-gray-border"></div>
          <span>2026-02-03</span>
        </div>
      </div>
    </div>

    {{-- 뉴스 2 --}}
    <div class="flex gap-[10px] py-[20px] border-b border-gray-light">
      <div class="relative w-[80px] h-[80px] bg-gray-light flex-shrink-0 overflow-hidden">
        <img src="{{ asset('images/image31.png') }}" alt="" class="absolute w-full h-full object-cover" />
      </div>
      <div class="flex-1 flex flex-col gap-[6px]">
        <p class="text-[14px] font-semibold text-black leading-normal">장수군, '2026년 LPG용기 검사비 지원' 실시</p>
        <div class="flex items-center gap-[6px] text-[12px] text-gray-text">
          <span>가스신문</span>
          <div class="w-px h-[12px] bg-gray-border"></div>
          <span>2026-02-03</span>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- LPG 단가동향 섹션 --}}
<div class="w-full bg-white">
  <div class="flex items-center justify-between pt-[40px] pb-[10px] px-[20px]">
    <h2 class="title-lg">LPG 단가동향</h2>
    <div class="flex items-center">
      <span class="text-secondary">더보기</span>
      <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="w-[16px] h-[16px]" />
    </div>
  </div>
  <div class="p-[20px]">
    <img src="{{ asset('images/image29.png') }}" alt="" class="w-full object-cover" />
  </div>
</div>

{{-- 서비스 문의 버튼 --}}
<div class="p-[20px]">
  <button class="btn-primary w-full rounded flex items-center justify-center gap-[10px]">
    <img src="{{ asset('images/headphones.svg') }}" alt="" class="w-[24px] h-[24px]" />
    <span>서비스 문의하기</span>
  </button>
</div>

{{-- 앱 바로가기 섹션 --}}
<div class="px-[20px] py-[40px]">
  <h2 class="title-lg mb-[30px]">조아테크 앱 바로가기</h2>
  <div class="flex gap-[20px] items-center overflow-x-auto hide-scrollbar">
    <div class="w-[48px] h-[48px] flex-shrink-0 rounded-[16px] overflow-hidden">
      <img src="{{ asset('images/image22.png') }}" alt="" class="w-full h-full object-cover" />
    </div>
    <div class="w-[48px] h-[48px] flex-shrink-0 rounded-[16px] overflow-hidden">
      <img src="{{ asset('images/image27.png') }}" alt="" class="w-full h-full object-cover" />
    </div>
    <div class="w-[48px] h-[48px] flex-shrink-0 rounded-[16px] overflow-hidden">
      <img src="{{ asset('images/image20.png') }}" alt="" class="w-full h-full object-cover" />
    </div>
    <div class="w-[48px] h-[48px] flex-shrink-0 rounded-[16px] overflow-hidden">
      <img src="{{ asset('images/image24.png') }}" alt="" class="w-full h-full object-cover" />
    </div>
    <div class="w-[48px] h-[48px] flex-shrink-0 rounded-[16px] overflow-hidden">
      <img src="{{ asset('images/image35.png') }}" alt="" class="w-full h-full object-cover" />
    </div>
  </div>
</div>
