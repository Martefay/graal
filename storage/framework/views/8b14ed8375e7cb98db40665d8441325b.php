<main class="mt-[150px] px-2">
  <div id="button-uptogo" class="z-40 uptogo backdrop-blur-sm bg-[#660066]/50 fixed flex right-2 bottom-[10%] text-[24px] hidden border border-[#660066] hover:bg-[#660066] hover:text-black transition duration-250 cursor-pointer p-4">
            <i class='bx bxs-chevron-up' style="color: #eee;"></i>
        </div>
    <div class="container mx-auto">
        
        <div class="flex max-md:flex-col max-md:items-center justify-center gap-10">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $herosections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $herosection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <img class="hidden max-md:flex object-cover w-full h-[300px] " src="<?php echo e(url('storage', $herosection['image'])); ?>"   alt="first-section" />
          <div>
            <div class="max-md:text-center">
              <h2 class="font-extrabold text-[48px]"><?php echo e($herosection['title']); ?></h2>
              <p class="font-light text-[24px] max-w-[570px]">
                <?php echo e($herosection['description']); ?>

              </p>
            </div>
            <div class="pt-[70px] max-md:flex max-md:justify-center">
              <button id="openModal"
                class="openModal max-sm:w-[250px] w-[350px] h-[65px] border border-[#660066] font-light text-[24px] shadow-[inset_0_0_0_-1px_#660066] leading-10 hover:shadow-[inset_0_-100px_0_-1px_#660066] hover:text-white transition-all duration-500"
              >
                <?php echo e($herosection['namebutton']); ?>

              </button>
            </div>
          </div>
            <img class="max-md:hidden object-cover w-[500px] max-lg:w-[300px] " src="<?php echo e(url('storage', $herosection['image'])); ?>"   alt="first-section" />
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        
        <div class="my-[100px]">
            <ul class="grid grid-cols-4 max-xl:grid-cols-2 max-sm:grid-cols-1 max-xl:place-items-center max-xl:gap-[1em] gap-8">
                <?php if (isset($component)) { $__componentOriginalb42cdf871a97f93a8767e4976cc978d0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb42cdf871a97f93a8767e4976cc978d0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.benefit.benefit-cart','data' => ['benefits' => $benefits]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('benefit.benefit-cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['benefits' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($benefits)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb42cdf871a97f93a8767e4976cc978d0)): ?>
<?php $attributes = $__attributesOriginalb42cdf871a97f93a8767e4976cc978d0; ?>
<?php unset($__attributesOriginalb42cdf871a97f93a8767e4976cc978d0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb42cdf871a97f93a8767e4976cc978d0)): ?>
<?php $component = $__componentOriginalb42cdf871a97f93a8767e4976cc978d0; ?>
<?php unset($__componentOriginalb42cdf871a97f93a8767e4976cc978d0); ?>
<?php endif; ?>
            </ul>
        </div>
        
        <div class="flex flex-col gap-6">
            <h2 class="font-extrabold text-[48px] max-sm:text-center">Виды продукции</h2>
            <div class="slider-container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php if (isset($component)) { $__componentOriginal1026625033f2b3698cc82f9838e8479d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1026625033f2b3698cc82f9838e8479d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category.category-cart','data' => ['categories' => $categories]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category.category-cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1026625033f2b3698cc82f9838e8479d)): ?>
<?php $attributes = $__attributesOriginal1026625033f2b3698cc82f9838e8479d; ?>
<?php unset($__attributesOriginal1026625033f2b3698cc82f9838e8479d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1026625033f2b3698cc82f9838e8479d)): ?>
<?php $component = $__componentOriginal1026625033f2b3698cc82f9838e8479d; ?>
<?php unset($__componentOriginal1026625033f2b3698cc82f9838e8479d); ?>
<?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
            <div class="flex justify-center">
                <button class="max-sm:w-[250px] w-[350px] h-[65px] border border-[#660066] font-light text-[24px] shadow-[inset_0_0_0_-1px_#660066] leading-10 hover:shadow-[inset_0_-100px_0_-1px_#660066] hover:text-white transition-all duration-500">
                    <a wire:navigated href="<?php echo e(route('page.products')); ?>">
                        Посмотреть все
                    </a>
                </button>
            </div>
        </div>
        
        <div class="flex flex-col gap-6">
            <h2 class="font-extrabold text-[48px] w-full max-sm:text-center">Услуги</h2>
            <ul class="flex flex-col gap-10  ">
                <?php if (isset($component)) { $__componentOriginal4539781c92afd5655f2a44b97849bd21 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4539781c92afd5655f2a44b97849bd21 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.service.service-cart','data' => ['services' => $services]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('service.service-cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['services' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($services)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4539781c92afd5655f2a44b97849bd21)): ?>
<?php $attributes = $__attributesOriginal4539781c92afd5655f2a44b97849bd21; ?>
<?php unset($__attributesOriginal4539781c92afd5655f2a44b97849bd21); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4539781c92afd5655f2a44b97849bd21)): ?>
<?php $component = $__componentOriginal4539781c92afd5655f2a44b97849bd21; ?>
<?php unset($__componentOriginal4539781c92afd5655f2a44b97849bd21); ?>
<?php endif; ?>
            </ul>
        </div>
    </div>
</main>
<?php /**PATH D:\Assets\laravelAPP\DanilinCosmetics\resources\views/livewire/page-home.blade.php ENDPATH**/ ?>