@props(['products'])
<ul class="grid grid-cols-5 gap-4 mt-10">
    @if (!$products->isEmpty())
        @foreach ($products as $product)
            <li class="w-full h-full">
                <x-product.product-card :product="$product" />
            </li>
        @endforeach
    @else
        <div class="col-span-3">
            <p class="text-lg">Товары не найдены</p>
        </div>
    @endif
</ul>