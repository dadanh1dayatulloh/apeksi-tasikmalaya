@props(['hotel'])
<div id="istirahat">
    <h2 class="text-2xl font-semibold text-primary">Rest Easy</h2>
    <p class="text-sm text-muted">Everything you need for a comfortable stay.</p>
    <article class="mt-5 grid gap-4 overflow-hidden rounded-2xl bg-white p-3 shadow-card sm:grid-cols-[1.1fr_1fr] sm:items-center">
        <img src="{{ asset($hotel['image']) }}" alt="{{ $hotel['name'] }}" loading="lazy" class="aspect-[4/3] w-full rounded-xl object-cover sm:aspect-auto sm:h-full sm:min-h-[180px]">
        <div class="p-1 sm:p-2">
            <h3 class="text-lg font-semibold text-primary">{{ $hotel['name'] }}</h3>
            <div class="mt-1 flex text-gold" aria-label="{{ $hotel['stars'] }} bintang">
                @for ($i = 0; $i < $hotel['stars']; $i++)<x-icon name="star" class="size-4 fill-current" />@endfor
            </div>
            <p class="mt-2 text-xs leading-relaxed text-muted">{{ $hotel['description'] }}</p>
            <ul class="mt-3 grid grid-cols-2 gap-x-3 gap-y-1.5 text-[11px] text-muted">
                @foreach ($hotel['facilities'] as $f)
                    <li class="flex items-center gap-1.5"><x-icon :name="$f['icon']" class="size-3.5 text-primary" />{{ $f['label'] }}</li>
                @endforeach
            </ul>
            <div class="mt-4 flex gap-2">
                <a href="#peta" class="btn btn-navy flex-1 px-3 py-2.5 text-xs">Lihat Lokasi</a>
                <a href="{{ $hotel['maps'] }}" target="_blank" rel="noopener" class="btn btn-outline flex-1 whitespace-nowrap px-3 py-2.5 text-xs"><x-icon name="pin" class="size-3.5" /> Open Maps</a>
            </div>
        </div>
    </article>
</div>
