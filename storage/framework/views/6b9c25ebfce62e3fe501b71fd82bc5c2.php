<footer class="bg-white mt-40 px-2 w-full">
    <div class="container mx-auto">
        <div class="flex flex-col gap-8 items-center justify-center">
            <div class="container mx-auto flex justify-center">
          <div style="position: relative; overflow: hidden">
            <a
              href="https://yandex.ru/maps/38/volgograd/?utm_medium=mapframe&utm_source=maps"
              style="color: #eee; font-size: 12px; position: absolute; top: 0px"
              >Волгоград</a
            ><a
              href="https://yandex.ru/maps/38/volgograd/house/yeletskaya_ulitsa_16/YE0Ycg9jTEEHQFpifXtxc3pgZg==/?ll=44.485675%2C48.703122&utm_medium=mapframe&utm_source=maps&z=17"
              style="
                color: #eee;
                font-size: 12px;
                position: absolute;
                top: 14px;
              "
              >Елецкая улица, 16 на карте Волгограда — Яндекс Карты</a
            ><iframe
            class="max-md:w-[100%]"
              src="https://yandex.ru/map-widget/v1/?ll=44.485675%2C48.703122&mode=whatshere&whatshere%5Bpoint%5D=44.483540%2C48.702632&whatshere%5Bzoom%5D=17&z=17"
              width="1000"
              height="550"
              frameborder="1"
              allowfullscreen="true"
              style="position: relative"
            ></iframe>
          </div>
          </div>
            <div class="flex flex-col gap-4 items-center">
                <a wire:navigated href="<?php echo e(route('page.home')); ?>" class="">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img class="w-[300px] h-[55px] object-cover" src="<?php echo e(url('storage', $logo['image'])); ?>" alt="logo">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <?php if (isset($component)) { $__componentOriginal3bfed253b09e3d6d8f428007d5c52be0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bfed253b09e3d6d8f428007d5c52be0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contactfooter.contactfooter-social','data' => ['contactfooters' => $contactfooters]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contactfooter.contactfooter-social'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['contactfooters' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($contactfooters)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3bfed253b09e3d6d8f428007d5c52be0)): ?>
<?php $attributes = $__attributesOriginal3bfed253b09e3d6d8f428007d5c52be0; ?>
<?php unset($__attributesOriginal3bfed253b09e3d6d8f428007d5c52be0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bfed253b09e3d6d8f428007d5c52be0)): ?>
<?php $component = $__componentOriginal3bfed253b09e3d6d8f428007d5c52be0; ?>
<?php unset($__componentOriginal3bfed253b09e3d6d8f428007d5c52be0); ?>
<?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="flex justify-center">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $copyrights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $copyright): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="font-extrabold text-[14px]">©<?php echo e($copyright['text']); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</footer>
<?php /**PATH D:\Assets\laravelAPP\DanilinCosmetics\resources\views/livewire/partials/footer.blade.php ENDPATH**/ ?>