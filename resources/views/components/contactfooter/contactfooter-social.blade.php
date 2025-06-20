@props(['contactfooters'])

@foreach ($contactfooters as $contactfooter)
<li class="p-2">
    <a href="{{ $contactfooter['link'] }}" target="_blank" class=" me-4 md:me-6">
        <img class="hover:scale-125 duration-200 ease-linear w-[40px] h-[40px]" src="{{ url('storage', $contactfooter['image']) }}" alt="" />
    </a>
</li>
@endforeach