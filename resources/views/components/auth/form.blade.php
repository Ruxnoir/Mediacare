{{--
    Kartu form login (putih). Padding atas/bawah mengikuti frame Figma MediaCat
    1440x1024: kartu pasien & dokter setinggi 522px, kartu admin 517px.
    Catatan untuk backend: tambahkan action + @csrf pada tag <form> di bawah
    saat endpoint login sudah tersedia.
--}}
@props([
    'title',
    'subtitle' => null,
    'emailLabel' => 'Email atau Nomor Telepon',
    'dividerLabel' => 'MediaCat',
    'showGoogle' => false,
    'showRegister' => false,
    'paddingTop' => 'pt-[34px]',
    'paddingBottom' => 'pb-[34px]',
])

<div {{ $attributes->merge(['class' => 'w-full rounded-[25px] bg-white px-[30px] ' . $paddingTop . ' ' . $paddingBottom]) }}>
    <h2 class="text-[16px] font-bold leading-[22px] text-black">{{ $title }}</h2>

    {{-- Blok subjudul: tingginya dijaga walau tanpa subjudul agar posisi field tetap sama --}}
    <div class="mt-[13px] min-h-[38px]">
        @if ($subtitle)
            <p class="text-[11px] font-normal leading-[19px] text-mediacat-muted">{{ $subtitle }}</p>
        @endif
    </div>

    {{-- novalidate: validasi ditangani app.js supaya pesannya sesuai desain --}}
    <form class="mt-[14px]" data-auth-form novalidate>
        <div class="space-y-[10px]">
            <x-auth.field
                :label="$emailLabel"
                name="email"
                type="email"
                placeholder="Masukkan email atau nomor telepon"
                icon="mail"
                autocomplete="username"
                :required="true"
            />

            <x-auth.field
                label="Password"
                name="password"
                type="password"
                placeholder="Masukkan password"
                icon="lock"
                autocomplete="current-password"
                :required="true"
            />
        </div>

        <x-auth.checkbox class="mt-[22px]" />

        <button
            type="submit"
            class="mt-[23px] h-[42px] w-full rounded-[10px] bg-mediacat text-[12px] font-medium text-white transition hover:bg-mediacat-hover focus:outline-none focus-visible:ring-2 focus-visible:ring-mediacat/40 focus-visible:ring-offset-2 active:bg-mediacat-hover"
        >
            Masuk
        </button>

        <x-auth.divider class="mt-[21px]">{{ $dividerLabel }}</x-auth.divider>

        @if ($showGoogle)
            {{-- Ikon + label di-center sebagai satu kesatuan --}}
            <button
                type="button"
                class="mt-[16px] flex h-[41px] w-full items-center justify-center gap-[5px] rounded-[10px] border border-mediacat-border bg-white text-[12px] font-normal text-mediacat-label transition hover:border-[#d6d4d4] hover:bg-[#fbfbfb] focus:outline-none focus-visible:ring-2 focus-visible:ring-mediacat/30"
            >
                <x-icons.google class="size-[24px] shrink-0" />
                <span>Masuk dengan Google</span>
            </button>
        @endif

        @if ($showRegister)
            <p class="mt-[7px] text-center text-[12px] font-normal leading-[15px] text-mediacat-faint">
                Belum punya akun
                <a href="#" class="ml-[4px] font-medium text-mediacat transition hover:text-mediacat-hover hover:underline">Daftar sekarang</a>
            </p>
        @endif
    </form>
</div>
