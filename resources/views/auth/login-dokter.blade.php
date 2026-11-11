<x-auth.layout title="Login Dokter — MediaCat" current="dokter" panel="dokter" decoration="staff">
    {{-- Logo --}}
    <div class="z-10 lg:absolute lg:left-[18px] lg:top-[10px]">
        <x-auth.brand class="mx-auto w-[263px] lg:mx-0" />
    </div>

    {{-- Kolom informasi --}}
    <div class="z-10 w-full max-w-[300px] text-center lg:absolute lg:left-[72px] lg:top-[201px] lg:w-[205px] lg:max-w-none lg:text-left">
        <h1 class="text-[16px] font-bold leading-[24px] text-mediacat-dark">
            Login Dokter<br>MediaCat
        </h1>

        <p class="mt-[21px] text-[14px] font-semibold leading-[21px] text-mediacat-body">
            Senang Bertemu Kembali, Dokter!
        </p>

        <p class="mt-[21px] text-[14px] font-semibold leading-[21px] text-mediacat-body">
            Lanjutkan perjalanan Anda dalam memberikan pelayanan kesehatan anabul terbaik bersama MediaCat.
        </p>
    </div>

    {{-- Ilustrasi dokter hewan --}}
    <div class="z-0 hidden lg:absolute lg:left-[273px] lg:top-[76px] lg:block lg:w-[379px]">
        <img
            src="{{ asset('images/mediacat/ilustrasi-dokter-hewan.png') }}"
            width="1254"
            height="1254"
            class="w-full select-none"
            draggable="false"
        >
    </div>

    {{-- Kartu form --}}
    <div class="z-10 w-full max-w-[360px] lg:absolute lg:left-[640px] lg:top-[86px] lg:w-[360px] lg:max-w-none">
        <x-auth.form
            title="Login Dokter MediaCat"
            email-label="Email Dokter"
            padding-bottom="pb-[113px]"
        />
    </div>
</x-auth.layout>
