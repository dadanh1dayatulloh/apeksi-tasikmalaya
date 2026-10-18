<section class="relative isolate overflow-hidden bg-primary-dark text-white">
    <img src="{{ asset('images/general/pano.jpg') }}" alt="" loading="lazy" class="absolute inset-0 -z-20 size-full object-cover">
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-primary-dark/90 via-primary-dark/50 to-transparent"></div>
    <div class="container-x grid items-center gap-6 py-10 lg:grid-cols-[1.2fr_1fr] lg:py-0">
        <div class="lg:py-10">
            <h2 class="text-2xl font-semibold uppercase tracking-wide sm:text-3xl">This is Tasikmalaya</h2>
            <p class="mt-1 max-w-sm text-sm text-white/85 sm:text-base">A city of creativity, culture and collaboration.</p>
            <button type="button" data-video-open class="mt-5 flex items-center gap-3 text-sm font-semibold" aria-label="Play Video">
                <span class="grid size-12 place-items-center rounded-full bg-gold text-primary-dark"><x-icon name="play" class="size-5" /></span>
                Play Video
            </button>
        </div>
        <img src="{{ asset('images/general/banner-collage.jpg') }}" alt="" loading="lazy" class="hidden h-full max-h-[200px] w-full object-cover lg:block lg:max-h-none">
    </div>
</section>
