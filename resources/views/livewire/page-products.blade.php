<div class="max-w-7xl mx-auto px-4">
    <div class="w-full py-5">
        Фильтры
        <div class="w-full">
            {{-- Фильтр категорий --}}
            <div class="">
                <div class="text-lg font-semibold uppercase text-gray-800">Категории</div>
                @foreach ($categories as $category)
                    <label wire:key="{{ $category->id }}" for="{{ $category->slug }}">
                        <input wire:model.live="selected_categories" type="checkbox" id="{{ $category->slug }}" value="{{ $category->id }}">
                        <span>{{ $category->name }}</span>
                    </label>
                @endforeach
            </div>
            {{-- Фильтр по брендам --}}
            <div class="">
                <div class="text-lg font-semibold uppercase text-gray-800">Бренды</div>
                @foreach ($brands as $brand)
                <label for="{{ $brand->slug }}">
                    <input wire:model.live="selected_brands" type="checkbox" id="{{ $brand->slug }}" value="{{ $brand->id }}">
                    <span>{{ $brand->name }}</span>
                </label>
                @endforeach
            </div>
            {{-- Фильтр по популярности --}}
            <div class="">
                <div class="text-lg font-semibold uppercase text-gray-800">Популярный товар</div>
                <label for="is_featured">
                    <input wire:model.live="featured" type="checkbox" id="is_featured" value="1">
                    <span>Да</span>
                </label>
            </div>
             {{-- Фильтр по акциям --}}
             <div class="">
                <div class="text-lg font-semibold uppercase text-gray-800">Участвует в скидке</div>
                <label for="is_sale">
                    <input wire:model.live="sale" type="checkbox" id="is_sale" value="1">
                    <span>Да</span>
                </label>
            </div>
            {{-- Фильтр по цене --}}
            <div class="">
                <div class="text-lg font-semibold uppercase text-gray-800">Цена</div>
                <label for="">
                    <input wire:model.live="price_range" type="range" max="530000" value="12000" step="30000" id="" value="0">
                    <span>{{ Number::currency($price_range, 'RUB') }}</span>
                </label>
            </div>
            {{-- сортировка --}}
            <div class="">
                <div class="text-lg font-semibold uppercase text-gray-800">Сортировать по</div>
                <select wire:model.live="sort" name="" id="">
                    <option value="latest">Сначала новые</option>
                    <option value="price">Сначала недорогие</option>
                </select>
            </div>
            <div>
                <button wire:click="resetFilters" class="px-4 py-2 bg-blue-500 text-white text-center">Сбросить фильтры</button>
            </div>
        </div>
    </div>
    <div class="w-full py-5">
        Товары
        <x-product.product-group :products="$products" />
        {{-- Вывод пагинации --}}
        {{ $products->links() }}
    </div>
</div>
