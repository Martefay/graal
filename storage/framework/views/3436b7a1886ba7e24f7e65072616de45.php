<main id="dontfixMe" class="min-h-screen flex flex-col items-center justify-center  object-cover bg-[url(<?php echo e(asset('assets/image/BG.png')); ?>)]">
    <div id="button-uptogo" class="z-10 uptogo backdrop-blur-sm bg-black/50 fixed flex right-2 bottom-[10%] text-[24px] hidden border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 cursor-pointer p-4">
        <i class='bx bxs-chevron-up'></i>
    </div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $herotitles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $herotitle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="w-full h-[400px] py-[100px] px-2 bg-no-repeat bg-center bg-contain bg-[url(<?php echo e($herotitle['image']); ?>)]" style="background-size: 100% auto;">
        <div class="container mx-auto">
            <div class="">
                <div class="w-full text-white left-0 top-15 text-center flex flex-col justify-center items-center max-lg:top-1 bg-black/50  backdrop-blur-xs drop-shadow-xl/50 ">
                    <h1 class="text-[42px] xl:font-medium "><?php echo e($herotitle['title']); ?></h1>
                    <p class="text-[24px] font-light max-w-[900px] max-xl:text-[18px] max-lg:max-w-[600px] ">
                        <?php echo e($herotitle['description']); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    <div class="w-full pt-[150px] pb-44 px-2 max-sm:pt-[50px]">
        <div class="container mx-auto">
            <div class="pt-[40px] flex gap-2 justify-between items-center max-sm:flex-col max-sm:justify-center max-sm:items-center">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $herosections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $herosection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img class="max-sm:flex hidden border border-[#FFDBA9] p-2 w-[500px] h-[500px] object-cover max-lg:w-[400px] max-lg:h-[500px] max-md:w-[300px] max-md:h-[500px]" src="<?php echo e(url('storage', $herosection['image'])); ?>" alt="">
                <div class="flex flex-col gap-20 max-lg:gap-8 max-sm:justify-center max-sm:items-center max-sm:text-center">
                    <h1 class="font-medium text-[42px] max-md:text-[34px]"><?php echo e($herosection['title']); ?></h1>
                    <p class="max-w-[750px] font-light text-[24px] max-lg:text-[19px]"><?php echo e($herosection['description']); ?></p>
                    <a wire:navigated href="<?php echo e(route('page.bron')); ?>" class="cursor-pointer">
                        <button class=" text-[21px] border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black hover:border-none transition duration-250 w-[300px] h-[60px] ">Забронировать</button>
                    </a>
                </div>
                <img class="max-sm:hidden border border-[#FFDBA9] p-2 w-[500px] h-[500px] object-cover max-lg:w-[400px] max-lg:h-[500px] max-md:w-[300px] max-md:h-[500px]" src="<?php echo e(url('storage', $herosection['image'])); ?>" alt="">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>

    <div class="slider-container">
        <div class="w-full flex flex-col items-center mx-2">
            <h1 class="font-medium text-[42px] max-[500px]:text-[32px] text-center">Стоит попробовать</h1>
        </div>
        <div class="swiper mySwiper mt-14">
            <div class="swiper-wrapper">
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
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="w-full px-2 pt-44">
        <div class="container mx-auto">
            <div class="pt-[40px] flex gap-2 items-center justify-between max-sm:flex-col max-sm:justify-center max-sm:items-center max-sm:gap-8">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img class="border border-[#FFDBA9] p-2 w-[500px] h-[500px] object-cover max-lg:w-[400px] max-lg:h-[500px] max-md:w-[300px] max-md:h-[500px]" src="<?php echo e(url('storage', $about['image'])); ?>" alt="">
                <div class="flex flex-col gap-20 max-lg:gap-8 max-sm:justify-center max-sm:items-center max-sm:text-center">
                    <h1 class="font-medium text-[42px] max-md:text-[34px]"><?php echo e($about['title']); ?></h1>
                    <p class="max-w-[750px] font-light text-[24px] max-lg:text-[19px]"><?php echo e($about['description']); ?></p>
                        <a class="cursor-pointer" wire:navigated href="<?php echo e(route('page.bron')); ?>">
                             <button class=" text-[21px] border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black hover:border-none transition duration-250 w-[300px] h-[60px] ">Забронировать</button>
                        </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
  <div class="container mx-auto pt-44">
    <h2 class="font-medium text-[42px] max-[500px]:text-[32px] text-center">У нас есть всё для вашего отдыха</h2>
    <div class="grid gap-8 md:grid-cols-3 mt-14">
      <?php if (isset($component)) { $__componentOriginalfd196687009b182bba57c69fb5884ec5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd196687009b182bba57c69fb5884ec5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.places.places-list','data' => ['places' => $places]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('places.places-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['places' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($places)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd196687009b182bba57c69fb5884ec5)): ?>
