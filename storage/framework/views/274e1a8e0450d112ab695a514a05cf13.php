<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['services']));

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

foreach (array_filter((['services']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<!--[if BLOCK]><![endif]--><?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="w-full flex max-sm:flex-col max-sm:items-center max-sm:text-center gap-6">
    <div class="max-sm:flex max-sm:justify-center">
        <img src="<?php echo e(url('storage', $service['image'])); ?>" class="object-cover w-[500px] max-sm:w-[500px] max-sm:h-[250px] h-[350px] z-20" alt="Услуга" />
    </div>
    <div class="flex w-full flex-col gap-4">
        <p class="ont-light w-full text-[24px] normal">
            <?php echo e($service['description']); ?>

        </p>
        <div class="flex items-end max-sm:items-center max-sm:justify-center h-full w-full justify-end">
            <button id="openModal" class="openModal max-sm:w-[250px] w-[350px] h-[65px] border border-[#660066] font-light text-[24px] shadow-[inset_0_0_0_-1px_#660066] leading-10 hover:shadow-[inset_0_-100px_0_-1px_#660066] hover:text-white transition-all duration-500">
                <?php echo e($service['namebutton']); ?>

            </button>
        </div>
    </div>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH D:\Assets\laravelAPP\Graal\resources\views/components/service/service-cart.blade.php ENDPATH**/ ?>