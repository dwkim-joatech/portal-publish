# 조아테크 포털

Figma 디자인을 Vue 3 + Tailwind CSS로 퍼블리싱한 프로젝트입니다.

## 기술 스택

- **Vue 3** - 프론트엔드 프레임워크
- **Tailwind CSS** - 유틸리티 CSS 프레임워크
- **Vite** - 빌드 도구

## 설치 및 실행

### 1. 의존성 설치

```bash
npm install
```

### 2. 개발 서버 실행

```bash
npm run dev
```

브라우저에서 `http://localhost:3000`으로 자동 접속됩니다.

### 3. 프로덕션 빌드

```bash
npm run build
```

빌드된 파일은 `dist` 폴더에 생성됩니다.

### 4. 빌드 미리보기

```bash
npm run preview
```

## 프로젝트 구조

```
portal_publish/
├── src/
│   ├── components/          # Vue 컴포넌트
│   │   ├── Main.vue        # 메인 페이지
│   │   ├── Navigation.vue  # 하단 네비게이션
│   │   ├── NavigationItem.vue
│   │   ├── Tab.vue         # 탭 컴포넌트
│   │   ├── MenuTab.vue     # 메뉴 탭
│   │   ├── GnbMain.vue     # 상단 GNB
│   │   ├── StatusBar.vue   # 상태바
│   │   ├── MenuApp.vue     # 앱 메뉴
│   │   └── AppMenuItem.vue # 앱 메뉴 아이템
│   ├── constants/
│   │   └── images.js       # 이미지 URL 상수
│   ├── App.vue             # 루트 컴포넌트
│   ├── main.js             # 진입점
│   └── style.css           # 전역 스타일
├── index.html              # HTML 템플릿
├── package.json
├── vite.config.js          # Vite 설정
├── tailwind.config.js      # Tailwind 설정
├── postcss.config.js       # PostCSS 설정
└── README.md

```

## 주요 기능

- 🏠 **메인 페이지**: 조아테크 서비스 소개
- 📱 **앱 메뉴**: 9가지 주요 기능 (간편결제, 완성검사, 벌크로리점검 등)
- 🛒 **중고장터**: 판매글/구매글 리스트
- 📰 **업계소식**: 가스 산업 관련 뉴스
- 📊 **LPG 단가동향**: 가격 변동 그래프
- 📞 **서비스 문의**: 고객 지원
- 📲 **앱 바로가기**: 다양한 앱 링크

## 폰트

프로젝트는 다음 폰트를 사용합니다:

- **Inter** - 영문
- **Noto Sans KR** - 한글
- **Roboto** - 시스템 정보

폰트는 Google Fonts에서 자동으로 로드됩니다.

## 이미지 자산

Figma에서 추출한 이미지들은 7일간 유효한 임시 URL로 제공됩니다.
프로덕션 환경에서는 이미지를 다운로드하여 `/public` 폴더에 저장하고, 경로를 업데이트해야 합니다.

## 라이선스

Copyright © 2026 조아테크
