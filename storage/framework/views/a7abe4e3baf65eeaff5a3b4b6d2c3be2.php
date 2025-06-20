<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['products']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['products']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="flex max-sm:flex-col max-sm:items-center justify-center gap-4">
    <div class="">
        <img class="max-sm:w-[300px] max-sm:h-[500px] w-[500px] h-[600px] object-cover" src="<?php echo e(url('storage', $product['images'])); ?>" alt="model">
    </div>
    <div class="w-full">
        <div class="flex items-center gap-8 max-sm:justify-center">
            <h2 class="font-extrabold text-[38px] max-sm:text-[28px]"><?php echo e($product->name); ?></h2>
            <span class="font-medium text-[34px] max-sm:text-[24px]">От <?php echo e($product->price); ?>Р</span>
        </div>
        <div class="max-sm:flex max-sm:flex-col max-sm:items-center">
            <p class="font-regular text-[28px]">Описание</p>
            <ul>
                <li>
                    <p>- 100% хлопок</p>
                </li>
                <li>
                    <p>- Прошитые ручки</p>
                </li>
                <li>
                    <p>- Цвет на выбор</p>
                </li>
                <li>
                    <p>- Вышивка под заказ</p>
                </li>
            </ul>
            <p class="font-regular text-[28px]">Размеры</p>
            <ul>
                <li>
                    <p>- 34х40 см</p>
                </li>
                <li>
                    <p>- Ручки 70х3</p>
                </li>
            </ul>
        </div>
        <div class="pt-[70px] max-[400px]:flex max-[400px]:justify-center">
            <button id="openModal" class="openModal max-[400px]:w-[250px] w-[350px] h-[65px]  border  border-[#660066] font-light text-[24px] shadow-[inset_0_0_0_-1px_#660066] leading-10 hover:shadow-[inset_0_-100px_0_-1px_#660066] hover:text-white transition-all duration-500">
                Заказать
            </button>
        </div>
    </div>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
<!--[if BLOCK]><![endif]--><?php if(!$products->isEmpty()): ?>
<?php else: ?>
<div class="col-span-3 mt-[150px]">
    <p class="text-lg">Товары не найдены</p>
</div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH D:\Assets\laravelAPP\DanilinCosmetics\resources\views/components/product/product-card.blade.php ENDPATH**/ ?>