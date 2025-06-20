<header class="absolute bg-white top-0 left-0 py-5 w-full drop-shadow-2xl z-50">
      <div class="container mx-auto">
        <div class="px-4">
          <div class="flex relative justify-between max-[1280px]:justify-between max-[1280px]:gap-[100px] items-center">
            <a wire:navigated href="<?php echo e(route('page.home')); ?>" class="">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <img
                class="w-[240px] h-auto object-cover "
                src="<?php echo e(url('storage', $logo['image'])); ?>"
                alt="logo"
              />
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </a>
            <menu id="navbar" class="hidden animate-[burger_600ms_ease-in-out] gap-20 max-xl:gap-10 max-[1280px]:pb-[50px] max-[1280px]:gap-4 max-[1280px]:flex-col max-[1280px]:pt-8 max-[1280px]:items-center max-[1280px]:bg-white max-[1280px]:top-[85px] max-[1280px]:rounded-b-lg max-[1280px]:w-full max-[1280px]:absolute min-[1280px]:flex">
              <div id="button-uptogo" class="z-40 uptogo backdrop-blur-sm bg-[#660066]/50 fixed flex right-2 bottom-[10%] text-[24px] hidden border border-[#660066] hover:bg-[#660066] hover:text-black transition duration-250 cursor-pointer p-4">
            <i class='bx bxs-chevron-up' style="color: #eee;"></i>
        </div>
                <li>
                <a wire:navigated href="<?php echo e(route('page.home')); ?>" class="<?php echo e(request()->is('/') ? 'text-[#660066]' : 'text-black hover:text-[#660066] duration-150'); ?> text-[24px] font-regular cursor-pointer">Главная</a>
                    </li>
                    <li>
                        <a wire:navigated href="<?php echo e(route('page.products')); ?>" class="<?php echo e(request()->is('products') ? 'text-[#660066]' : 'text-black] hover:text-[#660066] duration-150'); ?> text-[24px] font-regular cursor-pointer">Продукция</a>
                    </li>
                    <li>
                        <a wire:navigated href="" class="<?php echo e(request()->is('login') ? 'text-[#660066]' : 'text-black hover:text-[#660066] duration-150'); ?> text-[24px] font-regular cursor-pointer">Услуги</a>
              </li>
              <ul class="hidden flex-col gap-1 max-sm:flex">
                <li class="flex items-center gap-1 group">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $contactheaders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contactheader): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a
                    href="mailto:<?php echo e($contactheader['email']); ?>"
                    class="text-black hover:text-[#660066] duration-150 flex gap-1 text-[20px] max-md:text-[18px] font-regular cursor-pointer"
                  >
                    <svg
                      class="w-[30px] h-[30px] text-black hover:text-[#660066] duration-150"
                      xmlns="http://www.w3.org/2000/svg"
                      width="48"
                      height="48"
                      viewBox="0 0 48 48"
                    >
                      <path
                        fill="none"
                        stroke="#660066"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6.47 10.71a2 2 0 0 0-2 2h0v22.61a2 2 0 0 0 2 2h35.06a2 2 0 0 0 2-2h0V12.68a2 2 0 0 0-2-2H6.47Zm33.21 3.82L24 26.07L8.32 14.53"
                      />
                    </svg>
                    <?php echo e($contactheader['email']); ?>

                  </a>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </li>
                <li class="flex items-center gap-1 group">
                  <a
                    href="tel:<?php echo e($contactheader['phone']); ?>"
                    class="text-black hover:text-[#660066] duration-150 flex gap-1 text-[20px] max-md:text-[18px] font-regular cursor-pointer"
                  >
                    <svg
                      class="w-[30px] h-[30px] text-black hover:text-[#660066] duration-150"
                      xmlns="http://www.w3.org/2000/svg"
                      width="48"
                      height="48"
                      viewBox="0 0 48 48"
                    >
                      <path
                        fill="none"
                        stroke="#660066"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.308 12.467a24 24 0 0 1-.881-4.384C18.27 6.602 16.977 5.5 15.488 5.5H8.58c-1.777 0-3.145 1.535-2.989 3.304c1.575 17.829 15.777 32.03 33.606 33.606c1.77.156 3.304-1.207 3.304-2.984v-6.16c0-2.248-1.102-3.536-2.583-3.693a24 24 0 0 1-4.384-.88a4.9 4.9 0 0 0-4.87 1.243l-2.957 2.957a31.27 31.27 0 0 1-12.599-12.599l2.957-2.957a4.9 4.9 0 0 0 1.244-4.87"
                      />
                    </svg>
                    +<?php echo e($contactheader['phone']); ?>

                  </a>
                </li>
              </ul>
            </menu>
            <ul class="flex flex-col gap-1 max-sm:hidden">
              <li class="flex items-center gap-1 group">
                <a
                  href="mailto:Vozdooh.gmail.com"
                  class="text-black hover:text-[#660066] duration-150 flex gap-1 text-[20px] max-md:text-[18px] font-regular cursor-pointer"
                >
                  <svg
                    class="w-[30px] h-[30px] text-black hover:text-[#660066] duration-150"
                    xmlns="http://www.w3.org/2000/svg"
                    width="48"
                    height="48"
                    viewBox="0 0 48 48"
                  >
                    <path
                      fill="none"
                      stroke="#660066"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M6.47 10.71a2 2 0 0 0-2 2h0v22.61a2 2 0 0 0 2 2h35.06a2 2 0 0 0 2-2h0V12.68a2 2 0 0 0-2-2H6.47Zm33.21 3.82L24 26.07L8.32 14.53"
                    />
                  </svg>
                  Vozdooh.gmail.com
                </a>
              </li>
              <li class="flex items-center gap-1 group">
                <a
                  href="tel:+70000000000"
                  class="text-black hover:text-[#660066] duration-150 flex gap-1 text-[20px] max-md:text-[18px] font-regular cursor-pointer"
                >
                  <svg
                    class="w-[30px] h-[30px] text-black hover:text-[#660066] duration-150"
                    xmlns="http://www.w3.org/2000/svg"
                    width="48"
                    height="48"
                    viewBox="0 0 48 48"
                  >
                    <path
                      fill="none"
                      stroke="#660066"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.308 12.467a24 24 0 0 1-.881-4.384C18.27 6.602 16.977 5.5 15.488 5.5H8.58c-1.777 0-3.145 1.535-2.989 3.304c1.575 17.829 15.777 32.03 33.606 33.606c1.77.156 3.304-1.207 3.304-2.984v-6.16c0-2.248-1.102-3.536-2.583-3.693a24 24 0 0 1-4.384-.88a4.9 4.9 0 0 0-4.87 1.243l-2.957 2.957a31.27 31.27 0 0 1-12.599-12.599l2.957-2.957a4.9 4.9 0 0 0 1.244-4.87"
                    />
                  </svg>
                  +7 (937) 111-11-11
                </a>
              </li>
            </ul>
            <div class="text-[30px] min-[1280px]:hidden">
              <button id="burger-button" class="cursor-pointer lex justify-center w-full">
                  <i class='bx bx-menu'></i>
              </button>
          </div>
          </div>
        </div>
      </div>
    </header>
<?php /**PATH D:\Assets\laravelAPP\DanilinCosmetics\resources\views/livewire/partials/header.blade.php ENDPATH**/ ?>