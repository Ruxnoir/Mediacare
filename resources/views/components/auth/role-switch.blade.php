{{--
    Navigasi kecil untuk berpindah antar layar login (pasien / admin / dokter).
    Ini bukan bagian dari desain Figma — hapus komponen ini kalau tidak diperlukan.
--}}
@props(['current' => 'pasien'])

@php
    $roles = [
        'pasien' => ['label' => 'Pasien', 'route' => 'login'],
        'admin' => ['label' => 'Admin', 'route' => 'login.admin'],
        'dokter' => ['label' => 'Dokter', 'route' => 'login.dokter'],
    ];
@endphp

<nav class="relative z-10 flex items-center gap-1 rounded-full bg-white/50 px-2 py-1 text-[12px] font-medium text-medcare-dark backdrop-blur-sm">
    @foreach ($roles as $key => $role)
        <a
            href="{{ route($role['route']) }}"
            @class([
                'rounded-full px-3 py-1 transition',
                'bg-white text-medcare-dark shadow-sm' => $current === $key,
                'hover:bg-white/60' => $current !== $key,
            ])
        >{{ $role['label'] }}</a>
    @endforeach
</nav>
