@props(['addresses'])

@forelse($addresses as $address)

<li class="flex flex-col gap-4">
    <a href="{{ $address->link }}" target="_blank" class="text-[18px] font-light hover:text-[#FFDBA9] transition">
        {{ $address->place }}
    </a>
</li>

@empty

<span class="text-[18px] font-light text-gray-400">Нет адресов</span>

@endforelse
