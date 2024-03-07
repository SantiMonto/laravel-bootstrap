<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Script -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    {{ $slot }}
</body>

</html>
