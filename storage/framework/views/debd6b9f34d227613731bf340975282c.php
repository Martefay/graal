<main id="dontfixMe" class="pb-[100px] px-2 object-cover bg-[url(<?php echo e(asset('assets/image/BG.png')); ?>)]">
      <div
        id="button-uptogo"
        class="z-10 uptogo backdrop-blur-sm bg-black/50 fixed flex right-2 bottom-[10%] text-[24px] hidden border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 cursor-pointer p-4"
      >
        <i class="bx bxs-chevron-up"></i>
      </div>
      <div
        class="w-full pt-[150px] object-cover bg-[url(/assets/images/BG.png)]"
      >
        <div class="container mx-auto">
          <div class="flex flex-col items-center gap-15">
            <div class="max-sm:flex flex-col items-center text-center">
            <h1 class="font-medium text-[42px]">Бронирование</h1>
            <p class="font-light text-[24px] mb-4 text-[#A5A8AB]">Банкет, столик в кафе на вечер, кафе-бар с друзьями!</p>
        </div>
        <!--[if BLOCK]><![endif]--><?php if(!$success): ?>
            <form wire:submit.prevent="submitForm" action="/bron" method="POST">
              <?php echo csrf_field(); ?>
              <div class="flex flex-col gap-4 w-[600px] max-md:w-full text-black">
                <label for="name text-white">Как вас зовут?</label>
                <input wire:model="name"
                  class="py-4 px-2 border border-[#FFDBA9] w-[600px] max-md:w-full"
                  type="text"
                  placeholder="ФИО"
                />
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="color: #ff6b6b;"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                <label for="date text-white">Выберите дату</label>
                <input wire:model="date"
                min="<?php echo e(now()->format('Y-m-d')); ?>" 
                  class="py-4 px-2 border border-[#FFDBA9] w-[600px] max-md:w-full"
                  type="date"
                  name="date"
                  id="date"
                />
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="color: #ff6b6b;"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                <label for="time text-white">Выберите время</label>
                <input wire:model="time"
                  class="py-4 px-2 border border-[#FFDBA9] w-[600px] max-md:w-full"
                  type="time"
                  name="time"
                  id="time"
                />
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="color: #ff6b6b;"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                <label for="time text-white">Номер телефона</label>
                <input wire:model="phone"
                  class="py-4 px-2 border border-[#FFDBA9] w-[600px] max-md:w-full"
                  type="tel"
                  id="phone"
                  name="phone"
                  placeholder="+7 (___) ___-__-__"
                  maxlength="18"
                />
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="color: #ff6b6b;"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
               <label for="time text-white">Количество гостей</label>
                <input wire:model="guest" class="py-4 px-2 border w-[600px] max-md:w-full bg-white border-[#FFDBA9]" placeholder="Количество гостей" />
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['guest'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="color: #ff6b6b;"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                <div class="flex flex-col items-center justify-center gap-2">
                  <span class="text-white text-center">Данная заявка не является резервом, для подтверждения менеджер свяжется с Вами в течение часа.
(Время работы менеджера с 10:00 до 23:00)</span>
                  <button type="submit"
                    class="cursor-pointer text-[21px] text-white border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black hover:border-none transition duration-250 w-[300px] h-[60px]"
                  >
                    <!--[if BLOCK]><![endif]--><?php if(!$success): ?> Оставить заявку <?php else: ?> Отправка... <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                  </button>
                </div>
              </div>
            </form>
            <?php else: ?>
             <div class="success-message" style="background-color: #2a2a2a; padding: 40px; border-radius: 10px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3); text-align: center; max-width: 400px; border: 1px solid #FFDBA9; animation: fadeIn 0.5s ease-in-out;">
            <h2 style="color: #FFDBA9; margin-bottom: 10px; font-size: 24px;">Заявка успешно отправлена!</h2>
            <p style="color: #cccccc; margin-top: 0; font-size: 16px; line-height: 1.5;">Спасибо за вашу заявку. Наш администратор свяжется с вами в ближайшее время.</p>
            <button wire:click="$set('success', false)" style="background-color: #FFDBA9; color: #1a1a1a; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; margin-top: 20px; transition: background-color 0.3s;">
                Новая заявка
            </button>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
          </div>
        </div>
      </div>
    </main><?php /**PATH D:\Assets\laravelAPP\graal\resources\views/livewire/page-bron.blade.php ENDPATH**/ ?>