<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Vozdooh' }}</title>
    @stack('meta')
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="{{asset('assets/js/app.js')}}"></script>
    {{-- <script defer src="{{asset('/assets/js/main.js')}}"></script>
    <script defer src="{{ asset('assets/js/graph-modal.js') }}"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    
    {{-- <link rel="stylesheet" href="{{ asset('css/graph-modal.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    
    {{-- Подключение стилей livewire --}}
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-black text-white">
    <style>
html {
    scroll-behavior: smooth;
    overflow-x: hidden;
}

#cold, #salat, #zakus, #fire {
  scroll-margin-top: 50px; /* Примерное значение, подберите под ваш дизайн */
}

input::-webkit-calendar-picker-indicator {
    filter: invert(0);
}

@keyframes burger {
    from{transform: translateY(0); opacity: 0;}
    to{transform: translateY(0); opacity: 1;}
}
    </style>
    <livewire:partials.header />
    <main id="main">
        {{ $slot }}
    <livewire:partials.cart />
    </main>
    <livewire:partials.footer />

    {{-- Подключение скриптов livewire --}}
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-livewire-alert::scripts />
    <script>
window.onscroll = () => {
    const divMenu = document.getElementById('fixMe-menu'); 
    const div2Menu = document.getElementById('dontfixMe-menu'); 
    if (window.scrollY >= divMenu.offsetTop) {
        divMenu.classList.add('fixed');
        divMenu.classList.remove('absolute'); 
    } 
    if (window.scrollY <= div2Menu.offsetTop) {
        divMenu.classList.remove('fixed'); 
    } 
};

window.addEventListener('scroll', function showHeader(){

    let btn = document.querySelector('.uptogo');
    
    if(window.pageYOffset > 200){
        btn.classList.remove('hidden');
    }
    else{
        btn.classList.add('hidden');
    };

    btn.onclick = () => {
      window.scrollTo(0, 0);
    }
  });

const navigation = document.getElementById('navbar');
const burgerButton = document.getElementById('burger-button');
const burgerButtonClose = document.getElementById('close-button');

burgerButton.addEventListener('click', function berger(){
    navigation.classList.remove('max-xl:hidden');
    navigation.classList.add('flex');
    burgerButtonClose.classList.remove('hidden');
    burgerButtonClose.classList.add('max-xl:flex');
});

burgerButtonClose.addEventListener('click', function(){
	navigation.classList.add('max-xl:hidden');
    burgerButtonClose.classList.remove('max-xl:flex');
});

document.getElementById('phone').addEventListener('input', function (e) {
    let x = e.target.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
    e.target.value = !x[2] ? '+' + x[1] : 
                     '+' + x[1] + ' (' + x[2] + ')' +
                     (x[3] ? ' ' + x[3] : '') +
                     (x[4] ? '-' + x[4] : '') +
                     (x[5] ? '-' + x[5] : '');
});

function scrollToSection(targetId) {
    if (!targetId) return;
    
    const targetSection = document.querySelector(targetId);
    if (!targetSection) return;
    
    // Получаем позицию и размеры элементов
    const sectionRect = targetSection.getBoundingClientRect();
    const headerHeight = document.getElementById('fixMe-menu').offsetHeight;
    const windowHeight = window.innerHeight;
    
    // Вычисляем позицию для центрирования с учетом высоты шапки
    const scrollPosition = window.pageYOffset + sectionRect.top;
    const centerPosition = scrollPosition - (windowHeight / 2) + (sectionRect.height / 2) - headerHeight;
    
    // Плавная прокрутка
    window.scrollTo({
        top: centerPosition,
        behavior: 'smooth'
    });
    
    // Обновляем URL без перезагрузки страницы (опционально)
    history.pushState(null, null, targetId);
}

// Обработчик для якорных ссылок при загрузке страницы
document.addEventListener('DOMContentLoaded', function() {
    if (window.location.hash) {
        setTimeout(() => {
            scrollToSection(window.location.hash);
        }, 100);
    }
});
    </script>
</body>
</html>
