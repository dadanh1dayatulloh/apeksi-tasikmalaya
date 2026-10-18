@props(['steps', 'meta'])
<div id="journey">
    <h2 class="text-2xl font-semibold text-primary">Your Tasikmalaya Journey</h2>
    <p class="text-sm text-muted">Experience the city beyond the meeting room.</p>

    <ol class="scrollbar-none mt-6 flex items-start gap-1 overflow-x-auto pb-2" aria-label="Rute perjalanan">
        @foreach ($steps as $s)
            <li class="flex min-w-[72px] flex-1 items-start">
                <div class="flex w-full flex-col items-center text-center">
                    <span class="grid size-12 place-items-center rounded-full bg-gold/20 text-primary ring-2 ring-gold/60"><x-icon :name="$s['icon']" class="size-5" /></span>
                    <span class="mt-2 text-[11px] font-medium leading-tight text-primary">{{ $s['label'] }}</span>
                </div>
                @unless ($loop->last)<span class="mt-5 -mx-1 shrink-0 text-xs text-gold" aria-hidden="true">›</span>@endunless
            </li>
        @endforeach
    </ol>

    <div class="mt-5 flex flex-wrap items-center gap-2">
        @foreach ($meta as $m)
            <span class="flex items-center gap-1.5 rounded-full bg-surface px-3 py-2 text-[11px] text-muted"><x-icon :name="$m['icon']" class="size-3.5" />{{ $m['label'] }}</span>
        @endforeach
        <a href="#peta" class="btn btn-navy w-full text-[13px] sm:ml-auto sm:w-auto">Lihat Rute City Tour <x-icon name="arrow-right" class="size-4" /></a>
    </div>
</div>
