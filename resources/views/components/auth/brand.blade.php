{{-- Logo MediaCare (mark + wordmark + tagline) diekspor dari desain Figma, padding transparan sudah di-trim --}}
<img
    {{ $attributes->merge([
        'src' => asset('images/medcare/logo-medcare.png'),
        'alt' => 'MediaCare — Kesehatan Anda, Prioritas Kami',
        'width' => 2226,
        'height' => 554,
        'draggable' => 'false',
        'class' => 'w-[220px] select-none',
    ]) }}
>
