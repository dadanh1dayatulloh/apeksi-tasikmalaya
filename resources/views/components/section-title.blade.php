@props(['title', 'sub' => null])
<div {{ $attributes->merge(['class' => 'max-w-3xl']) }}>
    <h2 class="font-display text-[clamp(2.2rem,6vw,4.75rem)] font-extrabold leading-[1.02] tracking-tight">{!! nl2br(e(str_replace('|', "\n", $title))) !!}</h2>
    @if ($sub)
        <p class="mt-4 max-w-xl text-lg text-stone">{{ $sub }}</p>
    @endif
</div>
