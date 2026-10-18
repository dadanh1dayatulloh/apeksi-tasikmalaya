@props(['event'])
<section class="relative isolate overflow-hidden bg-primary-dark py-10 text-center text-white">
    <img src="{{ asset('images/general/footer-banner.jpg') }}" alt="" loading="lazy" class="absolute inset-0 -z-20 size-full object-cover opacity-70">
    <div class="absolute inset-0 -z-10 bg-primary-dark/60"></div>
    <div class="container-x flex flex-col items-center gap-5 lg:flex-row lg:justify-center lg:gap-10">
        <div>
            <h2 class="text-2xl font-semibold uppercase tracking-wide sm:text-3xl">See You in <span class="text-gold-light">Tasikmalaya</span></h2>
            <p class="mt-1 text-sm uppercase tracking-wider text-white/85">21 — 23 October 2026</p>
        </div>
        <div class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row">
            <a href="#jelajahi" class="btn btn-gold">Explore the City <x-icon name="arrow-right" class="size-4" /></a>
            <a href="#apeksi" class="btn btn-outline-light">APEKSI Agenda</a>
        </div>
    </div>
</section>
