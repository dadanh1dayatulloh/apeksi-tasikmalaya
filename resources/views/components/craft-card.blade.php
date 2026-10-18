@props(['craft'])
<article class="card group flex h-full flex-col">
    <div class="aspect-[16/10] overflow-hidden">
        <img src="{{ asset($craft['image']) }}" alt="{{ $craft['title'] }}" loading="lazy" class="card-img size-full object-cover">
    </div>
    <div class="flex flex-1 flex-col p-4">
        <h3 class="text-lg font-semibold text-primary">{{ $craft['title'] }}</h3>
        <p class="mt-1 text-xs leading-snug text-muted">{{ $craft['description'] }}</p>
        <div class="mt-auto flex items-center justify-between pt-4">
            <a href="#" class="btn btn-outline rounded-full px-4 py-1.5 text-xs">Lihat Cerita <x-icon name="arrow-right" class="size-3.5" /></a>
            <span class="round-arrow"><x-icon name="arrow-right" class="size-3.5" /></span>
        </div>
    </div>
</article>
