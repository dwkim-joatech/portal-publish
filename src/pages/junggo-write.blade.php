{{-- 중고장터 글쓰기 --}}

{{-- GNB --}}
<x-gnb-sub title="글작성" />

{{-- 입력 폼 --}}
<div class="px-[20px] py-[20px] flex flex-col gap-[20px]">

  {{-- 구분 --}}
  <div class="flex flex-col gap-[6px]">
    <div class="flex items-center gap-[4px]">
      <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">구분</span>
      <span class="inline-block w-[6px] h-[6px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
    </div>
    <div class="relative border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
      <select class="w-full appearance-none bg-transparent text-[14px] text-black outline-none" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
        <option value="">구분 선택</option>
        <option>판매글</option>
        <option>구매글</option>
      </select>
      <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[10px] size-[16px] pointer-events-none" style="transform: rotate(90deg)" />
    </div>
  </div>

  {{-- 카테고리 --}}
  <div class="flex flex-col gap-[6px]">
    <div class="flex items-center gap-[4px]">
      <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">카테고리</span>
      <span class="inline-block w-[6px] h-[6px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
    </div>
    <div class="relative border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
      <select class="w-full appearance-none bg-transparent text-[14px] text-black outline-none" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
        <option value="">선택</option>
        <option>탱크/용기</option>
        <option>조정기</option>
        <option>밸브</option>
        <option>기타 설비</option>
      </select>
      <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[10px] size-[16px] pointer-events-none" style="transform: rotate(90deg)" />
    </div>
  </div>

  {{-- 제목 --}}
  <div class="flex flex-col gap-[6px]">
    <div class="flex items-center gap-[4px]">
      <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">제목</span>
      <span class="inline-block w-[6px] h-[6px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
    </div>
    <div class="border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
      <input type="text" placeholder="제목을 입력해주세요" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#ccc]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif" />
    </div>
  </div>

  {{-- 거래지역 --}}
  <div class="flex flex-col gap-[6px]">
    <div class="flex items-center gap-[4px]">
      <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">지역</span>
      <span class="inline-block w-[6px] h-[6px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
    </div>
    <div class="relative border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
      <select class="w-full appearance-none bg-transparent text-[14px] text-black outline-none" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
        <option value="">선택</option>
        <option>서울</option>
        <option>경기</option>
        <option>인천</option>
        <option>부산</option>
        <option>대구</option>
        <option>광주</option>
        <option>대전</option>
        <option>울산</option>
        <option>세종</option>
        <option>강원</option>
        <option>충북</option>
        <option>충남</option>
        <option>전북</option>
        <option>전남</option>
        <option>경북</option>
        <option>경남</option>
        <option>제주</option>
      </select>
      <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[10px] size-[16px] pointer-events-none" style="transform: rotate(90deg)" />
    </div>
  </div>

  {{-- 휴대폰 번호 --}}
  <div class="flex flex-col gap-[6px]">
    <div class="flex items-center gap-[4px]">
      <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">휴대폰 번호</span>
    </div>
    <div class="border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
      <input type="tel" placeholder="연락처를 입력해주세요" class="w-full text-[14px] text-black outline-none bg-transparent placeholder-[#ccc]" style="font-family: 'Inter', sans-serif" />
    </div>
  </div>

  {{-- 내용 --}}
  <div class="flex flex-col gap-[6px]">
    <div class="flex items-center gap-[4px]">
      <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">내용</span>
      <span class="inline-block w-[6px] h-[6px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
    </div>
    <div class="border border-[#ddd] p-[10px] bg-white" style="height: 190px">
      <textarea placeholder="내용을 입력해주세요" class="w-full h-full text-[14px] text-black outline-none bg-transparent resize-none placeholder-[#ccc]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif"></textarea>
    </div>
  </div>

  {{-- 게시기간 --}}
  <div class="flex flex-col gap-[6px]">
    <div class="flex items-center gap-[4px]">
      <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">게시기간</span>      
      <span class="inline-block w-[6px] h-[6px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
    </div>
    <div class="border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
      <input type="date" class="w-full text-[14px] text-black outline-none bg-transparent" style="font-family: 'Inter', sans-serif" />
    </div>
  </div>

  {{-- 파일첨부 --}}
  <div class="flex flex-col gap-[6px]">
    <div class="flex items-center gap-[4px]">
      <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">파일첨부 (5개까지 첨부가능합니다.)</span>      
    </div>
    <div class="flex flex-wrap gap-[10px]">
      {{-- 추가 버튼 --}}
      <label class="w-[80px] h-[80px] bg-[#eee] flex items-center justify-center cursor-pointer flex-shrink-0">
        <input type="file" accept="image/*" class="hidden" />
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#999"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
      </label>
      {{-- 첨부된 사진 예시 1 --}}
      <div class="relative w-[80px] h-[80px] bg-[#eee] overflow-hidden flex-shrink-0">
        <img src="{{ asset('images/image33.png') }}" alt="" class="absolute w-full h-full object-cover" />
        <button class="absolute top-[4px] right-[4px] size-[20px] bg-black/50 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="white"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
        </button>
      </div>
      {{-- 첨부된 사진 예시 2 --}}
      <div class="relative w-[80px] h-[80px] bg-[#eee] overflow-hidden flex-shrink-0">
        <img src="{{ asset('images/image34.png') }}" alt="" class="absolute w-full h-full object-cover" />
        <button class="absolute top-[4px] right-[4px] size-[20px] bg-black/50 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="white"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
        </button>
      </div>
    </div>
  </div>

  {{-- 개인정보 동의 --}}
  <label class="flex items-center gap-[10px] cursor-pointer">
    <input type="checkbox" class="size-[16px] accent-[#2074e2]" />
    <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">개인정보 수집에 동의합니다. <span class="text-[13px] font-semibold text-[#EF4444]" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">(필수)</span></span>
  </label>

</div>

{{-- 등록하기 버튼 --}}
<div class="px-[20px] pb-[20px] pt-[4px]">
  <button class="w-full h-[40px] bg-[#2074e2] text-white text-[14px] font-semibold" style="font-family: 'Inter', sans-serif">
    등록하기
  </button>
</div>
