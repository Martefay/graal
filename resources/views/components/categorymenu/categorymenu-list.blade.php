@props(['categorymenus'])

@foreach ($categorymenus as $categorymenu)
<li id="salat" class="w-full mt-[30px] flex flex-col items-center">
    <div class="w-full flex flex-col items-center">
        <a wire:navigated href="{{ route('single.product', $categorymenu->id) }}" class="cursor-pointer max-[800px]:w-full">
            <button class="cursor-pointer text-[21px] border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 w-[800px] h-[60px] max-[800px]:w-full text-white font-medium">
                {{ $categorymenu['name'] }}
            </button>
        </a>
    </div>
</li>
@endforeach
