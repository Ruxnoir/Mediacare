{{-- Satu baris fitur pada panel kiri halaman login pasien --}}
@props(['icon', 'title', 'text'])

<li class="flex items-center gap-[18px]">
    <img
        src="{{ asset('images/medcare/' . $icon) }}"
        alt=""
        width="42"
        height="42"
        class="size-[42px] shrink-0 select-none"
        draggable="false"
    >

    <div class="min-w-0">
        <p class="text-[11px] font-semibold leading-[14px] text-medcare-dark">{{ $title }}</p>
        <p class="mt-[3px] text-[9px] font-medium leading-[12px] text-medcare-dark">{{ $text }}</p>
    </div>
</li>
