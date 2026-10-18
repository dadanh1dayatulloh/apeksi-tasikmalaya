@props(['filters', 'items'])
<section id="galeri" class="container-x section-y">
    <div class="mb-5 flex flex-col gap-3 sm:flex-row sm:items-center sm:gap-6">
        <h2 class="text-xl font-semibold text-primary lg:text-2xl">Moments in Tasikmalaya</h2>
        <div data-filter-group="#gallery-grid" class="scrollbar-none flex gap-2 overflow-x-auto pb-1" role="group" aria-label="Filter galeri">
            @foreach ($filters as $i => $f)
                <button type="button" data-filter="{{ $f }}" aria-pressed="{{ $i === 0 ? 'true' : 'false' }}" class="chip">{{ $f }}</button>
            @endforeach
        </div>
    </div>
    <div id="gallery-grid" class="grid grid-cols-2 gap-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-9 lg:gap-3">
        @foreach ($items as $g)
            <a href="{{ asset($g['image']) }}" data-filter-item data-category="{{ $g['cat'] }}" class="group relative block aspect-[3/4] overflow-hidden rounded-lg bg-surface lg:aspect-[2/3]">
                <img src="{{ asset($g['image']) }}" alt="{{ $g['alt'] }}" loading="lazy" class="size-full object-cover transition duration-500 group-hover:scale-105">
            </a>
        @endforeach
    </div>
</section>
