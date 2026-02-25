<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>조아테크 - {{ $title ?? '포털' }}</title>
    <!-- Load Vite client and main.js -->
    <script type="module" src="http://localhost:3000/@vite/client"></script>
    <script type="module" src="http://localhost:3000/src/main.js"></script>
</head>
<body class="p-0 sm:p-4 bg-[#f3f4f6]">
    <div class="w-full mx-auto bg-white relative min-h-screen pb-[60px]" data-name="app-layout">

        <!-- 개별 페이지 컨텐츠가 주입되는 영역 -->
        {!! $slot !!}

        <!-- 하단 네비게이션 공통 -->
        <div class="fixed bottom-0 left-0 right-0 z-50">
            <x-navigation />
        </div>

        <!-- 전체 메뉴 사이드 드로어 -->
        <x-side-menu />
    </div>
</body>
</html>
