@props(['menus'])

@foreach ($menus as $menu)

<li class="flex border-t border-[#FFDBA9] p-2">
    <p class="w-[80%]">{{ $menu['name'] }}</p>
    <div class="flex justify-between w-[20%]">
        <p class="text-start">{{ $menu['quantity'] }}</p>
        <p class="text-start">{{ $menu['price'] }}</p>
    </div>
</li>
@endforeach
