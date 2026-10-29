{{--
    Kartu form login (putih). Ukuran & jarak mengikuti frame Figma 1440x1024.
    Catatan untuk backend: tambahkan action + @csrf pada tag <form> di bawah
    saat endpoint login sudah tersedia.
--}}
@props([
    'title',
    'subtitle' => null,
    'emailLabel' => 'Email atau Nomor Telepon',
    'showGoogle' => false,
    'showRegister' => false,
    'paddingTop' => 'pt-[41px]',
])

<div {{ $attributes->merge(['class' => 'w-full rounded-[20px] bg-white px-[30px] pb-8 ' . $paddingTop]) }}>
    <h2 class="text-[16px] font-bold leading-[1.25] text-black">{{ $title }}</h2>

    @if ($subtitle)
        <p class="mt-[10px] max-w-[250px] text-[11px] font-normal leading-[19px] text-medcare-muted">{{ $subtitle }}</p>
    @endif

    {{-- novalidate: validasi ditangani app.js supaya pesannya sesuai desain --}}
    <form class="mt-[15px]" data-auth-form novalidate>
        <div class="space-y-[14px]">
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
            class="mt-[25px] h-10 w-full rounded-[8px] bg-medcare text-[12px] font-medium text-white transition hover:bg-medcare-hover focus:outline-none focus-visible:ring-2 focus-visible:ring-medcare/40 focus-visible:ring-offset-2 active:bg-medcare-dark"
        >
            Masuk
        </button>

        <x-auth.divider class="mt-[26px]">{{ $showGoogle ? 'atau' : 'MEDCARE' }}</x-auth.divider>

        @if ($showGoogle)
            {{-- Ikon + label di-center sebagai satu kesatuan --}}
            <button
                type="button"
                class="mt-[20px] flex h-10 w-full items-center justify-center gap-[10px] rounded-[8px] border border-medcare-border bg-white text-[12px] font-normal text-[#4a4a4a] transition hover:border-[#c9c9c9] hover:bg-[#fbfbfb] focus:outline-none focus-visible:ring-2 focus-visible:ring-medcare/30"
            >
                <x-icons.google class="shrink-0" />
                <span>Masuk dengan Google</span>
            </button>
        @endif

        @if ($showRegister)
            <p class="mt-2 text-center text-[12px] font-normal leading-[15px] text-medcare-muted">
                Belum punya akun?
                <a href="#" class="ml-[2px] font-medium text-medcare transition hover:text-medcare-dark hover:underline">Daftar sekarang</a>
            </p>
        @endif
    </form>
</div>
