<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '파인원커뮤니케이션즈')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#121212] text-white min-h-screen">
    @include('components.navigation')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>
