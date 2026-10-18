# APEKSI Kota Tasikmalaya: overlay untuk Laravel 11/12 + Tailwind v4 + Vite

Salin isi folder ini ke root project Laravel Anda (timpa `routes/web.php` jika belum dimodifikasi).

## Instalasi
```bash
npm install tailwindcss @tailwindcss/vite swiper leaflet
# pastikan vite.config.js memakai plugin tailwindcss() (lihat vite.config.js di folder ini)
npm run build        # atau: npm run dev
php artisan serve
```

## Struktur
- `routes/web.php`: `Route::view('/', 'home')`
- `config/site.php`: SEMUA data statis (guides, events, crafts, culinary, hotel, gallery, emergency, ...).
  Nanti ganti `config('site.xxx')` di `home.blade.php` dengan `Model::all()`.
- `resources/views/layouts/app.blade.php`: layout, SEO, font, @vite
- `resources/views/home.blade.php`: perakit section
- `resources/views/components/*.blade.php`: komponen reusable (`<x-hero />`, `<x-craft-card />`, ...)
- `resources/css/app.css`: theme token (warna, font) + util kecil
- `resources/js/app.js`: menu mobile, reveal, filter, tab hari, Swiper, Leaflet, modal video
- `public/images/**`: placeholder (di-crop dari screenshot), ganti dengan foto asli di path yang sama

## Yang perlu diisi
- Nomor kontak darurat di `config/site.php` adalah DUMMY.
- Video: isi `data-src` di `components/video-modal.blade.php` dengan URL embed YouTube.
- Koordinat marker peta adalah perkiraan; ganti dengan koordinat asli.
- Link tombol "Lihat Cerita", "Explore Investment", footer = `#` (belum ada halaman tujuan).
