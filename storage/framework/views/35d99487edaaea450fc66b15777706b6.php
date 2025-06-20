<main class="pt-28 px-2">
    <div class="container mx-auto">
        <div class="text-center flex flex-col items-center">
            <h2 class="font-extrabold text-[48px]">Сумки-шопперы</h2>
            <p class="font-light text-[24px] max-w-[1000px]">
                Шоппер - это универсальная сумка прямоугольной или трапециевидной формы с ручками для ношения на плече, изначально предназначенная для походов по магазинам.
            </p>
        </div>
        <ul class="flex flex-col max-sm:items-center gap-[30px] mt-[150px]">
            <?php if (isset($component)) { $__componentOriginal88ed03d9cd0f113cf9bd7be5187a5a33 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88ed03d9cd0f113cf9bd7be5187a5a33 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product.product-card','data' => ['products' => $products]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product.product-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['products' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($products)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal88ed03d9cd0f113cf9bd7be5187a5a33)): ?>
<?php $attributes = $__attributesOriginal88ed03d9cd0f113cf9bd7be5187a5a33; ?>
<?php unset($__attributesOriginal88ed03d9cd0f113cf9bd7be5187a5a33); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88ed03d9cd0f113cf9bd7be5187a5a33)): ?>
<?php $component = $__componentOriginal88ed03d9cd0f113cf9bd7be5187a5a33; ?>
<?php unset($__componentOriginal88ed03d9cd0f113cf9bd7be5187a5a33); ?>
<?php endif; ?>
        </ul>
    </div>
</main>
<?php /**PATH D:\Assets\laravelAPP\DanilinCosmetics\resources\views/livewire/single-product.blade.php ENDPATH**/ ?>