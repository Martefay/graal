@props(['categories'])

@foreach ($categories as $category)

<div class="swiper-slide">
                    <a wire:navigated href="{{ route('single.product', $category->id) }}" class="card">
                        <div class="card-overlay">{{ $category['name'] }}</div>
                        <img src="{{ url('storage', $category['image']) }}" alt="{{ $category['name'] }}">
                    </a>
                </div>
@endforeach