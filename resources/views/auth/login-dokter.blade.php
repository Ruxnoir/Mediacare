<x-auth.layout title="Login Dokter — MEDCARE" current="dokter">
    <div class="flex flex-col items-center gap-8 lg:min-h-[610px] lg:flex-row lg:items-center lg:gap-0">
        {{-- Kolom informasi --}}
        <div class="w-full max-w-[300px] lg:w-[221px] lg:max-w-none lg:self-start">
            <x-auth.brand class="mx-auto lg:ml-4" />

            <h1 class="mt-[30px] text-center text-[16px] font-bold uppercase leading-[24px] tracking-[0.01em] text-medcare-dark lg:text-left">
                Login Dokter<br>MEDCARE
            </h1>

            <p class="mt-4 text-center text-[10px] font-semibold leading-[15px] text-medcare-dark lg:text-left">
                Senang Bertemu Kembali, Dokter! Lanjutkan perjalanan Anda dalam memberikan pelayanan kesehatan terbaik bersama Media Care.
            </p>

            <svg class="mt-[45px] hidden h-[120px] w-[105px] lg:block" viewBox="0 0 105 120" fill="#a9cdfb" aria-hidden="true">
                <use href="#medcare-plus" transform="translate(30 0) scale(1.5)" />
                <use href="#medcare-plus" transform="translate(0 54) scale(1.05)" />
                <use href="#medcare-plus" transform="translate(52 78) scale(1.15)" />
            </svg>
        </div>

        {{-- Ilustrasi dokter dengan laptop --}}
        <div class="hidden lg:mt-[34px] lg:block lg:w-[360px] lg:shrink-0 lg:self-start">
            <img
                src="{{ asset('images/medcare/ilustrasi-dokter.png') }}"
                alt="Ilustrasi dokter MEDCARE"
                width="360"
                height="324"
                class="w-full select-none"
                draggable="false"
            >
        </div>

        {{-- Kartu form --}}
        <div class="w-full max-w-[360px] lg:ml-auto lg:w-[360px] lg:shrink-0">
            <x-auth.form
                title="Login Dokter MEDCARE"
                email-label="Email Dokter"
            />
        </div>
    </div>
</x-auth.layout>
