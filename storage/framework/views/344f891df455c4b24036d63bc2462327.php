<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Vozdooh'); ?></title>
    <?php echo $__env->yieldPushContent('meta'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    
    
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
</head>
<body>
    <style>
        html {
    scroll-behavior: smooth;
}

@keyframes burger {
    from{transform: translateY(0); opacity: 0;}
    to{transform: translateY(0); opacity: 1;}
}

* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .slider-container {
            width: 100%;
            padding: 20px 0;
            position: relative;
        }
        
        .swiper {
            width: 100%;
            height: 100%;
        }
        
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .card {
            width: 300px;
            height: 400px;
            position: relative;
            overflow: hidden;
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
        
        .swiper-button-next,
        .swiper-button-prev {
            color: #660066;
        }
        
        .swiper-pagination-bullet-active {
            background: #660066;
        }
        
        @media (max-width: 1199px) {
            .card {
                width: 280px;
                height: 380px;
            }
        }
        
        @media (max-width: 767px) {
            .card {
                width: 260px;
                height: 360px;
            }
            
            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }
        }
    </style>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('partials.header', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3955207308-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <main id="main">
        <?php echo e($slot); ?>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('partials.cart', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3955207308-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </main>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('partials.footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3955207308-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php if (isset($component)) { $__componentOriginal8344cca362e924d63cb0780eb5ae3ae6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8344cca362e924d63cb0780eb5ae3ae6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-alert::components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-alert::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8344cca362e924d63cb0780eb5ae3ae6)): ?>
<?php $attributes = $__attributesOriginal8344cca362e924d63cb0780eb5ae3ae6; ?>
<?php unset($__attributesOriginal8344cca362e924d63cb0780eb5ae3ae6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8344cca362e924d63cb0780eb5ae3ae6)): ?>
<?php $component = $__componentOriginal8344cca362e924d63cb0780eb5ae3ae6; ?>
<?php unset($__componentOriginal8344cca362e924d63cb0780eb5ae3ae6); ?>
<?php endif; ?>
    <script>
        window.addEventListener('scroll', function showHeader(){

    let btn = document.querySelector('.uptogo');
    
    if(window.pageYOffset > 100){
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


burgerButton.addEventListener('click', function berger(){
	
    navigation.classList.toggle('hidden');
    navigation.classList.add('flex');

});

document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.mySwiper', {
                slidesPerView: 'auto',
                centeredSlides: true,
                spaceBetween: 20,
                loop: true,
                loopedSlides: 2,
                speed: 800,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modal');
    const closeModalBtn = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelBtn');
    
    // Открытие модального окна по всем кнопкам с классом openModal
    document.querySelectorAll('.openModal').forEach(btn => {
        btn.addEventListener('click', function() {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Закрытие модального окна (остальной код без изменений)
    function closeModal() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }
    
    closeModalBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);
    
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // Обработка формы (без изменений)
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const email = document.getElementById('email').value;
        console.log({name, phone, email});
        closeModal();
        form.reset();
        alert('Спасибо! Ваша заявка отправлена.');
    });
});

document.getElementById('phone').addEventListener('input', function (e) {
    let x = e.target.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
    e.target.value = !x[2] ? '+' + x[1] : 
                     '+' + x[1] + ' (' + x[2] + ')' +
                     (x[3] ? ' ' + x[3] : '') +
                     (x[4] ? '-' + x[4] : '') +
                     (x[5] ? '-' + x[5] : '');
});
    </script>
</body>
</html>
<?php /**PATH D:\Assets\laravelAPP\DanilinCosmetics\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>