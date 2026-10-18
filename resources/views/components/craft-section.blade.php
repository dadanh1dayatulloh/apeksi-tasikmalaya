@props(['crafts'])
<section id="craft" class="relative isolate overflow-hidden bg-primary-dark py-10 text-white lg:py-12">
    <img src="{{ asset('images/craft/craft-bg.jpg') }}" alt="" loading="lazy" class="absolute inset-0 -z-20 size-full object-cover">
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-primary-dark/90 via-primary-dark/70 to-primary-dark/40"></div>
    <div class="container-x">
        <h2 class="text-2xl font-semibold uppercase tracking-wide sm:text-3xl">The Craft of Tasikmalaya</h2>
        <p class="mb-6 font-serif text-lg text-gold-light">Crafted by hands. Carried by culture.</p>
        <div class="relative">
            <div class="craft-swiper swiper !overflow-hidden lg:mx-6">
                <div class="swiper-wrapper">
                    @foreach ($crafts as $craft)
                        <div class="swiper-slide !h-auto"><x-craft-card :craft="$craft" /></div>
                    @endforeach
                </div>
            </div>
            <button type="button" data-craft-prev aria-label="Sebelumnya" class="absolute -left-1 top-1/3 z-10 hidden size-9 place-items-center rounded-full bg-primary text-white shadow ring-1 ring-white/30 lg:grid"><x-icon name="arrow-left" class="size-4" /></button>
            <button type="button" data-craft-next aria-label="Berikutnya" class="absolute -right-1 top-1/3 z-10 hidden size-9 place-items-center rounded-full bg-primary text-white shadow ring-1 ring-white/30 lg:grid"><x-icon name="arrow-right" class="size-4" /></button>
        </div>
    </div>
</section>
