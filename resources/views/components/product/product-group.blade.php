@props(['products'])
<ul class="grid grid-cols-2 gap-4 md:grid-cols-4">
   
        @foreach ($products as $product)
            <li class="w-full h-full">
                <x-product.product-card :products="$products" />
            </li>
        @endforeach


</ul>