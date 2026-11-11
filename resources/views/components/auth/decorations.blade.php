{{--
    Simbol plus biru di dalam & sekitar panel. Koordinat diambil apa adanya dari
    frame Figma (relatif ke sudut kiri atas panel 1069x674), termasuk nilai
    negatif untuk ornamen yang keluar dari panel.
--}}
@props(['variant' => 'pasien'])

@php
    // [left, top, width]
    $sets = [
        'pasien' => [
            [150, -117, 104],
            [84, 499, 104],
            [39, 552, 69],
            [144, 583, 68],
            [72, 734, 69],
            [1130, 109, 69],
            [1114, 658, 102],
        ],
        'staff' => [
            [129, -137, 104],
            [84, 446, 104],
            [39, 499, 69],
            [144, 530, 68],
            [72, 734, 69],
            [1130, 109, 69],
            [1114, 658, 102],
        ],
    ];

    $pluses = $sets[$variant] ?? $sets['pasien'];
@endphp

<div class="pointer-events-none absolute inset-0 z-0 hidden lg:block" aria-hidden="true">
    @foreach ($pluses as [$left, $top, $width])
        <img
            src="{{ asset('images/mediacat/plus.png') }}"
            alt=""
            draggable="false"
            class="absolute select-none"
            style="left: {{ $left }}px; top: {{ $top }}px; width: {{ $width }}px;"
        >
    @endforeach
</div>
