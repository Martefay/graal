<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['contactfooters']));

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

foreach (array_filter((['contactfooters']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<!--[if BLOCK]><![endif]--><?php $__currentLoopData = $contactfooters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contactfooter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="p-2">
    <a href="<?php echo e($contactfooter['link']); ?>" target="_blank" class=" me-4 md:me-6">
        <img class="hover:scale-125 duration-200 ease-linear w-[40px] h-[40px]" src="<?php echo e(url('storage', $contactfooter['image'])); ?>" alt="" />
    </a>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH D:\Assets\laravelAPP\Graal\resources\views/components/contactfooter/contactfooter-social.blade.php ENDPATH**/ ?>