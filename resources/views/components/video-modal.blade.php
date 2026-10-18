{{-- Set data-src to a YouTube/Vimeo embed URL. --}}
<div id="video-modal" data-src="" class="fixed inset-0 z-[70] hidden items-center justify-center bg-black/80 p-4" role="dialog" aria-modal="true" aria-label="Video Kota Tasikmalaya">
    <div class="relative aspect-video w-full max-w-4xl overflow-hidden rounded-xl bg-black">
        <button type="button" data-video-close aria-label="Tutup video" class="absolute right-3 top-3 z-10 grid size-9 place-items-center rounded-full bg-white/20 text-white hover:bg-white/30"><x-icon name="close" class="size-5" /></button>
        <div data-video-frame class="grid size-full place-items-center"></div>
    </div>
</div>
