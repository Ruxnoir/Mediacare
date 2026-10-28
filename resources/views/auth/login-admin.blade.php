<x-auth.layout title="Login Admin — MEDCARE" current="admin">
    <div class="flex flex-col items-center gap-9 lg:min-h-[610px] lg:flex-row lg:items-start lg:gap-[88px]">
        {{-- Kolom informasi --}}
        <div class="w-full max-w-[260px] lg:w-[221px] lg:max-w-none">
            <x-auth.brand class="mx-auto lg:ml-4" />

            <h1 class="mt-[30px] text-center text-[16px] font-bold uppercase leading-[24px] tracking-[0.01em] text-medcare-dark lg:text-left">
                Login Admin<br>MEDCARE
            </h1>

            <p class="mt-4 text-[10px] font-semibold leading-[15px] text-medcare-dark lg:max-w-[172px]">
                Masuk untuk mengelola layanan dan data platform MEDCARE
            </p>

            <svg class="mt-[70px] hidden h-[130px] w-[105px] lg:block" viewBox="0 0 105 130" fill="#a9cdfb" aria-hidden="true">
                <use href="#medcare-plus" transform="translate(30 0) scale(1.5)" />
                <use href="#medcare-plus" transform="translate(0 54) scale(1.05)" />
                <use href="#medcare-plus" transform="translate(52 82) scale(1.15)" />
            </svg>
        </div>

        {{-- Kartu form --}}
        <div class="w-full max-w-[360px] lg:mt-[32px] lg:w-[360px] lg:shrink-0">
            <x-auth.form
                title="Login Admin MEDCARE"
                subtitle="Masuk untuk mengelola layanan MEDCARE"
                email-label="Email Admin"
                padding-top="pt-[104px]"
            />
        </div>
    </div>
</x-auth.layout>
