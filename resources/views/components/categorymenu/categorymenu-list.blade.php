@props(['categorymenus'])

@foreach ($categorymenus as $categorymenu)
<li id="salat" class="mt-[30px] w-full flex flex-col items-center">
    <div class="w-full flex flex-col items-center">

        <button class="cursor-pointer text-[21px] border border-[#FFDBA9] hover:bg-[#FFDBA9]  hover:text-black  transition duration-250 px-[300px] py-[20px] text-white font-medium">
            <a wire:navigated href="{{ route('single.product', $categorymenu->id) }}" class="px-[300px] py-[20px]">
                {{ $categorymenu['name'] }}
            </a>
        </button>

    </div>
    {{-- <div class="w-full flex p-2 font-medium">
                    <span class="w-[80%]">Наименование</span>
                    <div class="flex gap-15">
                        <span>Выход, гр</span>
                        <span>Цена, руб</span>
                    </div>
                </div>
                <div class="">
                    <ul class="">
                        <x-menu.show-menu :menus="$menus" />
                    </ul>
                </div> --}}
</li>
@endforeach
