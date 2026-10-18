# Tasikmalaya Digital Guide — Explore Tasikmalaya with Tata & Titi

Laravel 12 · Blade · Tailwind v4 · Vite · Three.js · GSAP ScrollTrigger · Swiper · Leaflet

## Menjalankan
```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev        # terminal 1
php artisan serve  # terminal 2  -> http://127.0.0.1:8000
npm run build      # build produksi
```

## Letak file Tata & Titi (WAJIB)
```
public/assets/models/tata.glb
public/assets/models/titi.glb
```
Nama file harus persis seperti di atas. Selama file belum ada, website tetap jalan dan menampilkan
poster cadangan (`public/assets/images/tata-poster.svg`, `titi-poster.svg`) — ganti dengan render asli.

### Export dari Blender (.blend → .glb)
File > Export > glTF 2.0 (.glb), lalu:
- Format: glTF Binary (.glb) · Include: Selected Objects (pilih karakter + armature)
- Transform: +Y Up · Mesh: Apply Modifiers
- Animation: centang Animation (nama action "Idle" akan dipilih otomatis; jika tidak ada, action pertama dipakai)
- Compression: aktifkan Draco (decoder dimuat otomatis dari CDN)
- Skala: karakter otomatis dinormalisasi ke tinggi seragam, tidak perlu diatur manual.
Target ukuran: < 5 MB per file. Kompres tekstur ke ≤ 2048 px.

## Mengubah isi
- Data (destinasi, budaya, kuliner, galeri, darurat, titik peta): `app/Data/SiteData.php`
  (isi yang bertanda "ISI:" adalah placeholder — ganti dengan data resmi).
- Foto: `public/assets/images/{destinations,culture,culinary,gallery}/<slug>.webp`
- Posisi Tata/Titi per section: `resources/js/three/animation.js`
- Dialog Tata/Titi: atribut `data-tata` / `data-titi` pada section di `resources/views/home.blade.php`
- Pertanyaan kuis: `resources/js/sections/quiz.js`
- Warna & font: `resources/css/app.css` (blok `@theme`)
