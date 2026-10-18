@props(['markers'])
@php
    $cats = ['wisata' => 'Wisata', 'kuliner' => 'Kuliner', 'budaya' => 'Budaya', 'hotel' => 'Hotel', 'layanan' => 'Layanan publik'];
@endphp
<div>
    <div class="mb-4 flex flex-wrap gap-2" role="group" aria-label="Filter kategori peta">
        <button type="button" data-cat="all" aria-pressed="true" class="rounded-full border border-ink/25 px-4 py-2 text-sm font-semibold aria-pressed:bg-ink aria-pressed:text-paper">Semua</button>
        @foreach ($cats as $key => $label)
            <button type="button" data-cat="{{ $key }}" aria-pressed="false" class="rounded-full border border-ink/25 px-4 py-2 text-sm font-semibold aria-pressed:bg-ink aria-pressed:text-paper">{{ $label }}</button>
        @endforeach
    </div>
    <div class="grid gap-4 lg:grid-cols-[1fr_20rem]">
        <div id="map" class="h-[55vh] min-h-72 w-full rounded-3xl bg-line lg:h-[30rem]" role="region" aria-label="Peta interaktif Tasikmalaya"></div>
        <aside data-map-panel class="rounded-3xl bg-paper p-6 ring-1 ring-line">
            <p class="text-stone">Pilih penanda di peta untuk melihat detailnya.</p>
        </aside>
    </div>
    <script type="application/json" id="map-data">@json(['center' => [-7.3274, 108.2207], 'markers' => $markers])</script>
</div>
