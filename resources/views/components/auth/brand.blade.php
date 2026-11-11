{{-- Logo MediaCat (mark kucing + wordmark + paw), diekspor dari desain Figma --}}
<img
    {{ $attributes->merge([
        'src' => asset('images/mediacat/logo-mediacat.png'),
        'alt' => 'MediaCat',
        'width' => 612,
        'height' => 408,
        'draggable' => 'false',
        'class' => 'w-[263px] select-none',
    ]) }}
>
