@props(['event'])
<section id="beranda" class="relative isolate flex min-h-[640px] items-end overflow-hidden bg-primary-dark text-white sm:min-h-[600px] lg:min-h-[640px] lg:items-center">
    <img src="{{ asset('images/hero/hero.jpg') }}" alt="Panorama Kota Tasikmalaya saat senja" fetchpriority="high"
         class="absolute inset-0 -z-20 size-full object-cover object-[78%_center] lg:object-center">
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-primary-dark via-primary-dark/70 to-primary-dark/20 lg:bg-gradient-to-r lg:from-primary-dark/95 lg:via-primary-dark/60 lg:to-transparent"></div>

    <div class="container-x relative pb-8 pt-28 lg:py-28">
        <div class="max-w-[640px]">
            <p class="mb-3 text-[11px] font-semibold uppercase tracking-[0.16em] text-white/90 sm:text-xs">Proud Host of <span class="text-gold-light">{{ $event['name'] }}</span></p>
            <h1 class="text-[2.1rem] font-semibold uppercase leading-[1.08] sm:text-5xl lg:text-[3.4rem]">
                Selamat Datang<br>di Kota <span class="text-gold-light">Tasikmalaya</span>
            </h1>
            <p class="mt-3 font-serif text-lg text-gold-light sm:text-xl lg:text-2xl">Where Culture Meets Innovation &amp; Collaboration</p>
            <p class="mt-4 hidden max-w-lg text-sm leading-relaxed text-white/85 sm:block lg:text-[15px]">Temukan keragaman budaya, kreativitas, kuliner, dan potensi Kota Tasikmalaya dalam pengalaman APEKSI Komwil III 2026.</p>

            <p class="mt-5 font-semibold tracking-wide sm:mt-6 lg:text-lg">{{ $event['dates'] }}</p>

            <div class="mt-5 flex flex-col gap-3 sm:flex-row">
                <a href="#jelajahi" class="btn btn-gold sm:min-w-[210px]">Jelajahi Tasikmalaya <x-icon name="arrow-right" class="size-4" /></a>
                <a href="#apeksi" class="btn btn-outline-light sm:min-w-[190px]">Lihat Agenda APEKSI</a>
            </div>

            <ul class="mt-6 grid grid-cols-2 gap-x-4 gap-y-2 text-xs text-white/85 sm:flex sm:flex-wrap sm:gap-x-6 sm:text-[13px]">
                @foreach ($event['stats'] as $s)
                    <li class="flex items-center gap-2"><x-icon :name="$s['icon']" class="size-4 shrink-0 text-gold-light" />{{ $s['label'] }}</li>
                @endforeach
            </ul>
        </div>

        <button type="button" data-video-open class="mt-6 flex items-center gap-3 text-sm font-semibold lg:absolute lg:bottom-1/2 lg:right-8 lg:mt-0 lg:translate-y-[-30%]" aria-label="Tonton Video Kota">
            <span class="grid size-14 place-items-center rounded-full border-2 border-white/80 bg-white/10 backdrop-blur lg:size-16"><x-icon name="play" class="size-6" /></span>
            <span class="leading-tight">Tonton<br class="hidden lg:block"> Video Kota</span>
        </button>
    </div>

    <a href="#city-guide" aria-label="Gulir ke bawah" class="absolute bottom-3 left-1/2 hidden size-8 -translate-x-1/2 place-items-center rounded-full border border-white/50 text-white/80 lg:grid"><x-icon name="arrow-down" class="size-4" /></a>
</section>
