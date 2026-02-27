# 조아테크 포털 퍼블리싱 가이드

> 유지보수성 향상, 레이어 중복 제거, 불필요한 코드 제거를 목적으로 합니다.

---

## 1. 프로젝트 구조

```
src/
├── layouts/app.blade.php       # 공통 레이아웃 (HTML shell, 네비게이션 분리)
├── pages/                      # 페이지 파일
├── components/                 # 재사용 컴포넌트
├── main.js                     # Vite 엔트리포인트
└── style.css                   # Tailwind + 공통 컴포넌트 클래스
```

---

## 2. 레이아웃 구조 (app.blade.php)

```html
<body class="overflow-hidden h-screen">
  <!-- 컨텐츠 영역: 네비게이션 높이 제외, 내부 스크롤 -->
  <div class="w-full h-[calc(100vh-60px)] overflow-y-auto overflow-x-hidden" data-name="app-layout">
    {!! $slot !!}
    <x-side-menu />
  </div>

  <!-- 하단 네비게이션: 컨텐츠 영역 밖에 위치 (fixed 정상 동작을 위해) -->
  <div class="fixed bottom-0 left-0 right-0 z-50">
    <x-navigation />
  </div>
</body>
```

### 주의사항
- **네비게이션은 반드시 app-layout 밖에** 위치해야 합니다
- `overflow-y-auto` 컨테이너 내부에 `fixed` 요소가 있으면 fixed가 제대로 동작하지 않습니다
- `overflow-y: auto` 설정 시 `overflow-x`가 자동으로 `auto`로 변경되므로, `overflow-x-hidden`을 반드시 함께 명시합니다

---

## 3. 색상 토큰 (tailwind.config.js)

모든 색상은 아래 토큰을 사용합니다. **하드코딩 금지.**

| 토큰 | 값 | 용도 |
|------|-----|------|
| `primary` | `#2074e2` | 주요 버튼, 링크, 강조 |
| `success` | `#39bd28` | 구매글 등 성공 상태 |
| `blue-dark` | `#1a2e5a` | 보조 버튼 (btn-secondary) |
| `blue-text` | `#2074e2` | 파란색 텍스트 (primary와 동일값) |
| `blue-light` | `#e3f2fd` | 파란색 배경 |
| `gray-dark` | `#555` | 진한 보조 텍스트 |
| `gray-md` | `#666` | 날짜, 작성자 텍스트 |
| `gray-text` | `#999` | 일반 보조 텍스트, placeholder |
| `gray-border` | `#ddd` | 인풋, 카드 보더 |
| `gray-light` | `#eee` | 구분선, 배경 보더 |
| `gray-bg` | `#f5f5f5` | 섹션 배경 |
| `red-required` | `#e53e3e` | 필수 항목 표시 |
| `black-overlay` | `rgba(0,0,0,0.6)` | 모달 배경 |
| `white-overlay` | `rgba(255,255,255,0.8)` | 이미지 위 버튼 배경 |

### 추가 필요 토큰
아래 값은 현재 하드코딩되고 있으므로 tailwind.config.js에 추가를 권장합니다:

```js
'gray-placeholder': '#ccc',     // input placeholder
'gray-btn-border': '#bbb',      // 필터/글작성 버튼 테두리
'blue-navy': '#131e56',         // 초기화 버튼 배경
```

### RGBA 색상 처리
배지(badge) 색상처럼 투명도 변형이 필요한 경우, Tailwind의 투명도 수식어를 활용합니다:

```html
<!-- 금지 -->
<span class="bg-[rgba(32,116,226,0.15)] text-[#2074e2]">판매글</span>

<!-- 권장 -->
<span class="bg-primary/15 text-primary">판매글</span>
```

---

## 4. 공통 CSS 클래스 (style.css)

### 폼 필드

```html
<div class="form-field">
  <label class="form-label">필드명 <span class="required-indicator"></span></label>
  <div class="form-input-wrapper">
    <input class="form-input" type="text" placeholder="입력해주세요" />
  </div>
</div>

<!-- select -->
<div class="form-input-wrapper relative">
  <select class="form-select">...</select>
  <img class="absolute right-[10px]" ... />
</div>
```

