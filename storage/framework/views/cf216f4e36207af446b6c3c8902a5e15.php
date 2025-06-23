<header class="text-white">
      <div id="fixMe" class="w-full bg-black drop-shadow-2xl/50 transition border-b border-[#FFDBA9] py-1">
        <div class="container mx-auto">
          <div id="between" class="flex items-center gap-[300px] max-xl:mx-4 max-xl:my-[15px] max-xl:justify-between max-xl:gap-1">
            <a wire:navigated href="<?php echo e(route('page.home')); ?>" class="flex justify-start">
              <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(url('storage', $logo['image'])); ?>" width="100" height="100" alt="Логотип">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </a>
            <menu id="navbar" class="z-50 animate-[burger_600ms_ease-in-out] xl:flex max-xl:hidden max-xl:pb-[50px] max-xl:bg-black max-xl:gap-4 max-xl:flex-col max-xl:items-center max-xl:top-20 max-xl:left-0  max-xl:w-full max-[500px]:w-full max-xl:absolute gap-20 font-regular text-[24px] max-lg:text-[18px] max-md:text-[15px]">
                <div id="close-button" class="hidden xl:hidden text-[30px] pr-[20px] w-full justify-end">
                    <button class="navbar__close-button">
                        <i class='bx bx-x'></i>
                    </button>
                </div>
                <li>
                    <a wire:navigated href="<?php echo e(route('page.home')); ?>" class="<?php echo e(request()->is('/') ? 'text-white hover:text-[#FFDBA9] transition duration-150' : 'hover:text-[#FFDBA9] transition duration-150'); ?>">Главная</a>
                </li>
                <li>
                    <a wire:navigated href="<?php echo e(route('page.home')); ?>#dontfixMe" class="<?php echo e(request()->is('/') ? 'text-white hover:text-[#FFDBA9] transition duration-150' : 'hover:text-[#FFDBA9] transition duration-150'); ?>">О нас</a>
                </li>
                <li>
                    <a wire:navigated href="<?php echo e(route('page.products')); ?>" class="<?php echo e(request()->is('/products') ? 'text-white hover:text-[#FFDBA9] transition duration-150' : 'hover:text-[#FFDBA9] transition duration-150'); ?>">Меню</a>
                </li>
                <li>
                    <a wire:navigated href="<?php echo e(route('page.home')); ?>#contacts" class="<?php echo e(request()->is('/') ? 'text-white hover:text-[#FFDBA9] transition duration-150' : 'hover:text-[#FFDBA9] transition duration-150'); ?>">Контакты</a>
                </li>
                <li>
                    <a wire:navigated href="<?php echo e(route('page.bron')); ?>" class="<?php echo e(request()->is('/bron') ? 'text-white hover:text-[#FFDBA9] transition duration-150' : 'hover:text-[#FFDBA9] transition duration-150'); ?>">Бронь</a>
                </li>
                <li>
                    <a wire:navigated href="<?php echo e(route('page.review')); ?>" class="<?php echo e(request()->is('/review') ? 'text-white hover:text-[#FFDBA9] transition duration-150' : 'hover:text-[#FFDBA9] transition duration-150'); ?>">Отзывы</a>
                </li>
            </menu>
            <div class="text-[30px] xl:hidden">
                <button id="burger-button" class="cursor-pointer lex justify-center">
                    <i class='bx bx-menu'></i>
                </button>
            </div>
          </div>
        </div>
      </div>
    </header><?php /**PATH D:\Assets\laravelAPP\graal\resources\views/livewire/partials/header.blade.php ENDPATH**/ ?>