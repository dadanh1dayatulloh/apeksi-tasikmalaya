@props(['guides'])
<section id="city-guide" class="container-x section-y">
    <div class="mb-5 flex items-end justify-between gap-4">
        <div>
            <h2 class="text-2xl font-semibold text-primary lg:text-[1.7rem]">Your Tasikmalaya Guide</h2>
            <p class="text-sm text-muted">Everything you need during your stay.</p>
        </div>
        <a href="#digital-guide" class="hidden items-center gap-1.5 text-xs font-semibold text-primary hover:text-gold sm:flex">Lihat Semua <x-icon name="arrow-right" class="size-3.5" /></a>
    </div>
    <div class="grid grid-cols-3 items-stretch gap-3 lg:items-start md:grid-cols-3 lg:grid-cols-6 lg:gap-4">
        @foreach ($guides as $guide)
            <div class="reveal h-full lg:h-auto"><x-guide-card :guide="$guide" /></div>
        @endforeach
    </div>
</section>
