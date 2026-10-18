@props(['items' => []])
<div id="mobile-menu" class="invisible pointer-events-none fixed inset-0 z-[60] -translate-y-4 bg-primary-dark/98 opacity-0 transition duration-300 lg:hidden" role="dialog" aria-modal="true" aria-label="Menu">
    <div class="flex h-16 items-center justify-between px-4">
        <span class="font-serif text-lg font-semibold text-white">TASIKMALAYA</span>
        <button type="button" data-menu-toggle aria-label="Tutup menu" class="grid size-10 place-items-center text-white"><x-icon name="close" class="size-7" /></button>
    </div>
    <nav class="flex flex-col px-6 pt-4" aria-label="Menu mobile">
        @foreach ($items as $item)
            <a href="{{ $item['href'] }}" data-menu-link class="border-b border-white/10 py-4 font-serif text-xl text-white hover:text-gold-light">{{ $item['label'] }}</a>
        @endforeach
        <a href="#digital-guide" data-menu-link class="btn btn-gold mt-8 w-full">Digital Guide</a>
    </nav>
</div>
