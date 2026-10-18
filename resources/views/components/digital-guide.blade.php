@props(['categories'])
<div class="contents">
    <div>
        <h2 class="text-xl font-semibold uppercase tracking-wide text-primary lg:text-2xl">Your Digital Guide</h2>
        <p class="text-sm text-muted">Scan once. Carry Tasikmalaya with you.</p>
        <ul class="mt-5 grid grid-cols-4 gap-2 lg:grid-cols-4 xl:grid-cols-8">
            @foreach ($categories as $c)
                <li><a href="#" class="flex h-full flex-col items-center gap-1.5 rounded-xl bg-white p-2.5 text-center shadow-card transition hover:-translate-y-0.5">
                    <span class="grid size-9 place-items-center rounded-full bg-blue-50 text-primary"><x-icon :name="$c['icon']" class="size-[18px]" /></span>
                    <span class="text-[10px] font-medium leading-tight text-primary">{{ $c['label'] }}</span>
                </a></li>
            @endforeach
        </ul>
    </div>

    <div class="grid grid-cols-2 items-end gap-4 sm:max-w-lg xl:max-w-none">
        <figure class="rounded-2xl bg-white p-4 text-center shadow-card">
            <img src="{{ asset('images/general/qr.jpg') }}" alt="QR Code Digital Guide" loading="lazy" class="mx-auto aspect-square w-full max-w-[130px] object-contain">
            <figcaption class="mt-2 text-xs font-semibold text-primary">Scan QR Code</figcaption>
        </figure>
        <div class="relative mx-auto w-full max-w-[150px] rounded-[1.6rem] border-[5px] border-primary-dark bg-gradient-to-b from-blue-100 to-white p-3 pb-14 text-center shadow-card">
            <p class="mt-6 font-serif text-sm font-semibold text-primary">TASIKMALAYA</p>
            <p class="text-[10px] text-muted">Digital Guide</p>
            <a href="#" class="btn btn-navy absolute inset-x-2 bottom-3 px-2 py-2 text-[11px]">Open Guide</a>
        </div>
    </div>
</div>
