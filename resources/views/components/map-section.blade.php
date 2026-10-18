@props(['filters', 'culinary', 'featured', 'points', 'legend'])
<section id="peta" class="relative bg-cream">
    <div class="grid lg:grid-cols-[minmax(0,1.05fr)_minmax(0,1fr)]">
        <div class="order-1 px-4 py-10 sm:px-6 lg:py-12 lg:pl-[max(2rem,calc((100vw-1320px)/2+2rem))] lg:pr-8 min-w-0" id="kuliner">
            <h2 class="text-2xl font-semibold uppercase tracking-wide text-primary sm:text-3xl">Taste Tasikmalaya</h2>
            <p class="font-serif text-lg text-primary">Find your next favorite place.</p>
            <p class="mt-2 max-w-md text-sm text-muted">Jelajahi peta kuliner, restoran, kopi, oleh-oleh dan UMKM terbaik di Kota Tasikmalaya.</p>

            <label class="relative mt-5 block">
                <span class="sr-only">Cari kuliner</span>
                <x-icon name="search" class="pointer-events-none absolute left-4 top-1/2 size-4 -translate-y-1/2 text-muted" />
                <input type="search" data-culinary-search placeholder="Cari kuliner, restoran, atau lokasi..." class="w-full rounded-full border border-primary/10 bg-surface py-3 pl-11 pr-4 text-sm placeholder:text-muted focus:border-gold focus:outline-none">
            </label>

            <div data-filter-group="#culinary-list" class="scrollbar-none mt-4 flex gap-2 overflow-x-auto pb-1" role="group" aria-label="Filter kuliner">
                @foreach ($filters as $i => $f)
                    <button type="button" data-filter="{{ $f }}" aria-pressed="{{ $i === 0 ? 'true' : 'false' }}" class="chip">{{ $f }}</button>
                @endforeach
            </div>

            <div id="culinary-list" class="mt-5 grid grid-cols-2 gap-3 sm:grid-cols-3">
                @foreach ($culinary as $item)
                    <x-culinary-card :item="$item" />
                @endforeach
            </div>
        </div>

        <div class="relative order-2 min-h-[360px] lg:min-h-[560px]">
            <div id="tasik-map" data-points='@json($points)' data-legend='@json($legend)' class="absolute inset-0" role="region" aria-label="Peta Kota Tasikmalaya"></div>

            <div class="relative z-10 ml-auto mt-auto flex h-full items-end p-3 sm:p-5 lg:items-end lg:justify-end lg:p-6">
                <article class="pointer-events-auto w-full max-w-[300px] self-end overflow-hidden rounded-2xl bg-white shadow-card-hover max-lg:hidden">
                    <img src="{{ asset($featured['image']) }}" alt="{{ $featured['title'] }}" loading="lazy" class="h-28 w-full object-cover">
                    <div class="space-y-1 p-3">
                        <h3 class="text-base font-semibold text-primary">{{ $featured['title'] }}</h3>
                        <p class="text-xs font-medium text-ink">{{ $featured['category'] }}</p>
                        <p class="flex items-center gap-1 text-xs text-muted"><x-icon name="star" class="size-3.5 fill-gold text-gold" />{{ $featured['rating'] }} ({{ $featured['reviews'] }} ulasan)</p>
                        <p class="flex items-center gap-1 text-xs text-muted"><x-icon name="clock" class="size-3.5" />{{ $featured['distance'] }} • {{ $featured['address'] }}</p>
                        <a href="https://www.openstreetmap.org/?mlat={{ $featured['lat'] }}&mlon={{ $featured['lng'] }}#map=17/{{ $featured['lat'] }}/{{ $featured['lng'] }}" target="_blank" rel="noopener" class="btn btn-navy mt-2 w-full py-2.5">Navigasi <x-icon name="arrow-right" class="size-4" /></a>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <ul class="container-x flex flex-wrap gap-x-5 gap-y-1 py-3 text-xs text-muted" aria-label="Legenda peta">
        @foreach ($legend as $l)
            <li class="flex items-center gap-1.5"><span class="size-2.5 rounded-full" style="background: {{ $l['color'] }}"></span>{{ $l['label'] }}</li>
        @endforeach
    </ul>
</section>
