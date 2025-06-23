<main class="py-24 px-2">
    <div id="button-uptogo" class=" uptogo backdrop-blur-sm bg-black/50 fixed flex right-2 bottom-[10%] text-[24px] hidden border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 cursor-pointer p-4">
        <i class='bx bxs-chevron-up'></i>
    </div>
    <div class="container mx-auto">
        <div class="text-center flex flex-col items-center">
            <!--[if BLOCK]><![endif]--><?php if($menus->isNotEmpty()): ?>
            <h2 class="font-extrabold text-[48px]"><?php echo e($menus->first()->categorymenu->name); ?></h2>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <div class="w-full flex flex-col sm:flex-row p-2 font-medium bg-[#FFDBA9] text-black mt-14">
            <span class="w-full sm:w-[80%] mb-1 sm:mb-0">Наименование</span>
            <div class="w-full sm:w-[20%] flex justify-between sm:justify-between">
                <span>Выход, гр</span>
                <span>Цена, руб</span>
            </div>
        </div>
        <ul class="flex flex-col max-sm:items-center w-full">
            <?php if (isset($component)) { $__componentOriginal216ca2ac3887c4ebf0a7e922ca7c55d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal216ca2ac3887c4ebf0a7e922ca7c55d7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.show-menu','data' => ['menus' => $menus]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu.show-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menus' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menus)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal216ca2ac3887c4ebf0a7e922ca7c55d7)): ?>
<?php $attributes = $__attributesOriginal216ca2ac3887c4ebf0a7e922ca7c55d7; ?>
<?php unset($__attributesOriginal216ca2ac3887c4ebf0a7e922ca7c55d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal216ca2ac3887c4ebf0a7e922ca7c55d7)): ?>
<?php $component = $__componentOriginal216ca2ac3887c4ebf0a7e922ca7c55d7; ?>
<?php unset($__componentOriginal216ca2ac3887c4ebf0a7e922ca7c55d7); ?>
<?php endif; ?>
        </ul>
    </div>
</main>
<?php /**PATH D:\Assets\laravelAPP\graal\resources\views/livewire/single-product.blade.php ENDPATH**/ ?>