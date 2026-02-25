{{ $title = '서비스 문의' }}

<div class="px-[20px] py-[40px] pt-[80px]">
  <h1 class="text-[24px] font-bold text-black mb-[20px]">테스트 서브 페이지 ({{ $title }})</h1>
  <p class="text-[16px] text-[#666] leading-[24px]">이 페이지는 새로운 라우팅 시스템과 레이아웃(<code>src/layouts/app.blade.php</code>) 구조가 잘 동작하는지 확인하기 위해 생성된 테스트용 서브 페이지입니다.</p>

  <div class="mt-[40px] p-[20px] bg-gray-50 rounded-lg border border-gray-200">
      <h2 class="text-[18px] font-bold mb-[10px]">공통 레이아웃이 지원하는 것들:</h2>
      <ul class="list-disc pl-[20px] flex flex-col gap-[8px] text-[#444]">
          <li>상단에 상태바(StatusBar)나 뒤로가기 헤더 등 (현재는 없음, 필요시 추가 가능)</li>
          <li>하단에 고정된 앱 탭바(Navigation) 표시</li>
          <li>가로폭 전체 사용 (w-full 처리됨)</li>
      </ul>
  </div>

  <div class="mt-[40px]">
    <a href="/" class="inline-flex h-[50px] px-[20px] bg-[#2074e2] text-white items-center justify-center font-semibold rounded gap-[8px]">
      <img src="{{ asset('images/homeFill.svg') }}" alt="홈으로" class="w-[20px] h-[20px] brightness-0 invert" />
      <span>메인으로 돌아가기</span>
    </a>
  </div>
</div>
