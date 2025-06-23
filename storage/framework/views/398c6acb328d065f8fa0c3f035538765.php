<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['places']));

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

foreach (array_filter((['places']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<!--[if BLOCK]><![endif]--><?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="p-6 flex flex-col items-center text-center hover:shadow-xl transition">
    <img src="<?php echo e(url('storage', $place['image'])); ?>" alt="<?php echo e($place['title']); ?>" class="object-cover w-[400px] h-[400px] mb-4 border border-[#FFDBA9] p-2">
    <h3 class="text-[34px] font-semibold mb-2 text-[#FFDBA9]"><?php echo e($place['title']); ?></h3>
    <p class="text-white"><?php echo e($place['description']); ?></p>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH D:\Assets\laravelAPP\graal\resources\views/components/places/places-list.blade.php ENDPATH**/ ?>