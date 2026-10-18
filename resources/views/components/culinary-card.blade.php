@props(['item'])
<article data-filter-item data-category="{{ $item['category'] }}" class="card group flex flex-col">
    <div class="aspect-[16/9] overflow-hidden">
        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy" class="card-img size-full object-cover">
    </div>
    <div class="flex items-center justify-between gap-2 p-3">
        <div class="min-w-0">
            <h3 class="truncate text-sm font-semibold text-primary xl:text-base">{{ $item['title'] }}</h3>
            <p class="text-[11px] font-medium text-gold">{{ $item['category'] }}</p>
            <p class="mt-1 flex items-center gap-2 text-[11px] text-muted">
                <span class="flex items-center gap-0.5"><x-icon name="star" class="size-3 fill-gold text-gold" />{{ number_format($item['rating'], 1) }}</span>
                <span aria-hidden="true">•</span><span>{{ $item['distance'] }}</span>
            </p>
        </div>
        <a href="https://www.openstreetmap.org/?mlat={{ $item['lat'] }}&mlon={{ $item['lng'] }}#map=17/{{ $item['lat'] }}/{{ $item['lng'] }}" target="_blank" rel="noopener" class="round-arrow lg:max-xl:hidden" aria-label="Navigasi ke {{ $item['title'] }}"><x-icon name="arrow-right" class="size-3.5" /></a>
    </div>
</article>
