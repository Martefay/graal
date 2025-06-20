<main id="dontfixMe" class="">
        <div id="button-uptogo" class="z-10 uptogo backdrop-blur-sm bg-black/50 fixed flex right-2 bottom-[10%] text-[24px] hidden border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black transition duration-250 cursor-pointer p-4">
            <i class='bx bxs-chevron-up'></i>
        </div>
        <div class="pt-[50px] px-2 bg-[url(/assets/images/BG.png)]">
        <div class="container mx-auto">
            <div class="">
          
          <div
            class="w-full text-white  left-0 top-15 text-center flex flex-col justify-center items-center max-lg:top-1"
          >
          @foreach ($herotitles as $herotitle)
            <h1 class="text-[42px] xl:font-medium ">{{ $herotitle['title'] }}</h1>
            <p class="text-[24px] font-light max-w-[900px] max-xl:text-[18px] max-lg:max-w-[600px] ">
              {{ $herotitle['description'] }}
            </p>
            @endforeach
          </div>
          </div>
          
        </div>
      </div>

        <div class="w-full pt-[150px] px-2 max-sm:pt-[50px] object-cover bg-[url(/assets/images/BG.png)]">
            <div class="container mx-auto">
                <div class="pt-[40px] flex gap-2 justify-between max-sm:flex-col max-sm:justify-center max-sm:items-center">
                    @foreach ($herosections as $herosection)
                    <img class="max-sm:flex hidden border border-[#FFDBA9] p-2 w-[500px] h-[665px] object-cover max-lg:w-[400px] max-lg:h-[500px] max-md:w-[300px] max-md:h-[500px]" src="{{ url('storage', $herosection['image']) }}" alt="">
                    <div class="flex flex-col gap-20 max-lg:gap-8 max-sm:justify-center max-sm:items-center max-sm:text-center">
                        <h1 class="font-medium text-[42px] max-md:text-[34px]">{{ $herosection['title'] }}</h1>
                        <p class="max-w-[750px] font-light text-[24px] max-lg:text-[19px]">{{ $herosection['description'] }}</p>
                        <button class="cursor-pointer text-[21px] border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black hover:border-none transition duration-250 w-[300px] h-[60px]">
                            <a href="/bron.html">Забронировать</a>
                        </button>
                    </div>
                    <img class="max-sm:hidden border border-[#FFDBA9] p-2 w-[500px] h-[665px] object-cover max-lg:w-[400px] max-lg:h-[500px] max-md:w-[300px] max-md:h-[500px]" src="{{ url('storage', $herosection['image']) }}" alt="">
                @endforeach
                </div>
            </div>
        </div>

        <div class="w-full px-2 object-cover bg-[url(/assets/images/BG.png)]">
            <div class="container mx-auto">
                <div class="py-[200px] max-sm:py-[100px] flex justify-center">
                    <div class="flex flex-col gap-8 text-center">
                        @foreach ($benefits as $benefit)
                        <h1 class="font-medium text-[42px]">{{ $benefit['title'] }}</h1>
                        <p class="font-light text-[24px] max-lg:text-[19px]">{{ $benefit['description'] }}</p>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full px-2 object-cover bg-[url(/assets/images/BG.png)]">
            <div class="container mx-auto">
                <div class="pt-[40px] flex gap-2 justify-between max-sm:flex-col max-sm:justify-center max-sm:items-center max-sm:gap-8">
                    @foreach ($abouts as $about)
                    <img class="border border-[#FFDBA9] p-2 w-[500px] h-[665px] object-cover max-lg:w-[400px] max-lg:h-[500px] max-md:w-[300px] max-md:h-[500px]" src="{{ url('storage', $about['image']) }}" alt="">
                    <div class="flex flex-col gap-20 max-lg:gap-8 max-sm:justify-center max-sm:items-center max-sm:text-center">
                        <h1 class="font-medium text-[42px] max-md:text-[34px]">{{ $about['title'] }}</h1>
                        <p class="max-w-[750px] font-light text-[24px] max-lg:text-[19px]">{{ $about['description'] }}</p>
                        <button class="cursor-pointer text-[21px] border border-[#FFDBA9] hover:bg-[#FFDBA9] hover:text-black hover:border-none transition duration-250 w-[300px] h-[60px]">
                            <a href="/bron.html">Забронировать</a>
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="contacts" class="w-full object-cover bg-[url(/assets/images/BG.png)] pt-20">
            <div class="container mx-auto">
                <div class="pb-[40px] flex flex-col">
                    <div class="flex flex-col gap-20 max-sm:items-center max-sm:pt-15">
                        <h1 class="font-medium text-[42px]">Контакты</h1>
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