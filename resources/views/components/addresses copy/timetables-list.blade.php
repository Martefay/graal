@props(['timetables'])

@forelse($timetables as $timetable)

<li class="flex flex-col gap-4">
    <span class="text-[18px] font-light">
        {{ $timetable->schedule }}
    </span>
</li>

@empty

<span class="text-[18px] font-light text-gray-400">Нет расписания</span>

@endforelse
