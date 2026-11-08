<x-auth.layout title="Login Admin — MEDIACARE" current="admin">
    <div class="flex flex-col items-center gap-9 lg:min-h-[610px] lg:flex-row lg:items-start lg:gap-[88px]">
        {{-- Kolom informasi --}}
        <div class="w-full max-w-[300px] lg:w-[221px] lg:max-w-none">
            <x-auth.brand class="mx-auto lg:mt-[24px]" />

            <h1 class="mt-[30px] text-center text-[16px] font-bold leading-[24px] tracking-[0.01em] text-medcare-dark lg:mt-[66px] lg:text-left">
                Login Admin<br>MediaCare
            </h1>

            <p class="mt-4 text-[10px] font-semibold leading-[15px] text-medcare-dark lg:max-w-[172px]">
                Masuk untuk mengelola layanan dan data platform MediaCare
            </p>

            <svg class="mt-[70px] hidden h-[130px] w-[105px] lg:block" viewBox="0 0 105 130" fill="#a9cdfb" aria-hidden="true">
                <use href="#medcare-plus" transform="translate(30 0) scale(1.5)" />
                <use href="#medcare-plus" transform="translate(0 54) scale(1.05)" />
                <use href="#medcare-plus" transform="translate(52 82) scale(1.15)" />
            </svg>
        </div>

        {{-- Kartu form --}}
        <div class="w-full max-w-[360px] lg:w-[360px] lg:shrink-0 lg:self-center">
            <x-auth.form
                title="Login Admin MediaCare"
                subtitle="Masuk untuk mengelola layanan MediaCare"
                email-label="Email Admin"
                padding-top="pt-[104px]"
            />
        </div>
    </div>
</x-auth.layout>
