<x-auth.layout title="Masuk — MEDIACARE" current="pasien">
    <div class="flex flex-col items-center gap-8 lg:min-h-[610px] lg:flex-row lg:items-center lg:gap-0">
        {{-- Kolom informasi --}}
        <div class="w-full max-w-[300px] lg:w-[221px] lg:max-w-none lg:self-start">
            <x-auth.brand class="mx-auto lg:mt-[24px]" />

            <h1 class="mt-[30px] text-center text-[16px] font-bold leading-[24px] tracking-[0.01em] text-medcare-dark lg:mt-[66px] lg:text-left">
                SELAMAT DATANG<br>di MediaCare
            </h1>

            <p class="mt-4 text-center text-[10px] font-semibold leading-[15px] text-medcare-dark lg:max-w-[200px] lg:text-left">
                Konsultasi dengan dokter, buat janji, dan akses informasi seputar MediaCare dalam satu platform.
            </p>

            <ul class="mt-10 hidden space-y-[18px] lg:block">
                <x-auth.feature icon="icon-konsultasi.png" title="Konsultasi Dokter" text="Dengan dokter spesialis terbaik" />
                <x-auth.feature icon="icon-booking.png" title="Booking mudah" text="Pilih jadwal sesuai kebutuhan" />
                <x-auth.feature icon="icon-informasi.png" title="Informasi Kesehatan" text="Artikel terpercaya & terbaru" />
            </ul>
        </div>

        {{-- Ilustrasi dokter --}}
        <div class="hidden lg:mt-[34px] lg:block lg:w-[360px] lg:shrink-0 lg:self-start">
            <img
                src="{{ asset('images/medcare/ilustrasi-pasien.png') }}"
                alt="Ilustrasi dokter MediaCare"
                width="360"
                height="324"
                class="w-full select-none"
                draggable="false"
            >
        </div>

        {{-- Kartu form --}}
        <div class="w-full max-w-[360px] lg:ml-auto lg:w-[360px] lg:shrink-0">
            <x-auth.form
                title="Masuk Ke Akun Anda"
                subtitle="Silahkan login untuk melanjutkan ke layanan MediaCare"
                email-label="Email atau Nomor Telepon"
                :show-google="true"
                :show-register="true"
            />
        </div>
    </div>
</x-auth.layout>
