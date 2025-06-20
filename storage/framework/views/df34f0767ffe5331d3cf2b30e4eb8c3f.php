<main class="py-28 px-2">
    <div class="container mx-auto">
        <div class="text-center flex flex-col items-center">
            <h2 class="font-extrabold text-[48px]"></h2>
        </div>
        <div class="w-full flex p-2 font-medium">
                    <span class="w-[80%]">Наименование</span>
                    <div class="w-[20%] flex justify-between">
                        <span>Выход, гр</span>
                        <span>Цена, руб</span>
                    </div>
                </div>
        <ul class="flex flex-col max-sm:items-center">
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
<?php /**PATH D:\Assets\laravelAPP\Graal\resources\views/livewire/single-product.blade.php ENDPATH**/ ?>