<x-auth.layout title="Login Admin — MediaCat" current="admin" panel="admin" decoration="staff">
    {{-- Logo --}}
    <div class="z-10 lg:absolute lg:left-[18px] lg:top-[10px]">
        <x-auth.brand class="mx-auto w-[263px] lg:mx-0" />
    </div>

    {{-- Kolom informasi --}}
    <div class="z-10 w-full max-w-[300px] text-center lg:absolute lg:left-[72px] lg:top-[201px] lg:w-[205px] lg:max-w-none lg:text-left">
        <h1 class="text-[16px] font-bold leading-[24px] text-mediacat-dark">
            Login Admin<br>MediaCat
        </h1>

        <p class="mt-[21px] text-[14px] font-semibold leading-[21px] text-mediacat-body">
            Masuk untuk mengelola layanan dan data platform MediaCat
        </p>
    </div>

    {{-- Kartu form --}}
    <div class="z-10 w-full max-w-[360px] lg:absolute lg:left-[380px] lg:top-[65px] lg:w-[360px] lg:max-w-none">
        <x-auth.form
            title="Login Admin MediaCat"
            email-label="Email Admin"
            padding-top="pt-[81px]"
            padding-bottom="pb-[61px]"
        />
    </div>
</x-auth.layout>
