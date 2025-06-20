@props(['services'])

@foreach ($services as $service)
<li class="w-full flex max-sm:flex-col max-sm:items-center max-sm:text-center gap-6">
    <div class="max-sm:flex max-sm:justify-center">
        <img src="{{ url('storage', $service['image']) }}" class="object-cover w-[500px] max-sm:w-[500px] max-sm:h-[250px] h-[350px] z-20" alt="Услуга" />
    </div>
    <div class="flex w-full flex-col gap-4">
        <p class="ont-light w-full text-[24px] normal">
            {{ $service['description'] }}
        </p>
        <div class="flex items-end max-sm:items-center max-sm:justify-center h-full w-full justify-end">
            <button id="openModal" class="openModal max-sm:w-[250px] w-[350px] h-[65px] border border-[#660066] font-light text-[24px] shadow-[inset_0_0_0_-1px_#660066] leading-10 hover:shadow-[inset_0_-100px_0_-1px_#660066] hover:text-white transition-all duration-500">
                {{ $service['namebutton'] }}
            </button>
        </div>
    </div>
</li>
@endforeach
