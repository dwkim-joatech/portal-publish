# 퍼블리싱 스킬 가이드

조아테크 포털 — Figma → Laravel Blade + Tailwind CSS 퍼블리싱 작업 정리

---

## 1. 프로젝트 스택

| 항목 | 내용 |
|------|------|
| 마크업 | Laravel Blade (`.blade.php`) |
| 스타일 | Tailwind CSS (CDN 아님, Vite 빌드) |
| 빌드 | Vite (`npm run build`) |
| 로컬 서버 | PHP built-in server (`php -S localhost:8000 server.php`) |
| 배포 | GitHub Pages (`.github/workflows/deploy.yml`) |
| 정적 변환 | `build_static.php` (Blade → HTML) |
| 화면 기준 | 모바일 360px 고정 |

---

## 2. 개발 서버 실행

```bash
# 터미널 1 — CSS/JS 핫리로드
npm run dev

# 터미널 2 — Blade 렌더링
php -S localhost:8000 server.php
```

브라우저: `http://localhost:8000/{페이지명}`

---

## 3. 파일 구조

```
src/
├── layouts/
│   └── app.blade.php          # 공통 레이아웃 (하단 Navigation 포함)
├── pages/
│   ├── main.blade.php          → /
│   ├── junggo-list.blade.php   → /junggo-list
│   ├── junggo-detail.blade.php → /junggo-detail
│   └── junggo-write.blade.php  → /junggo-write
└── components/
    ├── StatusBar.blade.php     # 상단 상태바 (다크 배경용)
    ├── GnbMain.blade.php       # 메인 GNB (로고 + 아이콘)
    ├── GnbSub.blade.php        # 서브 GNB (뒤로가기 + 타이틀 + 메뉴)
    ├── Navigation.blade.php    # 하단 탭바
    ├── NavigationItem.blade.php
    ├── MenuTab.blade.php       # 중고장터/쇼핑몰/... 가로 탭
    ├── Tab.blade.php
    ├── MenuApp.blade.php
    ├── AppMenuItem.blade.php
    └── SideMenu.blade.php

public/images/                  # 모든 이미지/아이콘 SVG/PNG
```

---

## 4. 새 페이지 추가 절차

### Step 1 — Blade 페이지 생성
```
src/pages/{페이지명}.blade.php
```
- 레이아웃(`app.blade.php`)이 자동으로 감싸므로 `<html>`, `<body>` 불필요
- 하단 Navigation은 레이아웃에서 자동 제공 (`pb-[60px]` 이미 적용됨)

### Step 2 — `build_static.php`에 등록
```php
$pages = [
    'main'          => 'index.html',
    'junggo-list'   => 'junggo-list.html',
    'junggo-detail' => 'junggo-detail.html',
    'junggo-write'  => 'junggo-write.html',
    // 신규 페이지 추가
    'new-page'      => 'new-page.html',
];
```

### Step 3 — 로컬 빌드 확인
```bash
php build_static.php
```

---

## 5. 컴포넌트 사용법

### GnbSub (서브 페이지 헤더)
```html
<x-gnb-sub title="페이지 제목" />
```
- 라이트 테마 상태바 포함
- 뒤로가기 버튼: `history.back()`
- 오른쪽: 햄버거 메뉴 (`menu_sub.svg`)

### Navigation (하단 탭바)
레이아웃에서 자동 삽입 — 페이지에서 별도 호출 불필요

### MenuTab (가로 탭)
```html
<x-menu-tab />
```
- 기본 active: 중고장터
- JavaScript로 탭 전환 처리 (스크립트 내장)

### Tab (탭 아이템)
```html
<x-tab :active="true" label="중고장터" />
<x-tab additionalClass="text-[#999]" label="쇼핑몰" />
```

---

## 6. Figma → Blade 변환 패턴

### 배지 (판매글/구매글, 거래중/거래완료)
```html
<!-- 판매글 + 거래중 (파란색) -->
<span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(32,116,226,0.6)] text-[#2074e2] rounded-full flex items-center">판매글</span>
<span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(32,116,226,0.15)] text-[#2074e2] rounded-full flex items-center">거래중</span>

<!-- 구매글 + 거래완료 (초록/회색) -->
<span class="px-[6px] h-[18px] text-[11px] leading-[18px] border border-[rgba(57,189,40,0.6)] text-[#39bd28] rounded-full flex items-center">구매글</span>
<span class="px-[6px] h-[18px] text-[11px] leading-[18px] bg-[rgba(102,102,102,0.15)] text-[#666] rounded-full flex items-center">거래완료</span>
```

