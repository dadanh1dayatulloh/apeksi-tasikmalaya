@props(['items' => []])
<header data-navbar class="group fixed inset-x-0 top-0 z-50 transition-colors duration-300 [&.is-scrolled]:bg-primary-dark/95 [&.is-scrolled]:shadow-lg [&.is-scrolled]:backdrop-blur">
    <div class="container-x flex h-16 items-center justify-between gap-4 lg:h-[72px]">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 text-white" aria-label="Tasikmalaya - The City Experience">
            <img src="{{ asset('images/general/logo.png') }}" alt="" width="36" height="42" class="h-9 w-auto rounded-sm lg:h-10">
            <span class="leading-tight">
                <span class="block font-serif text-base font-semibold tracking-wide lg:text-lg">TASIKMALAYA</span>
                <span class="block text-[10px] text-white/70">The City Experience</span>
            </span>
        </a>

        <nav class="hidden items-center gap-7 lg:flex" aria-label="Navigasi utama">
            @foreach ($items as $i => $item)
                <a href="{{ $item['href'] }}" @class(['relative py-2 text-[13px] font-medium text-white/85 transition hover:text-white', 'text-white after:absolute after:inset-x-0 after:-bottom-0.5 after:h-0.5 after:bg-gold' => $i === 0])>{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <div class="hidden items-center gap-4 lg:flex">
            <button type="button" class="flex items-center gap-1 text-xs font-medium text-white/85 hover:text-white" aria-label="Pilih bahasa">
                <x-icon name="globe" class="size-4" /> ID
            </button>
            <button type="button" class="text-white/85 hover:text-white" aria-label="Cari"><x-icon name="search" class="size-4" /></button>
            <a href="#digital-guide" class="btn rounded-lg border border-white/30 bg-primary px-4 py-2.5 text-[13px] text-white shadow hover:bg-primary-dark">
                <x-icon name="book" class="size-4" /> Digital Guide
            </a>
        </div>

        <button type="button" data-menu-toggle aria-controls="mobile-menu" aria-expanded="false" aria-label="Buka menu" class="grid size-10 place-items-center text-white lg:hidden">
            <x-icon name="menu" class="size-7" />
        </button>
    </div>
</header>
