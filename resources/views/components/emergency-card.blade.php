@props(['contacts'])
<div>
    <h2 class="text-lg font-semibold uppercase tracking-wide text-primary">Need Help?</h2>
    <ul class="mt-3 space-y-2">
        @foreach ($contacts as $c)
            <li class="flex items-center gap-3 rounded-xl bg-white px-3 py-2 shadow-card">
                <span class="grid size-8 shrink-0 place-items-center rounded-full {{ $c['tint'] }}"><x-icon :name="$c['icon']" class="size-4" /></span>
                <span class="flex-1 text-xs font-medium text-primary">{{ $c['title'] }}</span>
                <a href="tel:{{ preg_replace('/\s+/', '', $c['number']) }}" class="text-xs font-semibold text-primary hover:text-gold">{{ $c['number'] }}</a>
            </li>
        @endforeach
    </ul>
</div>
