{{-- Satu baris fitur pada panel kiri halaman login --}}
@props(['icon', 'title', 'text'])

@php
    // Versi dari waktu file agar browser tidak memakai cache ikon lama.
    $iconPath = 'images/mediacat/' . $icon;
@endphp

<li class="flex items-center gap-[13px]">
    {{-- Aset ekspor Figma @2x (102x102, 102x112, 102x114), ditampilkan 51px sesuai frame --}}
    <img
        src="{{ asset($iconPath) }}?v={{ filemtime(public_path($iconPath)) }}"
        alt=""
        class="h-auto w-[51px] shrink-0 select-none"
        draggable="false"
    >

    <div class="min-w-0">
        {{-- Judul dibiarkan satu baris (seperti desain) walau melewati lebar kolom --}}
        <p class="text-[11px] font-bold leading-[15px] text-mediacat-dark lg:whitespace-nowrap">{{ $title }}</p>
        <p class="text-[10px] font-medium leading-[15px] text-mediacat-desc lg:w-[190px]">{{ $text }}</p>
    </div>
</li>
