@props(['product'])
<div>
    <a href="">
        <span class="text-sm text-gray-500">{{ $product->category->name }}</span>
    </a>
    <h2 class="text-blue-700">{{ $product->name }}</h2>
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