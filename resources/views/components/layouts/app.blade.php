<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Vozdooh' }}</title>
    @stack('meta')
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="{{asset('assets/js/app.js')}}"></script>
    <link rel="icon" href="{{ asset('assets/image/circular_logo.png') }}" type="image/x-icon">
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
    <div id="preloader" class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-500 object-cover bg-[url({{ asset('assets/image/BG.png') }})]">
    <div class="animate-spin rounded-full h-16 w-16 border-4 border-[#FFDBA9] border-t-transparent"></div>
</div>
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

 .swiper-button-next,
    .swiper-button-prev {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 12px;
      border-radius: 9999px;
      color: white;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
      font-size: 18px;
    }


    .slider-container {
            width: 100%;
            padding: 20px 0;
            position: relative;
            overflow: hidden;
        }
        
        .swiper {
            width: 100%;
            height: 100%;
            padding: 10px 0;
        }
        
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease;
        }
        
        .card {
            width: 350px;
            height: 400px;
            position: relative;
            overflow: hidden;
            margin: 0 auto;
        }
        
        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(102, 0, 102, 0.2);
            backdrop-filter: blur(5px);
            color: white;
            font-size: 21px;
            font-weight: 500;
            opacity: 0;
            transition: opacity 0.2s ease;
        }
        
        .card:hover .card-overlay {
            opacity: 1;
        }
        
        
        
        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 20px;
            font-weight: bold;
        }
        
      
        
        @media (max-width: 767px) {
            
            
            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }
        }

         @media (max-width: 1199px) {
            .card {
                width: 300px;
                height: 380px;
            }
        }
        
        @media (max-width: 991px) {
            .card {
                width: 280px;
                height: 360px;
            }
        }
        
        @media (max-width: 767px) {
            .card {
                width: 260px;
                height: 340px;
            }
            
            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }
        }
        
        @media (max-width: 575px) {
            .card {
                width: 240px;
                height: 320px;
            }
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

let labels = document.querySelectorAll('label');
labels.forEach((label)=>{
  label.style.color='white';
});

 document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.mySwiper', {
                slidesPerView: 'auto',
                centeredSlides: false,
                spaceBetween: 20,
                loop: true,
                speed: 800,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
               breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 8,  // Уменьшено расстояние для мобильных
                        centeredSlides: true
                    },
                    400: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        centeredSlides: true
                    },
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 18
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            });
        });

        window.addEventListener('load', function () {
        const preloader = document.getElementById('preloader');
        preloader.classList.add('opacity-0');
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500); // дожидаемся анимации исчезновения
    });
    </script>

</body>
</html>
