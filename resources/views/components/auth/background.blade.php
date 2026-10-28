{{-- Dekorasi latar belakang: blob biru + simbol plus, mengikuti desain Figma --}}
<svg
    aria-hidden="true"
    viewBox="0 0 1440 1024"
    preserveAspectRatio="xMidYMid slice"
    class="pointer-events-none absolute inset-0 h-full w-full"
>
    <defs>
        <g id="medcare-plus">
            <rect x="0" y="11.5" width="36" height="13" rx="6.5" />
            <rect x="11.5" y="0" width="13" height="36" rx="6.5" />
        </g>
    </defs>

    <rect width="1440" height="1024" fill="#c9f0f2" />

    <g fill="#8fd4fe">
        {{-- kiri atas --}}
        <circle cx="30" cy="40" r="185" />
        <circle cx="205" cy="10" r="150" />
        <circle cx="-40" cy="290" r="175" />
        <circle cx="150" cy="175" r="135" />
        {{-- kanan atas --}}
        <circle cx="1330" cy="55" r="120" />
        <circle cx="1245" cy="-10" r="110" />
        <circle cx="1440" cy="185" r="130" />
        <circle cx="1300" cy="165" r="85" />
        {{-- kiri bawah --}}
        <circle cx="35" cy="985" r="165" />
        <circle cx="175" cy="1035" r="120" />
        <circle cx="-30" cy="820" r="110" />
        {{-- kanan bawah --}}
        <circle cx="1390" cy="1005" r="125" />
        <circle cx="1285" cy="945" r="80" />
    </g>

    <g fill="#a2ccfe">
        <use href="#medcare-plus" transform="translate(360 47) scale(1.9)" />
        <use href="#medcare-plus" transform="translate(1316 285) scale(1.25)" />
        <use href="#medcare-plus" transform="translate(305 890) scale(1.3)" />
        <use href="#medcare-plus" transform="translate(1300 862) scale(1.7)" />
        <use href="#medcare-plus" transform="translate(232 196) scale(0.85)" />
    </g>
</svg>
