<!DOCTYPE html>
<html lang="ko" class="overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>조아테크 - {{ $title ?? '포털' }}</title>
    <!-- Load Vite client and main.js -->
    <link rel="stylesheet" href="http://localhost:3000/src/style.css">
    <script type="module" src="http://localhost:3000/@vite/client"></script>
    <script type="module" src="http://localhost:3000/src/main.js"></script>
</head>
<body class="p-0 bg-white overflow-hidden h-screen">
    <!-- 컨텐츠 영역 (네비게이션 높이 제외) -->
    <div class="w-full h-[calc(100vh-60px)] bg-white relative overflow-y-auto overflow-x-hidden" data-name="app-layout">

        <!-- 개별 페이지 컨텐츠가 주입되는 영역 -->
        {!! $slot !!}

        <!-- 전체 메뉴 사이드 드로어 -->
        <x-side-menu />
    </div>

    <!-- 하단 네비게이션 (컨텐츠 영역 밖에 고정) -->
    <div class="fixed bottom-0 left-0 right-0 z-50">
        <x-navigation />
    </div>
</body>
</html>
