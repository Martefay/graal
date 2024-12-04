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
            {{-- Фильтр по цене --}}
            <div class="">
                <div class="text-lg font-semibold uppercase text-gray-800">Цена</div>
                <label for="">
                    <input type="range" max="1000000" value="12000" step="30000" id="" value="">
                    <span>1000</span>
                </label>
            </div>
            {{-- сортировка --}}
            <div class="">
                <div class="text-lg font-semibold uppercase text-gray-800">Сортировать по</div>
                <select name="" id="">
                    <option value="latest">Сначала новые</option>
                    <option value="price">Сначала недорогие</option>
                </select>
            </div>
        </div>
    </div>
    <div class="w-full py-5">
        Товары
        <x-product.product-group :products="$products" />
    </div>
</div>
