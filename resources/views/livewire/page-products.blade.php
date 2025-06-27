<main id="dontfixMe" class="pb-[100px] px-2 pt-[50px] bg-[#030808] object-cover bg-[url({{ asset('assets/image/BG.png') }})]">
    <!-- Кнопка "Наверх" -->
    <div id="button-uptogo" class="uptogo backdrop-blur-sm bg-black/50 fixed flex right-2 bottom-[10%] text-[24px] hidden border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 cursor-pointer p-4">
        <i class='bx bxs-chevron-up'></i>
    </div>
    
    <div class="container mx-auto">
        <!-- Заголовок -->
        <div class="max-sm:flex flex-col items-center text-center">
            <h1 class="font-medium text-[42px]">Меню</h1>
            <p class="font-light text-[24px] mb-4 text-[#A5A8AB]">
                К услугам блюда кавказской, грузинской, армянской, домашней, европейской, 
                русской, украинской, авторской и даже вегетарианской и японской кухни...
            </p>
        </div>
        
        <!-- Поиск и результаты -->
        <div class="p-4">
            <!-- Поле поиска -->
        
            
            <!-- Список результатов -->
            <div class="mt-6">
                    <x-categorymenu.categorymenu-list :categorymenus="$categorymenus" />
            </div>
        </div>
    </div>
</main>