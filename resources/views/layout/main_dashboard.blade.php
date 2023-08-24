<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="icon" href="{{ asset('assets/image/logo_website.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/image/logo_website.png') }}" type="image/x-icon">
    {{-- End Title --}}

    {{-- Vite CSS JS --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{-- End Vite CSS JS --}}

    {{-- Ionicon --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="flex h-screen">

    @component('components.dashboard_components.side_navbar')
    @endcomponent

    <div class="w-full flex justify-center">
        <div class="container">
            @yield('content')
        </div>
    </div>

</body>

</html>
