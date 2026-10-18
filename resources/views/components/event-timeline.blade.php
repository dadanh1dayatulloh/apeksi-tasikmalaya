@props(['events'])
<section id="apeksi" class="bg-surface/60">
    <div class="container-x section-y grid gap-8 lg:grid-cols-[0.9fr_1.5fr] lg:items-center lg:gap-10">
        <div class="max-md:order-2 md:max-lg:order-1">
            <p class="text-xs uppercase tracking-widest text-muted">APEKSI Komwil III 2026</p>
            <h2 class="mt-2 text-3xl font-semibold leading-tight text-primary lg:text-[2.4rem]">Three Days.<br>One City.<br>Many Connections.</h2>
            <p class="mt-4 max-w-md text-sm leading-relaxed text-muted">Tiga hari untuk bertukar gagasan, memperkuat kolaborasi, dan mengenal lebih dekat Kota Tasikmalaya.</p>
            <a href="#apeksi" class="btn btn-navy mt-6 w-full sm:w-auto">Lihat Seluruh Agenda <x-icon name="arrow-right" class="size-4" /></a>
        </div>

        <div class="max-md:order-1 md:max-lg:order-2">
            {{-- Mobile day tabs --}}
            <div class="mb-4 flex gap-2 md:hidden" role="tablist" aria-label="Pilih hari">
                @foreach ($events as $i => $e)
                    <button type="button" role="tab" data-day-tab="{{ $e['day'] }}" aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                        class="rounded-lg border border-primary/15 bg-white px-4 py-2 text-xs font-semibold text-primary aria-selected:border-primary aria-selected:bg-primary aria-selected:text-white">Day {{ $e['day'] }}</button>
                @endforeach
            </div>

            <div class="grid gap-4 md:grid-cols-3 md:gap-5">
                @foreach ($events as $i => $e)
                    <article data-day="{{ $e['day'] }}" @class(['day-card relative flex flex-col rounded-2xl border border-primary/10 bg-white shadow-card', 'is-active' => $i === 0])>
                        @if (!$loop->last)
                            <span class="absolute -right-3 top-8 z-10 hidden size-6 place-items-center rounded-full border border-primary/20 bg-white md:grid"><span class="size-2.5 rounded-full bg-primary"></span></span>
                        @endif
                        <div class="p-5 pb-3">
                            <p class="text-xs font-bold uppercase tracking-wide text-primary">{{ $e['date'] }}</p>
                            <p class="text-xs font-semibold uppercase tracking-wide text-gold">Day {{ $e['day'] }}</p>
                            <h3 class="mt-1 min-h-[3.1rem] text-xl font-semibold leading-tight text-primary">{{ $e['title'] }}</h3>
                            <ul class="relative mt-3 space-y-2.5 border-l border-primary/15 pl-4">
                                @foreach ($e['items'] as $item)
                                    <li class="relative text-[13px] text-ink/80"><span class="absolute -left-[21px] top-1.5 size-2 rounded-full bg-primary"></span>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <img src="{{ asset($e['image']) }}" alt="" loading="lazy" class="mt-auto h-28 w-full rounded-b-2xl object-cover md:h-32">
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
