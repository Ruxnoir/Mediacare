{{-- Logo MediaCare (mark + wordmark + tagline) diekspor dari desain Figma, padding transparan sudah di-trim --}}
<img
    {{ $attributes->merge([
        'src' => asset('images/medcare/logo-medcare.png'),
        'alt' => 'MediaCare — Kesehatan Anda, Prioritas Kami',
        'width' => 2392,
        'height' => 608,
        'draggable' => 'false',
        'class' => 'w-[280px] select-none',
    ]) }}
>
