<?php

namespace App\Data;

/**
 * Sumber data sementara (array PHP). Field mengikuti calon model database:
 * title, slug, description, image, category, location, latitude, longitude, status.
 * Nanti cukup ganti isi method ini dengan query Eloquent.
 *
 * PENTING: deskripsi bertanda "ISI" adalah placeholder. Isi dengan data resmi
 * dan koordinat yang sudah diverifikasi sebelum website dipublikasikan.
 */
class SiteData
{
    private static function item(string $title, string $category, string $folder, string $desc = 'ISI: deskripsi singkat resmi.', ?string $location = null, ?float $lat = null, ?float $lng = null): array
    {
        $slug = \Illuminate\Support\Str::slug($title);

        return [
            'title' => $title, 'slug' => $slug, 'description' => $desc,
            'image' => "assets/images/{$folder}/{$slug}.webp", 'category' => $category,
            'location' => $location, 'latitude' => $lat, 'longitude' => $lng, 'status' => 'draft',
        ];
    }

    public static function destinations(): array
    {
        return [
            self::item('Destinasi Alam', 'alam', 'destinations', location: 'ISI: lokasi'),
            self::item('Destinasi Keluarga', 'keluarga', 'destinations', location: 'ISI: lokasi'),
            self::item('Destinasi Sejarah', 'sejarah', 'destinations', location: 'ISI: lokasi'),
            self::item('Destinasi Religi', 'religi', 'destinations', location: 'ISI: lokasi'),
            self::item('Destinasi Kuliner', 'kuliner', 'destinations', location: 'ISI: lokasi'),
            self::item('Destinasi Rekreasi', 'rekreasi', 'destinations', location: 'ISI: lokasi'),
        ];
    }

    public static function culture(): array
    {
        return array_map(fn ($t) => self::item($t, 'budaya', 'culture'),
            ['Payung Geulis', 'Kelom Geulis', 'Bordir', 'Anyaman', 'Batik', 'Kerajinan Lokal']);
    }

    public static function culinary(): array
    {
        return array_map(fn ($t) => self::item($t, 'kuliner', 'culinary'),
            ['Nasi Tutug Oncom', 'Mie Bakso', 'Bubur Ayam', 'Soto Tasik']);
    }

    public static function creative(): array
    {
        return [
            ['label' => 'UMKM'], ['label' => 'Kerajinan'], ['label' => 'Fashion'],
            ['label' => 'Kuliner'], ['label' => 'Industri Kreatif'],
        ];
    }

    public static function gallery(): array
    {
        return array_map(fn ($n) => self::item("Foto Tasikmalaya {$n}", 'galeri', 'gallery'), [1, 2, 3, 4, 5, 6]);
    }

    /** Nomor darurat nasional. Tambahkan nomor resmi rumah sakit setempat. */
    public static function emergency(): array
    {
        return [
            ['label' => 'Darurat Umum', 'phone' => '112', 'note' => 'Layanan darurat terpadu'],
            ['label' => 'Polisi', 'phone' => '110', 'note' => 'Kepolisian'],
            ['label' => 'Pemadam', 'phone' => '113', 'note' => 'Kebakaran'],
            ['label' => 'Ambulans', 'phone' => '118', 'note' => 'Gawat darurat medis'],
            ['label' => 'Rumah Sakit', 'phone' => null, 'note' => 'ISI: nomor RS resmi'],
        ];
    }

    /** Marker peta: item yang punya koordinat + titik pusat kota. */
    public static function markers(): array
    {
        $out = [[
            'title' => 'Pusat Kota Tasikmalaya', 'category' => 'layanan',
            'description' => 'Titik awal peta. Tambahkan lokasi lain lewat latitude/longitude di SiteData.',
            'location' => 'Kota Tasikmalaya', 'latitude' => -7.3274, 'longitude' => 108.2207,
        ]];
        $map = ['alam' => 'wisata', 'keluarga' => 'wisata', 'sejarah' => 'wisata', 'religi' => 'wisata', 'rekreasi' => 'wisata'];
        foreach ([...self::destinations(), ...self::culture(), ...self::culinary()] as $i) {
            if ($i['latitude'] === null || $i['longitude'] === null) {
                continue;
            }
            $out[] = ['category' => $map[$i['category']] ?? $i['category']] + $i;
        }

        return $out;
    }

    public static function all(): array
    {
        return [
            'destinations' => self::destinations(), 'culture' => self::culture(),
            'culinary' => self::culinary(), 'creative' => self::creative(),
            'gallery' => self::gallery(), 'emergency' => self::emergency(),
            'markers' => self::markers(),
        ];
    }
}
