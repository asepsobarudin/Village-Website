<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Title --}}
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('assets/image/logo_website.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/image/logo_website.png') }}" type="image/x-icon">
    {{-- End Title --}}

    {{-- Vite CSS JS --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    @vite('resources/js/main.js')
    {{-- End Vite CSS JS --}}

    <link rel="stylesheet" href="{{ asset('dist/css/swiper.css') }}" />

    {{-- Ionicon --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{-- End Ionicon --}}
</head>

<body class="bg-white/90 relative">
    <x-navbar :active="$title" :menu="$menu" />
    <div class="flex flex-col items-center justify-start min-h-screen mb-10">
        @yield('content')
    </div>

    <x-footer />

    <button class="fixed hidden cursor-pointer bottom-5 right-5 text-[50px] text-green-700" id="backToTop">
        <ion-icon name="caret-up-circle"></ion-icon>
    </button>
</body>

</html>
