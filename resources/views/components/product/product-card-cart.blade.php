@props(['products'])

<div class="w-full h-full">

        <img src="{{ url('storage', $product['image']) }}" alt="" class="w-[230px] h-[230px] object-cover rounded-[10px]">
        <div class="flex mt-[7px] w-[230px] gap-[20px] items-center  relative">
            {{-- <div class="flex items-center relative">
                <span class="p-[7px] bg-[#FF3030] border-white border-[0.3px] rounded-full text-[15px] text-white z-10">5.0</span>
                <span class="w-[33px] h-[21px] bg-[#FF3030] rounded-[5px] text-[14px] text-white text-right pr-[5px] absolute z-0 left-[20px]">2</span>
            </div> --}}
            <div class="flex gap-[2px]">
                {{-- <a href="{{ route('page.category-product', $product->category_id) }}" class=" ">
                    <p class="text-[12px] font-Roboto font-bold text-[#4E4E4E] uppercase">{{ $product->category->name }}, </p>
                </a> --}}
                {{-- <span class="text-[12px] font-Roboto font-bold text-[#4E4E4E]">, </span> --}}
                {{-- <a href="" class="">
                    <p class="text-[12px] font-Roboto font-bold truncate text-[#4E4E4E] uppercase w-[90px]">{{ $product->brand->name }}</p>
                </a> --}}
            </div>

        </div>
        <div class="my-[10px] mt-[8px]">
            <a href="{{ route('single.products', $product['name']) }}" class="w-full h-full">
                <p class="text-[20px] uppercase font-Roboto font-bold text-black ">{{ $product['name'] }}</p>
            </a>
                    <h2 class="text-[#FF3030] text-[20px] font-bold mt-[6px]">{{ $product['price'] }}₽</h2>
        </div>

    {{-- <button wire:click="addToCart({{ $product['product_id'] }})" class="w-[230px] h-[40px] bg-[#FF3030] rounded-[10px]">
        <span wire:loading.remove class="text-[16px] font-bold font-Roboto text-white">В КОРЗИНУ</span>
        <span wire:loading class="text-[16px] font-bold font-Roboto text-white">Загрузка</span>
    </button> --}}
</div>
