{{-- Logo MEDCARE (mark + wordmark + tagline) diambil dari desain Figma --}}
<img
    {{ $attributes->merge([
        'src' => asset('images/medcare/logo-medcare.png'),
        'alt' => 'MEDCARE — Kesehatan Anda, Prioritas Kami',
        'width' => 115,
        'height' => 115,
        'draggable' => 'false',
        'class' => 'w-[115px] select-none',
    ]) }}
>
