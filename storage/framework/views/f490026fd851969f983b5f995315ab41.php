<main class="pt-28">
    <div class="container mx-auto">
        <div class="max-lg:text-center">
            <h2 class="font-extrabold text-[48px]">Виды продукции</h2>
        </div>
        <ul class="grid grid-cols-4 gap-6 max-xl:grid-cols-3 max-lg:grid-cols-2 max-sm:grid-cols-1 max-xl:place-items-center mt-[50px]">
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
            
        </ul>
        <div class="flex flex-col items-center mt-[50px]">
            <?php echo e($categories->links()); ?>

        </div>
    </div>
</main>
<?php /**PATH D:\Assets\laravelAPP\DanilinCosmetics\resources\views/livewire/page-products.blade.php ENDPATH**/ ?>