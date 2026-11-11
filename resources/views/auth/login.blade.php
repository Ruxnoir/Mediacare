<x-auth.layout title="Masuk — MediaCat" current="pasien" panel="pasien" decoration="pasien">
    {{-- Logo --}}
    <div class="z-10 lg:absolute lg:left-[18px] lg:top-[10px]">
        <x-auth.brand class="mx-auto w-[263px] lg:mx-0" />
    </div>

    {{-- Kolom informasi --}}
    <div class="z-10 w-full max-w-[300px] text-center lg:absolute lg:left-[63px] lg:top-[164px] lg:w-[210px] lg:max-w-none lg:text-left">
        <h1 class="text-[16px] font-bold leading-[24px] text-mediacat-dark">
            SELAMAT DATANG<br>DI MediaCat
        </h1>

        <p class="mt-[20px] text-[14px] font-semibold leading-[21px] text-mediacat-body">
            Konsultasi dengan dokter hewan, buat janji, dan akses informasi seputar MediaCat dalam satu platform.
        </p>

        {{-- Daftar fitur: lebih lebar dari kolomnya agar judul tetap satu baris seperti desain --}}
        <ul class="mt-[12px] w-full space-y-[4px] text-left lg:w-[350px]">
            <x-auth.feature icon="icon-konsultasi.png" title="Konsultasi Dokter Hewan" text="Dengan dokter spesialis hewan terbaik" />
            <x-auth.feature icon="icon-booking.png" title="Booking mudah" text="Pilih jadwal sesuai kebutuhan" />
            <x-auth.feature icon="icon-informasi.png" title="Informasi Kesehatan Seputar Hewan Peliharaan Anda" text="Artikel terpercaya & terbaru mengenai anabul kesayangan anda" />
        </ul>
    </div>

    {{-- Ilustrasi dokter hewan --}}
    <div class="z-0 hidden lg:absolute lg:left-[273px] lg:top-[70px] lg:block lg:w-[379px]">
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
            title="Masuk Ke Akun Anda"
            subtitle="Silahkan login untuk melanjutkan ke layanan MediaCat"
            email-label="Email atau Nomor Telepon"
            divider-label="atau"
            :show-google="true"
            :show-register="true"
        />
    </div>
</x-auth.layout>