### 메타 정보 (지역 | 연락처 | 날짜)
```html
<div class="flex items-center gap-[6px] text-[12px] text-[#999]">
  <span>서울</span>
  <div class="w-px h-[12px] bg-[#ddd]"></div>
  <span>0105259****</span>
  <div class="w-px h-[12px] bg-[#ddd]"></div>
  <span>2026.01.16</span>
</div>
```

### 목록 아이템 (썸네일 + 내용)
```html
<a href="{{ asset('junggo-detail') }}" class="flex gap-[10px] py-[20px] border-b border-[#eee]">
  <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
    <img src="{{ asset('images/image32.png') }}" alt="" class="absolute w-full h-full object-cover" />
  </div>
  <div class="flex-1 flex flex-col gap-[6px]">
    <!-- 배지, 제목, 메타 -->
  </div>
</a>
```

### 폼 필드 (라벨 + 셀렉트/인풋)
```html
<!-- 필수 필드: 빨간 불릿 포함 -->
<div class="flex flex-col gap-[6px]">
  <div class="flex items-center gap-[4px]">
    <span class="text-[13px] font-semibold text-black" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">구분</span>
    <span class="inline-block w-[6px] h-[6px] rounded-full bg-[#e53e3e] flex-shrink-0"></span>
  </div>
  <div class="relative border border-[#ddd] h-[40px] flex items-center px-[10px] bg-white">
    <select class="w-full appearance-none bg-transparent text-[14px] text-black outline-none" style="font-family: 'Inter', 'Noto Sans KR', sans-serif">
      <option value="">구분 선택</option>
    </select>
    <img src="{{ asset('images/keyboardArrowRight.svg') }}" alt="" class="absolute right-[10px] size-[16px] pointer-events-none" style="transform: rotate(90deg)" />
  </div>
</div>
```

### 바텀 시트 팝업
```html
<!-- 오버레이 -->
<div id="popup-overlay" class="fixed inset-0 bg-black/50 z-[100] hidden" style="max-width:360px; margin:0 auto;">
  <div class="absolute bottom-0 left-0 right-0 bg-white">
    <!-- 헤더 60px + 콘텐츠 + 버튼 -->
  </div>
</div>

<script>
  document.getElementById('btn-open').addEventListener('click', function() {
    document.getElementById('popup-overlay').classList.remove('hidden');
  });
  document.getElementById('btn-close').addEventListener('click', function() {
    document.getElementById('popup-overlay').classList.add('hidden');
  });
</script>
```

---

## 7. 디자인 토큰

| 토큰 | 값 |
|------|----|
| Primary (파랑) | `#2074e2` |
| Success (초록) | `#39bd28` |
| 필수 불릿 (빨강) | `#e53e3e` |
| 텍스트 기본 | `#000000` |
| 텍스트 보조 | `#999999` |
| 텍스트 3차 | `#666666` |
| 구분선 | `#eeeeee`, `#dddddd` |
| 배경 회색 | `#eeeeee` |
| 폰트 (한글) | `'Inter', 'Noto Sans KR', sans-serif` |
| 폰트 (숫자/영문) | `'Inter', sans-serif` |
| 폰트 (시간) | `'Roboto', sans-serif` |

---

## 8. 이미지 경로 규칙

```html
<!-- 항상 asset() 헬퍼 사용 -->
<img src="{{ asset('images/파일명.svg') }}" />

<!-- 로컬: /images/파일명.svg -->
<!-- GitHub Pages: /portal-publish/images/파일명.svg -->
```

`asset()` 없이 `/images/...`로 하드코딩하면 GitHub Pages에서 경로 깨짐.
`build_static.php`에서 자동 보정하지만, 컴포넌트 prop으로 전달 시 누락될 수 있음.

---

## 9. Figma MCP 한도 초과 시 대응

MCP 호출 한도 초과 시 → **이미지 직접 공유**로 작업 가능

1. 피그마에서 프레임 선택
2. `⌘C` (Copy as PNG) 또는 우클릭 → Copy/Paste as → Copy as PNG
3. 채팅에 `⌘V` 붙여넣기
4. 이미지 보고 Blade + Tailwind로 구현

---

## 10. 배포

```bash
# main 브랜치에 push하면 GitHub Actions 자동 실행
git add .
git commit -m "feat: 페이지 추가"
git push origin main
```

배포 확인:
```bash
curl -s https://dwkim-joatech.github.io/portal-publish/junggo-list/ | grep "확인할 텍스트"
```
