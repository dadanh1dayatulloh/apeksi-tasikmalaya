@props(['item'])
<a href="{{ $item['href'] ?? '#' }}" class="card group flex h-full flex-col">
    <div class="aspect-[16/10] overflow-hidden">
        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy" class="card-img size-full object-cover">
    </div>
    <div class="flex flex-1 items-end justify-between gap-2 p-3 lg:p-4">
        <div>
            <h3 class="text-base font-semibold text-primary lg:text-lg">{{ $item['title'] }}</h3>
            <p class="mt-1 text-[11px] leading-snug text-muted lg:text-xs">{{ $item['description'] }}</p>
        </div>
        <span class="round-arrow"><x-icon name="arrow-right" class="size-3.5" /></span>
    </div>
</a>
