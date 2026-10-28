@props(['title' => 'MEDCARE', 'current' => 'pasien'])

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
    <body class="min-h-screen bg-medcare-bg font-sans text-medcare-label antialiased">
        <x-auth.background />

        <main class="relative flex min-h-screen items-center justify-center px-4 py-8 sm:px-6 lg:px-8">
            <section class="w-full max-w-[1070px] rounded-[20px] bg-medcare-panel px-6 py-8 sm:px-10 lg:min-h-[674px] lg:px-16">
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
