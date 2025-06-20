<main class="py-28 px-2">
    <div class="container mx-auto">
        <div class="text-center flex flex-col items-center">
            <h2 class="font-extrabold text-[48px]"></h2>
        </div>
        <div class="w-full flex p-2 font-medium">
                    <span class="w-[80%]">Наименование</span>
                    <div class="w-[20%] flex justify-between">
                        <span>Выход, гр</span>
                        <span>Цена, руб</span>
                    </div>
                </div>
        <ul class="flex flex-col max-sm:items-center">
            <x-menu.show-menu :menus="$menus" />
        </ul>
    </div>
</main>
