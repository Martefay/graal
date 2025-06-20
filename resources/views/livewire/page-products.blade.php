<main id="dontfixMe" class="pb-[100px] pt-[50px] bg-[#030808]">
    
        <div id="button-uptogo" class=" uptogo backdrop-blur-sm bg-black/50 fixed flex right-20 bottom-[10%] text-[24px] hidden border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 cursor-pointer p-4">
            <i class='bx bxs-chevron-up'></i>
        </div>
        <div class="container mx-auto">
            <div class="max-sm:flex flex-col items-center text-center">
            <h1 class="font-medium text-[42px]">Меню</h1>
            <p class="font-light text-[24px] mb-4 text-[#A5A8AB]">Подробная информация о услугах и ценах, вы можете записатся или приехать лично</p>
        </div>
            <ul id="dontfixMe-menu" class="flex flex-col gap-8">
            {{-- <li id="cold" class="mt-[30px]">
                <div class="w-full flex items-center pl-2 h-[50px] bg-[#FFDBA9]">
                    
                </div>
                <div class="w-full flex p-2 font-medium">
                    <span class="w-[80%]">Наименование</span>
                    <div class="flex gap-10">
                        <span>Выход, гр</span>
                        <span>Цена, руб</span>
                    </div>
                </div>
                <div class="">
                    <ul class="">
                        <li class="flex border-t border-[#FFDBA9] p-2">
                            <p class="w-[80%]">Бутерброд/тарталетки с икрой (3 шт.)</p>
                            <div class="flex gap-14">
                            <p class="text-center">30/45/30</p>
                            <p class="text-center">690</p>
                        </div>
                        </li>

                        <li class="flex border-t border-[#FFDBA9] p-2">
                            <p class="w-[80%]">Бутерброд/тарталетки с икрой (3 шт.)</p>
                            <div class="flex gap-15">
                            <p class="text-center">30/45/30</p>
                            <p class="text-center">690</p>
                        </div>
                        </li>

                        <li class="flex border-t border-[#FFDBA9] p-2">
                            <p class="w-[80%]">Бутерброд/тарталетки с икрой (3 шт.)</p>
                            <div class="flex gap-15">
                            <p class="text-center">30/45/30</p>
                            <p class="text-center">690</p>
                        </div>
                        </li>

                        <li class="flex border-t border-[#FFDBA9] p-2">
                            <p class="w-[80%]">Бутерброд/тарталетки с икрой (3 шт.)</p>
                            <div class="flex gap-15">
                            <p class="text-center">30/45/30</p>
                            <p class="text-center">690</p>
                        </div>
                        </li>

                        <li class="flex border-t border-[#FFDBA9] p-2">
                            <p class="w-[80%]">Бутерброд/тарталетки с икрой (3 шт.)</p>
                            <div class="flex gap-15">
                            <p class="text-center">30/45/30</p>
                            <p class="text-center">690</p>
                        </div>
                        </li>
                    </ul>
                </div>
            </li> --}}
            {{-- <x-categorymenu.categorymenu-list :categorymenu="$categorymenus" /> --}}
            
        <x-categorymenu.categorymenu-list :categorymenus="$categorymenus" />

       
  
            {{-- <livewire:page-products :id="$menu->id" />
                <livewire:page-products :menu-id="$id" /> --}}
        </ul>
        </div>
    </main>
