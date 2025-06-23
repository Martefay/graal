<main class="py-24 px-2">
    <div id="button-uptogo" class=" uptogo backdrop-blur-sm bg-black/50 fixed flex right-2 bottom-[10%] text-[24px] hidden border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 cursor-pointer p-4">
        <i class='bx bxs-chevron-up'></i>
    </div>
    <div class="container mx-auto">
        <div class="text-center flex flex-col items-center">
            @if ($menus->isNotEmpty())
            <h2 class="font-extrabold text-[48px]">{{ $menus->first()->categorymenu->name }}</h2>
            @endif
        </div>
        <div class="w-full flex flex-col sm:flex-row p-2 font-medium bg-[#FFDBA9] text-black mt-14">
            <span class="w-full sm:w-[80%] mb-1 sm:mb-0">Наименование</span>
            <div class="w-full sm:w-[20%] flex justify-between sm:justify-between">
                <span>Выход, гр</span>
                <span>Цена, руб</span>
            </div>
        </div>
        <ul class="flex flex-col max-sm:items-center w-full">
            <x-menu.show-menu :menus="$menus" />
        </ul>
    </div>
</main>
