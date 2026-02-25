# 조아테크 포털

Figma 디자인을 Laravel Blade + Tailwind CSS로 퍼블리싱한 프로젝트입니다.

## 기술 스택

- **Laravel Blade** - 템플릿 엔진 (Vue 3 사용 안 함)
- **Tailwind CSS** - 유틸리티 CSS 프레임워크
- **Vite** - 빌드 도구 (Javascript 처리, jQuery 사용 안 함)

## 프로젝트 규칙

1. **Vue 3를 사용하지 않음**: 모든 컴포넌트와 페이지는 Laravel Blade(`*.blade.php`)를 통해 작성합니다.
2. **jQuery를 사용하지 않음**: DOM 조작 및 이벤트 리스너 등은 순수 바닐라 JavaScript(Vanilla JS)를 사용합니다.
3. **Laravel Blade 사용**: 퍼블리싱된 마크업은 Blade 문법을 활용하여 컴포넌트화하고 재사용성을 높입니다.

## 설치 및 실행

### 1. 의존성 설치

```bash
npm install
```

### 2. 개발 서버 실행

터미널을 두 개 열어 아래 명령어를 각각 실행합니다.

**Vite 개발 서버 (에셋 빌드):**
```bash
npm run dev
```

**PHP 로컬 서버:**
```bash
php -S localhost:8000 server.php
```

브라우저에서 `http://localhost:8000`으로 접속하여 확인합니다.

### 3. 프로덕션 빌드

```bash
npm run build
```

## 프로젝트 구조 (예시)

```
portal_publish/
├── public/                 # 정적 리소스 (이미지, 폰트 등)
├── src/
│   ├── layouts/            # 전체 페이지의 뼈대 (상단 상태바, GNB, 하단 탭 내비게이션 포함)
│   │   └── app.blade.php   
│   ├── pages/              # 개별 완성 페이지 (레이아웃의 콘텐츠 영역에 들어갈 알맹이)
│   │   └── main.blade.php  # 메인 페이지
│   ├── components/         # 페이지 내에서 재사용 가능한 부품들 조각 (탭, 상태바 등)
│   │   └── ...
│   ├── constants/
│   ├── main.js             # 진입점 (Vanilla JS)
│   └── style.css           # 전역 스타일
├── server.php              # 로컬 서버 라우팅용 PHP (요청 URL에 맞춰 src/pages 매핑 수행)
├── package.json
├── vite.config.js          # Vite 설정
├── tailwind.config.js      # Tailwind 설정 (blade.php 확장자 지원)
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

- **Noto Sans KR** - 한글
- **Inter** - 영문
- **Roboto** - 시스템 정보

폰트는 Google Fonts에서 자동으로 로드됩니다.

## 라이선스

Copyright © 2026 조아테크