| 클래스 | 높이 | 용도 |
|--------|------|------|
| `.form-input-wrapper` | `h-[44px]` | 일반 인풋/셀렉트 |
| `.form-input-wrapper h-[40px]` | `h-[40px]` | 필터 팝업 내 인풋 (높이 재정의) |

### 읽기전용 출력 필드

계산 결과 등 사용자가 직접 수정하지 않는 출력 전용 필드에 사용합니다.

```html
<div class="form-field">
  <label class="form-label">투자계 <span class="text-blue-text font-normal">(제설비+시공비+기타비용)</span></label>
  <div class="form-output">
    <span class="form-output-text" id="out-total-invest">0</span>
  </div>
</div>
```

| 클래스 | 설명 |
|--------|------|
| `.form-output` | 회색 배경(`bg-gray-bg`) 출력 wrapper (`form-input-wrapper` + `bg-gray-bg`) |
| `.form-output-text` | 출력값 span — 우측 정렬, `w-full text-[14px] text-black text-right` |

### 버튼

```html
<button class="btn-primary w-full">주문하기</button>
<button class="btn-secondary w-full">장바구니 담기</button>
<button class="btn-outline w-full">제품목록</button>
<button class="btn-pill">필터</button>
<button class="btn-icon"><img ... /></button>
```

| 클래스 | 높이 | 배경 | 용도 |
|--------|------|------|------|
| `.btn-primary` | `h-[50px]` | `bg-primary` | 주요 액션 |
| `.btn-secondary` | `h-[50px]` | `bg-blue-dark` | 보조 액션 |
| `.btn-outline` | `h-[48px]` | `bg-white` | 목록 이동 등 |
| `.btn-pill` | `h-[32px]` | `bg-white` | 필터, 태그 버튼 |
| `.btn-icon` | `size-[28px]` | - | 아이콘 버튼 |

### 타이포그래피

```html
<h1 class="title-page">페이지 제목</h1>
<h2 class="title-section">섹션 제목</h2>
<h3 class="title-sub">서브 제목</h3>
<p class="text-secondary">보조 텍스트</p>
<p class="text-helper">안내 텍스트</p>
```

### 섹션 레이아웃

```html
<div class="section-container">  <!-- 흰 배경, px-[20px] -->
  ...
</div>
<div class="section-gray">        <!-- 회색 배경, px-[20px] -->
  ...
</div>
```

### 테이블

```html
<div class="table-scrollable">
  <table>
    <thead class="table-header"><tr>...</tr></thead>
    <tbody>
      <tr class="table-row">...</tr>
    </tbody>
  </table>
</div>
```

### 모달 / 바텀시트

HTML ID 명명 규칙: `{name}-sheet`, `{name}-overlay`, `{name}-drawer`

```html
<!-- HTML 구조 (예: filter) -->
<div id="filter-sheet" class="invisible fixed inset-0 z-50 flex flex-col justify-end">
  <div id="filter-overlay" class="absolute inset-0 bg-black-overlay opacity-0 transition-opacity duration-300" onclick="closeSheet('filter')"></div>
  <div id="filter-drawer" class="relative bg-white rounded-t-[20px] px-[20px] pt-[24px] pb-[20px] mb-[60px] translate-y-full transition-transform duration-300 flex flex-col gap-[20px]">
    <!-- 내용 -->
    <div class="flex gap-[8px] pt-[4px]">
      <button class="btn-secondary flex-1" onclick="closeSheet('filter')">초기화</button>
      <button class="btn-primary flex-1" onclick="closeSheet('filter')">검색</button>
    </div>
  </div>
</div>
```

