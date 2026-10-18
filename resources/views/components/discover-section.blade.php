@props(['items'])
<section id="jelajahi" class="container-x section-y">
    <div class="mb-6 flex items-end justify-between gap-4">
        <div>
            <p class="eyebrow">Discover Tasikmalaya</p>
            <h2 class="text-3xl font-semibold text-primary lg:text-4xl">More Than a Destination</h2>
            <p class="mt-1 font-serif text-base text-primary lg:text-lg">Discover the Soul of Tasikmalaya</p>
            <p class="mt-2 hidden max-w-xl text-sm text-muted md:block">Perpaduan budaya, kreativitas, kuliner dan keindahan alam yang membuat setiap kunjungan menjadi pengalaman yang berkesan.</p>
        </div>
        <a href="#peta" class="hidden items-center gap-1.5 text-xs font-semibold text-primary hover:text-gold md:flex">Jelajahi Semua <x-icon name="arrow-right" class="size-3.5" /></a>
    </div>
    <div class="grid grid-cols-2 gap-3 lg:grid-cols-4 lg:gap-5">
        @foreach ($items as $item)
            <div class="reveal h-full"><x-destination-card :item="$item" /></div>
        @endforeach
    </div>
</section>
