<main id="dontfixMe" class="pb-[100px]">
      <div
        id="button-uptogo"
        class="z-10 uptogo backdrop-blur-sm bg-black/50 fixed flex right-20 bottom-[10%] text-[24px] hidden border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 cursor-pointer p-4"
      >
        <i class="bx bxs-chevron-up"></i>
      </div>
      <div
        class="w-full pt-[150px] object-cover bg-[url(/assets/images/BG.png)]"
      >
        <div class="container mx-auto">
          <div class="flex flex-col items-center gap-15">
            <div class="max-sm:flex flex-col items-center text-center">
            <h1 class="font-medium text-[42px]">Забронируйте столик</h1>
            <p class="font-light text-[24px] mb-4 text-[#A5A8AB]">Или позвоните нам, мы обязательно забронируем для вас столик!</p>
        </div>
            <form wire:submit.prevent="submitForm" action="/bron" method="POST">
              <?php echo csrf_field(); ?>
              <div class="flex flex-col gap-4 w-[600px] max-md:w-full text-black">
                <label for="date">Как вас зовут?</label>
                <input wire:model="name"
                  class="py-4 px-2 border border-[#FFDBA9] w-[600px] max-md:w-full"
                  type="text"
                  placeholder="ФИО"
                />
                <label for="date">Выберите дату</label>
                <input wire:model="date"
                  class="py-4 px-2 border border-[#FFDBA9] w-[600px] max-md:w-full"
                  type="date"
                  name="date"
                  id="date"
                  
                />
                <label for="time">Выберите время</label>
                <input wire:model="time"
                  class="py-4 px-2 border border-[#FFDBA9] w-[600px] max-md:w-full"
                  type="time"
                  name="time"
                  id="time"
                 
                />
                <label for="time">Номер телефона</label>
                <input wire:model="phone"
                  class="py-4 px-2 border border-[#FFDBA9] w-[600px] max-md:w-full"
                  type="tel"
                  id="phone"
                  name="phone"
                  placeholder="+7 (___) ___-__-__"
                  maxlength="18"
                />
               <label for="time">Выберите количество гостей</label>
                <select wire:model="guest" class="py-4 px-2 border w-[600px] max-md:w-full bg-white border-[#FFDBA9]" aria-placeholder="Количество гостей">
                    <option value="0">Количество гостей</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>
              
                <div class="flex justify-center">
                  <button type="submit"
                    class="cursor-pointer text-[21px] text-white border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black hover:border-none transition duration-250 w-[300px] h-[60px]"
                  >
                    Оставить заявку
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main><?php /**PATH D:\Assets\laravelAPP\Graal\resources\views/livewire/page-bron.blade.php ENDPATH**/ ?>