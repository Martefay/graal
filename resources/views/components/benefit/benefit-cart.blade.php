@props(['benefits'])

@foreach ($benefits as $benefit)
<div class="swiper-slide">
    <div class="card w-[400px] h-[400px] flex flex-col">
        <img class="shadow-inner w-[400px] h-[350px] object-cover border border-[#FFDBA9] p-2" src="{{ url('storage', $benefit['image']) }}" alt="gfhfg">
        <div class="text-white bottom-0 text-center left-[20%] right-[20%]">{{ $benefit['title'] }}</div>
    </div>
</div>
@endforeach
