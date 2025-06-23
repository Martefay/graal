@props(['menus'])

@foreach ($menus as $menu)

<li class="flex flex-col sm:flex-row border-t border-[#FFDBA9] p-2 w-full">
        <p class="w-full sm:w-[80%] mb-1 sm:mb-0">{{ $menu['name'] }}</p>
        <div class="flex justify-between sm:justify-between w-full sm:w-[20%]">
            <p class="text-start">{{ $menu['quantity'] }}</p>
            <p class="text-start">{{ $menu['price'] }}₽</p>
        </div>
    </li>
@endforeach
