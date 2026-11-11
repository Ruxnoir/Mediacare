@props(['title' => 'MediaCat', 'current' => 'pasien', 'panel' => 'pasien', 'decoration' => 'pasien'])

@php
    // Warna panel berbeda tiap frame di desain Figma.
    $panelClasses = [
        'pasien' => 'bg-mediacat-panel',
        'admin' => 'bg-mediacat-panel-admin',
        'dokter' => 'bg-mediacat-panel-dokter',
    ][$panel] ?? 'bg-mediacat-panel';
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#c9f0f2">

        <title>{{ $title }}</title>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-mediacat-bg font-sans text-mediacat-label antialiased">
        <x-auth.background />

        {{--
            Panel utama. Di layar besar ukurannya dipatok 1069x674 seperti frame
            Figma 1440x1024, lalu tiap bagian di posisikan absolut dari panel.
        --}}
        <main class="relative flex min-h-screen items-center justify-center px-4 py-8 sm:px-6 lg:px-8">
            <section class="relative flex w-full max-w-[1069px] flex-col items-center gap-6 rounded-[20px] px-6 py-8 sm:px-10 lg:block lg:h-[674px] lg:px-0 lg:py-0 {{ $panelClasses }}">
                <x-auth.decorations :variant="$decoration" />

                {{ $slot }}
            </section>
        </main>

        <div class="pointer-events-none fixed inset-x-0 bottom-4 flex justify-center">
            <div class="pointer-events-auto">
                <x-auth.role-switch :current="$current" />
            </div>
        </div>
    </body>
</html>
