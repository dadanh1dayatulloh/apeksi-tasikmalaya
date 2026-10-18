@props(['item'])
<a href="#" class="card group relative flex aspect-[4/5] flex-col justify-end">
    <img src="{{ asset($item['image']) }}" alt="" loading="lazy" class="card-img absolute inset-x-0 top-0 h-1/2 w-full object-cover">
    <div class="relative flex h-[55%] flex-col justify-center bg-primary p-4 text-white max-sm:pb-3 max-sm:pt-5 max-[389px]:px-3">
        <x-icon :name="$item['icon']" class="mb-2 hidden size-7 text-gold sm:block" />
        <h3 class="text-lg font-semibold leading-tight max-sm:leading-7 max-[389px]:text-base">{{ $item['title'] }}</h3>
        <p class="mt-1 text-xs leading-snug text-white/75">{{ $item['description'] }}</p>
    </div>
</a>
