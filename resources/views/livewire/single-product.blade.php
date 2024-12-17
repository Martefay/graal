@push('meta')
<meta name="description" content="{{ $description }}">
@endpush
<div>
   <h2 class="text-red-500 text-5xl">{{ $product->name }}</h2>
   <div class="grid grid-cols-3 gap-5">
        @foreach ($product->images as $image)
            <img src="{{ url('storage', $image) }}" alt="">
        @endforeach
   </div>
</div>
