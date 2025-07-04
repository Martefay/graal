<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['categorymenus']));

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

foreach (array_filter((['categorymenus']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categorymenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorymenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li id="salat" class="w-full mt-[30px] flex flex-col items-center">
    <div class="w-full flex flex-col items-center">
        <a wire:navigated href="<?php echo e(route('single.product', $categorymenu->id)); ?>" class="cursor-pointer max-[800px]:w-full">
            <button class="cursor-pointer text-[21px] border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 w-[800px] h-[60px] max-[800px]:w-full text-white font-medium">
                <?php echo e($categorymenu['name']); ?>

            </button>
        </a>
    </div>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH D:\Assets\laravelAPP\graal\resources\views/components/categorymenu/categorymenu-list.blade.php ENDPATH**/ ?>