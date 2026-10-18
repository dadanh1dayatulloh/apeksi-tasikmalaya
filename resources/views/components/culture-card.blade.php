@props(['item'])
<article tabindex="0" class="group relative h-[26rem] w-[78vw] shrink-0 snap-start overflow-hidden rounded-3xl bg-moss text-paper sm:w-[22rem] lg:h-[30rem] lg:w-[24rem]">
    <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy" onerror="this.remove()"
         class="absolute inset-0 h-[112%] w-full object-cover transition duration-700 ease-out group-hover:-translate-y-3 group-hover:scale-105">
    <div class="absolute inset-0 bg-gradient-to-t from-ink/85 via-ink/10 to-transparent"></div>
    <div class="absolute inset-x-0 bottom-0 p-6">
        <h3 class="font-display text-3xl font-extrabold">{{ $item['title'] }}</h3>
        <p class="mt-2 text-sm text-paper/85 transition duration-500 lg:translate-y-2 lg:opacity-0 lg:group-hover:translate-y-0 lg:group-hover:opacity-100 lg:group-focus-within:opacity-100 lg:group-focus:translate-y-0 lg:group-focus:opacity-100">{{ $item['description'] }}</p>
    </div>
</article>
