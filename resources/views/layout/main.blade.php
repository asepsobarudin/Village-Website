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
    @vite('resources/js/app.css')
    {{-- End Vite CSS JS --}}

    {{-- CSS Style Tailwind --}}
    @vite('resources/css/components/category.css')
    {{-- End CSS Style Tailwind --}}

    {{-- Ionicon --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{-- End Ionicon --}}
</head>

<body class="bg-white/90">
    <x-navbar :active="$title" :menulayanan="$dropLayanan" :menuprofile="$dropProfile" />
    <div class="flex flex-col items-center justify-start min-h-screen mb-10">
        @yield('content')
    </div>

    <x-footer />

    <button class="fixed hidden cursor-pointer bottom-5 right-5 text-[50px] text-red-600 animate-bounce" id="backToTop">
        <ion-icon name="caret-up-circle"></ion-icon>
    </button>

    <script>
        var backToTopButton = document.getElementById("backToTop");
        var container = document.getElementById('container')

        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('hidden');
                backToTopButton.classList.add('block');
            } else {
                backToTopButton.classList.remove('block');
                backToTopButton.classList.add('hidden');
            }
        });

        backToTopButton.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>

</html>