```js
// JS — 공통 헬퍼 (페이지 스크립트 내 정의)
function openSheet(sheetId) {
  var sheet   = document.getElementById(sheetId + '-sheet');
  var overlay = document.getElementById(sheetId + '-overlay');
  var drawer  = document.getElementById(sheetId + '-drawer');
  sheet.classList.remove('invisible');
  void sheet.offsetWidth;
  overlay.classList.remove('opacity-0');  overlay.classList.add('opacity-100');
  drawer.classList.remove('translate-y-full'); drawer.classList.add('translate-y-0');
  document.body.style.overflow = 'hidden';
}

function closeSheet(sheetId) {
  var sheet   = document.getElementById(sheetId + '-sheet');
  var overlay = document.getElementById(sheetId + '-overlay');
  var drawer  = document.getElementById(sheetId + '-drawer');
  overlay.classList.remove('opacity-100'); overlay.classList.add('opacity-0');
  drawer.classList.remove('translate-y-0'); drawer.classList.add('translate-y-full');
  setTimeout(function () { sheet.classList.add('invisible'); }, 300);
  document.body.style.overflow = '';
}

// 사용
window.openFilterSheet  = function () { openSheet('filter'); };
window.closeFilterSheet = function () { closeSheet('filter'); };
```

### 탭 버튼

탭 UI에서 활성/비활성 상태를 `.invest-tab` / `.invest-tab-active` 클래스로 관리합니다.

```html
<div class="bg-white border-b border-gray-border flex px-[20px]">
  <button class="invest-tab invest-tab-active mr-[20px]" data-tab data-target="tab-a">탭A</button>
  <button class="invest-tab mr-[20px]" data-tab data-target="tab-b">탭B</button>
  <button class="invest-tab" data-tab data-target="tab-c">탭C</button>
</div>
```

```js
var tabs = Array.from(document.querySelectorAll('[data-tab]'));
tabs.forEach(function (tab) {
  tab.addEventListener('click', function () {
    tabs.forEach(function (t) { t.classList.remove('invest-tab-active'); });
    tab.classList.add('invest-tab-active');
  });
});
```

### 목록 그리드 (3열)

결과목록 등 `수요처 | 계약기간 | 상세` 구조의 3열 그리드에 사용합니다.

```html
<!-- 헤더 -->
<div class="list-grid-3col border-b border-gray-border bg-white">
  <div class="px-[16px] py-[14px] text-[13px] font-bold text-black text-center">수요처</div>
  <div class="px-[16px] py-[14px] text-[13px] font-bold text-black text-center">계약기간</div>
  <div class="px-[16px] py-[14px] text-[13px] font-bold text-black text-center">상세정보</div>
</div>
<!-- 데이터 행 -->
<div class="list-grid-3col border-b border-gray-border">
  <div class="px-[16px] py-[16px] text-[14px] text-black text-center">업체명</div>
  <div class="px-[16px] py-[16px] text-[14px] text-black text-center">24개월</div>
  <div class="px-[16px] py-[16px] flex items-center justify-center">
    <button class="text-gray-dark"><!-- 아이콘 --></button>
  </div>
</div>
```

---

## 5. 컴포넌트 목록

| 태그 | 파일 | 용도 |
|------|------|------|
| `<x-gnb-main />` | GnbMain.blade.php | 홈 상단 바 |
| `<x-gnb-sub title="..." />` | GnbSub.blade.php | 서브 페이지 상단 바 (뒤로가기 + 제목) |
| `<x-navigation />` | Navigation.blade.php | 하단 탭 네비게이션 |
| `<x-navigation-item icon="..." label="..." />` | NavigationItem.blade.php | 하단 탭 아이템 |
| `<x-menu-tab />` | MenuTab.blade.php | 중고장터 상단 탭 |
| `<x-side-menu />` | SideMenu.blade.php | 전체 메뉴 사이드 드로어 |
| `<x-status-bar />` | StatusBar.blade.php | 상태바 (현재 주석 처리됨) |

### GNB 사용 규칙
- 홈(main) → `<x-gnb-main />`
- 서브 페이지 → `<x-gnb-sub title="페이지명" />`
- **커스텀 GNB 직접 작성 금지** — 위 컴포넌트로 대체

---

## 6. 이미지

```html
<!-- 일반 이미지 -->
<img src="{{ asset('images/filename.png') }}" alt="설명" />

<!-- 커버 이미지 (컨테이너 채우기) -->
<div class="relative w-[80px] h-[80px] bg-gray-light flex-shrink-0 overflow-hidden">
  <img src="{{ asset('images/filename.png') }}" alt="" class="absolute w-full h-full object-cover" />
</div>

<!-- 아이콘 (SVG) -->
<div class="relative shrink-0 size-[24px]">
  <img src="{{ asset('images/icon.svg') }}" alt="" class="block size-full" />
</div>
```

