<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Интернет магазин' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        {{-- Подключение стилей livewire --}}
        @livewireStyles
    </head>
    <body class="bg-gray-100 text-gray-900">
        <livewire:partials.header />
        <main id="main">
            {{ $slot }}
        </main>
        <livewire:partials.footer />
        {{-- Подключение скриптов livewire --}}
        @livewireScripts
    </body>
</html>
