<header class="text-white">
      <div id="fixMe" class="w-full bg-black drop-shadow-2xl/50 transition border-b border-[#FFDBA9] p-3">
        <div class="container mx-auto">
          <div id="between" class="flex items-center gap-[300px] my-[5px] max-xl:mx-4 max-xl:my-[15px] max-xl:justify-between max-xl:gap-1">
            <a wire:navigated href="{{ route('page.home') }}" class="flex justify-start">
              @foreach ($logos as $logo)
                <img src="{{ url('storage', $logo['image']) }}" width="50" height="50" alt="Логотип">
                @endforeach
            </a>
            <menu id="navbar" class="z-50 animate-[burger_600ms_ease-in-out] xl:flex max-xl:hidden max-xl:pb-[50px] max-xl:bg-black max-xl:gap-4 max-xl:flex-col max-xl:items-center max-xl:top-20 max-xl:left-0  max-xl:w-full max-[500px]:w-full max-xl:absolute gap-20 font-regular text-[24px] max-lg:text-[18px] max-md:text-[15px]">
                <div id="close-button" class="hidden xl:hidden text-[30px] pr-[20px] w-full justify-end">
                    <button class="navbar__close-button">
                        <i class='bx bx-x'></i>
                    </button>
                </div>
                <li>
                    <a wire:navigated href="{{ route('page.home') }}" class="{{ request()->is('/') ? 'text-[#FFDBA9]' : 'hover:text-[#FFDBA9] transition duration-150' }}">Главная</a>
                </li>
                <li>
                    <a wire:navigated href="{{ route('page.home') }}" class="{{ request()->is('/') ? 'text-[#FFDBA9]' : 'hover:text-[#FFDBA9] transition duration-150' }}">О нас</a>
                </li>
                <li>
                    <a wire:navigated href="{{ route('page.products') }}" class="{{ request()->is('/products') ? 'text-[#FFDBA9]' : 'hover:text-[#FFDBA9] transition duration-150' }}">Меню</a>
                </li>
                <li>
                    <a wire:navigated href="{{ route('page.home') }}" class="{{ request()->is('/') ? 'text-[#FFDBA9]' : 'hover:text-[#FFDBA9] transition duration-150' }}">Контакты</a>
                </li>
                <li>
                    <a wire:navigated href="{{ route('page.bron') }}" class="{{ request()->is('/bron') ? 'text-[#FFDBA9]' : 'hover:text-[#FFDBA9] transition duration-150' }}">Бронь</a>
                </li>
                <li>
                    <a wire:navigated href="{{ route('page.review') }}" class="{{ request()->is('/review') ? 'text-[#FFDBA9]' : 'hover:text-[#FFDBA9] transition duration-150' }}">Отзывы</a>
                </li>
            </menu>
            <div class="text-[30px] xl:hidden">
                <button id="burger-button" class="cursor-pointer lex justify-center">
                    <i class='bx bx-menu'></i>
                </button>
            </div>
          </div>
        </div>
      </div>
    </header>