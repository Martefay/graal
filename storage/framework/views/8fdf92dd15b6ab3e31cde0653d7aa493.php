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
<li id="salat" class="mt-[30px] w-full flex flex-col items-center">
    <div class="w-full flex flex-col items-center">

        <button class="cursor-pointer text-[21px] border border-[#FFDBA9] hover:bg-[#FFDBA9]  hover:text-black  transition duration-250 px-[300px] py-[20px] text-white font-medium">
            <a wire:navigated href="<?php echo e(route('single.product', $categorymenu->id)); ?>" class="px-[300px] py-[20px]">
                <?php echo e($categorymenu['name']); ?>

            </a>
        </button>

    </div>
    
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH D:\Assets\laravelAPP\Graal\resources\views/components/categorymenu/categorymenu-list.blade.php ENDPATH**/ ?>