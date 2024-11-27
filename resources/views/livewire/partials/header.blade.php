<header class="w-full bg-white border-b border-gray-100 py-4">
    <div class="max-w-7xl mx-auto px-4">
       <div class="w-full flex items-center justify-between">
        <a>
            <span class="font-bold text-blue-500 text-xl">SportBebra</span>
        </a>
        <nav class="ml-auto">
            <ul class="flex items-center gap-8">
                <li class="inline-flex">
                    <a wire:navigate href="{{ route('page.home') }}" class="{{ request()->is('/') ? 'text-blue-500' : 'text-gray-500' }} font-semibold">Главная</a>
                </li>
                <li class="inline-flex">
                    <a wire:navigate href="{{ route('page.products') }}" class="{{ request()->is('products') ? 'text-blue-500' : 'text-gray-500' }} font-semibold">Каталог</a>
                </li>
                <li class="inline-flex">
                    <a wire:navigate href="{{ route('page.contacts') }}" class="{{ request()->is('contacts') ? 'text-blue-500' : 'text-gray-500' }} font-semibold">Контакты</a>
                </li>
            </ul>
        </nav>
        <ul class="ml-6 flex items-center gap-6">
            <li class="inline-flex">
                <a href="" class="font-semibold">Корзина</a>
            </li>
            <li class="inline-flex">
                <a href="" class="px-4 py-2 rounded-md bg-blue-600 font-semibold text-white">Войти</a>
            </li>
        </ul>
       </div>
    </div>
</header>