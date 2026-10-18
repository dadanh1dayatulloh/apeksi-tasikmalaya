@props(['guide'])
<a href="{{ $guide['href'] ?? '#' }}" class="card group flex h-full w-full flex-col lg:h-auto">
    <div class="aspect-[16/10] overflow-hidden">
        <img src="{{ asset($guide['image']) }}" alt="{{ $guide['title'] }}" loading="lazy" class="card-img size-full object-cover">
    </div>
    <div class="flex flex-1 flex-col items-start gap-2 p-3 xl:flex-row xl:gap-3">
        <span class="grid size-9 shrink-0 place-items-center rounded-full {{ $guide['tint'] }}"><x-icon :name="$guide['icon']" class="size-[18px]" /></span>
        <span>
            <span class="block font-serif text-[13px] font-semibold leading-snug text-primary xl:text-sm">{{ $guide['title'] }}</span>
            <span class="mt-0.5 hidden text-[11px] leading-snug text-muted xl:block">{{ $guide['description'] }}</span>
        </span>
    </div>
</a>
