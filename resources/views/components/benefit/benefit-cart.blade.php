@props(['benefits'])

@foreach ($benefits as $benefit)
<li class="flex flex-col items-center">
        <img class="w-[50px] h-[50px]" src="{{ url('storage', $benefit['icon']) }}" alt="" />
        <p class="font-light text-[24px]">
            {{ $benefit['description'] }}
        </p>
</li>
@endforeach
