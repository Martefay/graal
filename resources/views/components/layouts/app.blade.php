<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Интернет магазин' }}</title>
        @stack('meta')
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <x-livewire-alert::scripts />
    </body>
</html>
