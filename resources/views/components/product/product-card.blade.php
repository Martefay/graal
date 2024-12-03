@props(['product'])
<div>
    <img class="w-full h-[230px] object-cover" src="{{ url('storage', $product->images[0]) }}" alt="">
    <a href="{{ route('page.category-product', $product->category_id) }}">
        <span class="text-sm text-gray-500">{{ $product->category->name }}</span>
    </a>
    <a href="{{ route('single.product', $product->slug) }}">
        <h2 class="text-blue-700">{{ $product->name }}</h2>
    </a>
    @if($product->is_stock === 1)
        @if($product->is_sale === 1)
        {{-- доделать формулу --}}
        скидка
        @else
        <span class="text-sm">{{ $product->price }} руб</span>
        @endif
    @else
        <span class="text-sm">Товар закончился</span>
    @endif
    <button class="bg-blue-700 px-4 py-2 rouned-md text-white font-medium">Добавить в корзину</button>
</div>