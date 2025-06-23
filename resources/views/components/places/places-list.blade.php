@props(['places'])

@foreach ($places as $place)
<div class="p-6 flex flex-col items-center text-center hover:shadow-xl transition">
    <img src="{{ url('storage', $place['image']) }}" alt="{{ $place['title'] }}" class="object-cover w-[400px] h-[400px] mb-4 border border-[#FFDBA9] p-2">
    <h3 class="text-[34px] font-semibold mb-2 text-[#FFDBA9]">{{ $place['title'] }}</h3>
    <p class="text-white">{{ $place['description'] }}</p>
</div>
@endforeach
