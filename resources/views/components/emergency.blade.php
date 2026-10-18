@props(['items'])
<ul class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($items as $e)
        <li class="flex items-center justify-between gap-4 rounded-2xl bg-paper p-5 ring-1 ring-line">
            <div>
                <p class="font-display text-xl font-extrabold">{{ $e['label'] }}</p>
                <p class="text-sm text-stone">{{ $e['note'] }}</p>
            </div>
            @if ($e['phone'])
                <a href="tel:{{ $e['phone'] }}" class="shrink-0 rounded-full bg-payung px-5 py-3 font-bold text-paper" aria-label="Telepon {{ $e['label'] }} {{ $e['phone'] }}">{{ $e['phone'] }}</a>
            @else
                <span class="text-sm text-stone">Segera diisi</span>
            @endif
        </li>
    @endforeach
</ul>