---

## 7. 금지 규칙

### font-family 인라인 스타일 금지
body에 `font-family: 'Inter', 'Noto Sans KR', sans-serif`가 이미 설정되어 있어 모든 자식 요소에 상속됩니다.

```html
<!-- 금지 -->
<p style="font-family: 'Inter', 'Noto Sans KR', sans-serif">텍스트</p>

<!-- 허용 -->
<p>텍스트</p>

<!-- Roboto가 필요한 경우만 -->
<p class="font-roboto">숫자 전용 텍스트</p>
```

### 인라인 grid-template-columns 금지

```html
<!-- 금지 -->
<div class="grid" style="grid-template-columns: 1fr 1fr 60px;">

<!-- 허용 -->
<div class="list-grid-3col">
```

### 색상 하드코딩 금지

```html
<!-- 금지 -->
<div class="border border-[#ddd] text-[#999] bg-[#f5f5f5]">

<!-- 허용 -->
<div class="border border-gray-border text-gray-text bg-gray-bg">
```

### overflow-y-auto 내부에 fixed 요소 금지

```html
<!-- 금지: overflow-y-auto 컨테이너 안에 fixed -->
<div class="overflow-y-auto">
  <div class="fixed bottom-0">네비게이션</div>
</div>

<!-- 허용: fixed 요소는 overflow 컨테이너 밖에 -->
<div class="overflow-y-auto">컨텐츠</div>
<div class="fixed bottom-0">네비게이션</div>
```

---

## 8. 삭제 대상 코드

### style.css — 미사용 클래스

현재 blade 파일 어디서도 사용되지 않아 삭제 가능한 클래스:

- `.form-input-disabled` — disabled 상태 인풋이 없음
- `.text-helper` — 사용처 없음
- `.section-gray` — 사용처 없음 (직접 `bg-gray-bg` 클래스 사용 중)
- `.modal-overlay`, `.modal-sheet` — 실제 모달은 `fixed inset-0 bg-black-overlay`로 직접 작성 중

### tailwind.config.js — 미사용 토큰

- `blue-light: '#e3f2fd'` — `bg-[#e3f2fd]`로 하드코딩되어 토큰이 활용되지 않음

---

## 9. 배지(Badge) 패턴

리스트 아이템의 글 종류/상태 표시에 사용하는 배지:

```html
<!-- 판매글 -->
<span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-primary/60 text-primary rounded-full flex items-center">판매글</span>

<!-- 거래중 -->
<span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-primary/15 text-primary rounded-full flex items-center">거래중</span>

<!-- 구매글 -->
<span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-success/60 text-success rounded-full flex items-center">구매글</span>

<!-- 거래완료 -->
<span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-gray-text/15 text-gray-md rounded-full flex items-center">거래완료</span>
```

---

## 10. 페이지 작성 체크리스트

새 페이지 작성 전 확인:

- [ ] GNB는 `<x-gnb-sub />` 또는 `<x-gnb-main />` 컴포넌트 사용
- [ ] 색상은 모두 Tailwind 토큰 사용 (`text-gray-text`, `border-gray-border` 등)
- [ ] `font-family` 인라인 스타일 없음
- [ ] 폼 필드는 `.form-field`, `.form-label`, `.form-input-wrapper`, `.form-input` 사용
- [ ] 읽기전용 출력 필드는 `.form-output` + `.form-output-text` 사용
- [ ] 버튼은 `.btn-primary`, `.btn-secondary`, `.btn-outline`, `.btn-pill` 사용
- [ ] 탭 버튼은 `.invest-tab` / `.invest-tab-active` 사용
- [ ] 바텀시트 HTML은 `{name}-sheet/overlay/drawer` 구조, JS는 공통 `openSheet(id)` / `closeSheet(id)` 헬퍼 사용
- [ ] 3열 목록 그리드는 `.list-grid-3col` 사용 (인라인 `style="grid-template-columns:..."` 금지)
- [ ] 모달/팝업은 `invisible fixed inset-0` + transition 패턴 사용
- [ ] 이미지는 `{{ asset('images/...') }}` 헬퍼 사용
