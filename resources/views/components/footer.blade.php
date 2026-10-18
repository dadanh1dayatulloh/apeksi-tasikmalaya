@php($f = config('site.footer'))
<footer class="bg-primary-dark text-white/80">
    <div class="container-x grid gap-8 py-10 sm:grid-cols-2 lg:grid-cols-[1.4fr_1fr_1fr_1fr_auto]">
        <div>
            <a href="{{ route('home') }}" class="flex items-center gap-3 text-white">
                <img src="{{ asset('images/general/logo.png') }}" alt="" width="44" height="52" loading="lazy" class="h-11 w-auto">
                <span class="leading-tight"><span class="block font-serif text-lg font-semibold">TASIKMALAYA</span><span class="block text-[10px] text-white/60">The City Experience</span></span>
            </a>
            <p class="mt-4 font-serif text-sm italic text-gold-light">Namung Ngalangkung</p>
            <p class="text-xs text-white/60">Ngamumule Kota, Ngalaksanakeun Kolaborasi.</p>
        </div>
        <nav aria-label="Footer: Explore">
            <h3 class="mb-3 font-sans text-xs font-semibold text-white">Explore</h3>
            <ul class="space-y-2 text-xs">@foreach ($f['explore'] as $l)<li><a href="#" class="hover:text-white">{{ $l }}</a></li>@endforeach</ul>
        </nav>
        <nav aria-label="Footer: Information">
            <h3 class="mb-3 font-sans text-xs font-semibold text-white">Information</h3>
            <ul class="space-y-2 text-xs">@foreach ($f['information'] as $l)<li><a href="#" class="hover:text-white">{{ $l }}</a></li>@endforeach</ul>
        </nav>
        <div>
            <h3 class="mb-3 font-sans text-xs font-semibold text-white">Ikuti Kami</h3>
            <ul class="flex gap-2">
                @foreach ($f['social'] as $s)
                    <li><a href="#" aria-label="{{ ucfirst($s) }}" class="grid size-8 place-items-center rounded-md border border-white/25 text-white/80 hover:border-gold hover:text-gold"><x-icon :name="$s" class="size-4" /></a></li>
                @endforeach
            </ul>
        </div>
        <div class="flex items-center gap-3 sm:col-span-2 lg:col-span-1">
            <img src="{{ asset('images/general/qr.jpg') }}" alt="QR Code Digital Guide" loading="lazy" class="size-20 rounded bg-white p-1">
            <span class="text-xs">Digital Guide</span>
        </div>
    </div>
    <div class="border-t border-white/10">
        <div class="container-x flex flex-col gap-2 py-4 text-[11px] sm:flex-row sm:items-center sm:justify-between">
            <p>© 2026 Pemerintah Kota Tasikmalaya · Dinas Komunikasi dan Informatika</p>
            <p class="flex gap-4"><a href="#" class="hover:text-white">Privacy</a><a href="#" class="hover:text-white">Syarat &amp; Ketentuan</a></p>
        </div>
    </div>
</footer>
