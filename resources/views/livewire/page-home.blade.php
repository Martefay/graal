<main id="dontfixMe" class="min-h-screen flex flex-col items-center justify-center  object-cover bg-[url({{ asset('assets/image/BG.png') }})]">
    <div id="button-uptogo" class="z-10 uptogo backdrop-blur-sm bg-black/50 fixed flex right-2 bottom-[10%] text-[24px] hidden border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 cursor-pointer p-4">
        <i class='bx bxs-chevron-up'></i>
    </div>
    @foreach ($herotitles as $herotitle)
    <div class="w-full h-[400px] py-[100px] px-2 bg-no-repeat bg-center bg-contain bg-[url({{ $herotitle['image'] }})]" style="background-size: 100% auto;">
        <div class="container mx-auto">
            <div class="">
                <div class="w-full text-white left-0 top-15 text-center flex flex-col justify-center items-center max-lg:top-1 bg-black/50  backdrop-blur-xs drop-shadow-xl/50 ">
                    <h1 class="text-[42px] xl:font-medium ">{{ $herotitle['title'] }}</h1>
                    <p class="text-[24px] font-light max-w-[900px] max-xl:text-[18px] max-lg:max-w-[600px] ">
                        {{ $herotitle['description'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="w-full pt-[150px] pb-44 px-2 max-sm:pt-[50px]">
        <div class="container mx-auto">
            <div class="pt-[40px] flex gap-2 justify-between items-center max-sm:flex-col max-sm:justify-center max-sm:items-center">
                @foreach ($herosections as $herosection)
                <img class="max-sm:flex hidden border border-[#FFDBA9] p-2 w-[500px] h-[500px] object-cover max-lg:w-[400px] max-lg:h-[500px] max-md:w-[300px] max-md:h-[500px]" src="{{ url('storage', $herosection['image']) }}" alt="">
                <div class="flex flex-col gap-20 max-lg:gap-8 max-sm:justify-center max-sm:items-center max-sm:text-center">
                    <h1 class="font-medium text-[42px] max-md:text-[34px]">{{ $herosection['title'] }}</h1>
                    <p class="max-w-[750px] font-light text-[24px] max-lg:text-[19px]">{{ $herosection['description'] }}</p>
                    <a wire:navigated href="{{ route('page.bron') }}" class="cursor-pointer">
                        <button class=" text-[21px] border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black hover:border-none transition duration-250 w-[300px] h-[60px] ">Забронировать</button>
                    </a>
                </div>
                <img class="max-sm:hidden border border-[#FFDBA9] p-2 w-[500px] h-[500px] object-cover max-lg:w-[400px] max-lg:h-[500px] max-md:w-[300px] max-md:h-[500px]" src="{{ url('storage', $herosection['image']) }}" alt="">
                @endforeach
            </div>
        </div>
    </div>

    <div class="slider-container">
        <div class="w-full flex flex-col items-center mx-2">
            <h1 class="font-medium text-[42px] max-[500px]:text-[32px] text-center">Стоит попробовать</h1>
        </div>
        <div class="swiper mySwiper mt-14">
            <div class="swiper-wrapper">
                <x-benefit.benefit-cart :benefits="$benefits" />
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="w-full px-2 pt-44">
        <div class="container mx-auto">
            <div class="pt-[40px] flex gap-2 items-center justify-between max-sm:flex-col max-sm:justify-center max-sm:items-center max-sm:gap-8">
                @foreach ($abouts as $about)
                <img class="border border-[#FFDBA9] p-2 w-[500px] h-[500px] object-cover max-lg:w-[400px] max-lg:h-[500px] max-md:w-[300px] max-md:h-[500px]" src="{{ url('storage', $about['image']) }}" alt="">
                <div class="flex flex-col gap-20 max-lg:gap-8 max-sm:justify-center max-sm:items-center max-sm:text-center">
                    <h1 class="font-medium text-[42px] max-md:text-[34px]">{{ $about['title'] }}</h1>
                    <p class="max-w-[750px] font-light text-[24px] max-lg:text-[19px]">{{ $about['description'] }}</p>
                        <a class="cursor-pointer" wire:navigated href="{{ route('page.bron') }}">
                             <button class=" text-[21px] border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black hover:border-none transition duration-250 w-[300px] h-[60px] ">Забронировать</button>
                        </a>
                </div>
                @endforeach
            </div>
        </div>
  <div class="container mx-auto pt-44">
    <h2 class="font-medium text-[42px] max-[500px]:text-[32px] text-center">У нас есть всё для вашего отдыха</h2>
    <div class="grid gap-8 md:grid-cols-3 mt-14">
      <x-places.places-list :places="$places" />
    </div>
  </div>


    </div>
    <div id="contacts" class="w-full pt-44">
        <div class="container mx-auto">
            <div class="pb-[40px] flex flex-col gap-14">
                <div class="flex flex-col gap-20 max-sm:items-center max-sm:pt-15">
                    <h1 class="font-medium text-[42px] max-[500px]:text-[32px]">Контакты</h1>
                </div>
                <div class="flex justify-between max-sm:flex-col max-sm:gap-4 max-sm:items-center">
                    @foreach ($contactheaders as $contactheader)
                    <div class="flex flex-col gap-4">
                        <p class="text-[18px] font-light text-[#A5A8AB]">График работы:</p>
                        <ul class="flex flex-col">
                            <x-timetables.timetables-list :contactheaders="$contactheaders" />
                        </ul>
                    </div>
                    <div class="flex flex-col gap-4 max-sm:items-start">
                        <p class="text-[18px] font-light text-[#A5A8AB]">Телефоны:</p>
                        <ul class="flex flex-col max-sm:items-start">
                            <x-phones.phones-list :contactheaders="$contactheaders" />
                        </ul>
                    </div>
                    <div class="flex flex-col gap-4">
                        <p class="text-[18px] font-light text-[#A5A8AB]">Адрес:</p>
                        <ul class="flex flex-col">
                            <x-addresses.addresses-list :contactheaders="$contactheaders" />
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
