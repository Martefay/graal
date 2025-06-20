<main id="dontfixMe" class="pb-[100px] pt-[50px] bg-[#030808]">
    
        <div id="button-uptogo" class=" uptogo backdrop-blur-sm bg-black/50 fixed flex right-20 bottom-[10%] text-[24px] hidden border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 cursor-pointer p-4">
            <i class='bx bxs-chevron-up'></i>
        </div>
        <div class="container mx-auto">
            <div class="max-sm:flex flex-col items-center text-center">
            <h1 class="font-medium text-[42px]">Меню</h1>
            <p class="font-light text-[24px] mb-4 text-[#A5A8AB]">Подробная информация о услугах и ценах, вы можете записатся или приехать лично</p>
        </div>
            <ul id="dontfixMe-menu" class="flex flex-col gap-8">
            
            
            
        <?php if (isset($component)) { $__componentOriginaleed3655cf57e4fc1271a506efccef86e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleed3655cf57e4fc1271a506efccef86e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.categorymenu.categorymenu-list','data' => ['categorymenus' => $categorymenus]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('categorymenu.categorymenu-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categorymenus' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categorymenus)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleed3655cf57e4fc1271a506efccef86e)): ?>
<?php $attributes = $__attributesOriginaleed3655cf57e4fc1271a506efccef86e; ?>
<?php unset($__attributesOriginaleed3655cf57e4fc1271a506efccef86e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleed3655cf57e4fc1271a506efccef86e)): ?>
<?php $component = $__componentOriginaleed3655cf57e4fc1271a506efccef86e; ?>
<?php unset($__componentOriginaleed3655cf57e4fc1271a506efccef86e); ?>
<?php endif; ?>

       
  
            
        </ul>
        </div>
    </main>
<?php /**PATH D:\Assets\laravelAPP\Graal\resources\views/livewire/page-products.blade.php ENDPATH**/ ?>