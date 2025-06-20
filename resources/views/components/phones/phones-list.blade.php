@props(['phones'])

@forelse($phones as $phone)

<li class="flex flex-col gap-4">
    <a href="tel:{{ $phone->number }}" class="text-[18px] font-light hover:text-[#FFDBA9] transition">
        {{ $phone->number }}
    </a>
</li>

@empty

<span class="text-[18px] font-light text-gray-400">Нет телефонов</span>

@endforelse
