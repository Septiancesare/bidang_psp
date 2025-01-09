<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PSP Dinas Pertanian Grobogan</title>

    <link rel="shortcut icon" href="{{ asset('assets/Lambang_Grobogan.png') }}" type="image/x-icon">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif

    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap');

        .dm-serif-text-regular {
            font-family: "DM Serif Text", serif;
            font-weight: 400;
            font-style: normal;
        }

        .dm-serif-text-regular-italic {
            font-family: "DM Serif Text", serif;
            font-weight: 400;
            font-style: italic;
        }
    </style>
</head>

<body class="overflow-x-hidden ">
    <div class="sticky top-0 z-10">
        @include('components.header')
    </div>

    <main>
        {{ $slot }}
    </main>

    @include('components.footer')
</body>

</html>
