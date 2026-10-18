@props(['items'])
<section id="investasi" class="relative overflow-hidden">
    <div class="container-x section-y grid gap-8 lg:grid-cols-[0.8fr_1.6fr] lg:items-center">
        <div>
            <p class="text-xs uppercase tracking-widest text-muted">Invest Tasikmalaya</p>
            <h2 class="mt-1 text-3xl font-semibold text-primary lg:text-[2.4rem]">A City Ready to Grow</h2>
            <p class="mt-3 max-w-xs text-sm text-muted">Discover opportunities, local potential and the future of Tasikmalaya.</p>
            <a href="#" class="btn btn-gold mt-6 w-full sm:w-auto">Explore Investment Potential <x-icon name="arrow-right" class="size-4" /></a>
        </div>
        <div class="grid grid-cols-3 gap-3 lg:gap-5">
            @foreach ($items as $item)
                <div class="reveal h-full"><x-investment-card :item="$item" /></div>
            @endforeach
        </div>
    </div>
</section>
