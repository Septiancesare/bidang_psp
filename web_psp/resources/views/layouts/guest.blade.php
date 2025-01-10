<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-guest font-sans text-gray-900 antialiased ">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
        <div>
            <a href="/">
                <x-application-logo />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg bg-opacity-75">
            {{ $slot }}
        </div>
    </div>
</body>


</html>
<style>
    .bg-guest {
        background-image: url('/assets/bg-login-register.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        position: relative;

        /* Overlay warna */
        background-color: #969c96d0;
        /* Putih dengan opacity */
        background-blend-mode: overlay;
        /* Gabungkan gambar dan warna */
    }
</style>