<?php $attributes = $__attributesOriginalfd196687009b182bba57c69fb5884ec5; ?>
<?php unset($__attributesOriginalfd196687009b182bba57c69fb5884ec5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd196687009b182bba57c69fb5884ec5)): ?>
<?php $component = $__componentOriginalfd196687009b182bba57c69fb5884ec5; ?>
<?php unset($__componentOriginalfd196687009b182bba57c69fb5884ec5); ?>
<?php endif; ?>
    </div>
  </div>


    </div>
    <div id="contacts" class="w-full pt-44">
        <div class="container mx-auto">
            <div class="pb-[40px] flex flex-col gap-14">
                <div class="flex flex-col gap-20 max-sm:items-center max-sm:pt-15">
                    <h1 class="font-medium text-[42px] max-[500px]:text-[32px]">Контакты</h1>
                </div>
                <div class="flex justify-between max-sm:flex-col max-sm:gap-4 max-sm:items-center">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $contactheaders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contactheader): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-col gap-4">
                        <p class="text-[18px] font-light text-[#A5A8AB]">График работы:</p>
                        <ul class="flex flex-col">
                            <?php if (isset($component)) { $__componentOriginal9e6b9ebcbf61774600cd5d68fadebd66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e6b9ebcbf61774600cd5d68fadebd66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.timetables.timetables-list','data' => ['contactheaders' => $contactheaders]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('timetables.timetables-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['contactheaders' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($contactheaders)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e6b9ebcbf61774600cd5d68fadebd66)): ?>
<?php $attributes = $__attributesOriginal9e6b9ebcbf61774600cd5d68fadebd66; ?>
<?php unset($__attributesOriginal9e6b9ebcbf61774600cd5d68fadebd66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e6b9ebcbf61774600cd5d68fadebd66)): ?>
<?php $component = $__componentOriginal9e6b9ebcbf61774600cd5d68fadebd66; ?>
<?php unset($__componentOriginal9e6b9ebcbf61774600cd5d68fadebd66); ?>
<?php endif; ?>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-4 max-sm:items-start">
                        <p class="text-[18px] font-light text-[#A5A8AB]">Телефоны:</p>
                        <ul class="flex flex-col max-sm:items-start">
                            <?php if (isset($component)) { $__componentOriginal0506c3b95da6d399ed9275ea38ac08c4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0506c3b95da6d399ed9275ea38ac08c4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.phones.phones-list','data' => ['contactheaders' => $contactheaders]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phones.phones-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['contactheaders' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($contactheaders)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0506c3b95da6d399ed9275ea38ac08c4)): ?>
<?php $attributes = $__attributesOriginal0506c3b95da6d399ed9275ea38ac08c4; ?>
<?php unset($__attributesOriginal0506c3b95da6d399ed9275ea38ac08c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0506c3b95da6d399ed9275ea38ac08c4)): ?>
<?php $component = $__componentOriginal0506c3b95da6d399ed9275ea38ac08c4; ?>
<?php unset($__componentOriginal0506c3b95da6d399ed9275ea38ac08c4); ?>
<?php endif; ?>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-4">
                        <p class="text-[18px] font-light text-[#A5A8AB]">Адрес:</p>
                        <ul class="flex flex-col">
                            <?php if (isset($component)) { $__componentOriginal82cce8cffcfac966b57b20ee65856447 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal82cce8cffcfac966b57b20ee65856447 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.addresses.addresses-list','data' => ['contactheaders' => $contactheaders]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('addresses.addresses-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['contactheaders' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($contactheaders)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal82cce8cffcfac966b57b20ee65856447)): ?>
<?php $attributes = $__attributesOriginal82cce8cffcfac966b57b20ee65856447; ?>
<?php unset($__attributesOriginal82cce8cffcfac966b57b20ee65856447); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal82cce8cffcfac966b57b20ee65856447)): ?>
<?php $component = $__componentOriginal82cce8cffcfac966b57b20ee65856447; ?>
<?php unset($__componentOriginal82cce8cffcfac966b57b20ee65856447); ?>
<?php endif; ?>
                        </ul>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
</main>
<?php /**PATH D:\Assets\laravelAPP\graal\resources\views/livewire/page-home.blade.php ENDPATH**/ ?>