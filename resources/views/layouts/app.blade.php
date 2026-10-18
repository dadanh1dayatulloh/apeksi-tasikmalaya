<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Tasikmalaya Digital Guide | APEKSI Komwil III 2026')</title>
    <meta name="description" content="Panduan digital Kota Tasikmalaya untuk APEKSI Komwil III 2026, meliputi budaya, kuliner, destinasi, hotel, transportasi, agenda dan informasi kota.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Tasikmalaya Digital Guide | APEKSI Komwil III 2026">
    <meta property="og:description" content="Where Culture Meets Innovation & Collaboration.">
    <meta property="og:image" content="{{ asset('images/hero/hero.jpg') }}">
    <meta name="theme-color" content="#0b2a4a">
    <link rel="icon" href="{{ asset('images/general/logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a href="#konten" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded focus:bg-white focus:p-3">Lewati ke konten</a>
    <x-navbar :items="config('site.nav')" />
    <x-mobile-menu :items="config('site.nav')" />
    <main id="konten">@yield('content')</main>
    <x-footer />
    <x-video-modal />
    <button type="button" data-back-top aria-label="Kembali ke atas" class="fixed bottom-5 right-5 z-40 hidden size-11 place-items-center rounded-full bg-primary text-white shadow-lg [&:not(.hidden)]:grid">
        <x-icon name="arrow-up" class="size-5" />
    </button>
</body>
</html>
