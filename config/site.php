<?php

/*
| Static data (phase 1). Each key maps 1:1 to a future Eloquent model:
| guides, destinations, crafts, culinary, hotels, events, gallery,
| emergency, investments. Replace config('site.x') with Model::all().
*/
$img = fn (string $p) => 'images/'.$p;

return [
    'event' => [
        'name'  => 'APEKSI Komwil III 2026',
        'dates' => '21 — 23 OKTOBER 2026',
        'stats' => [
            ['icon' => 'users',    'label' => '25 Kota'],
            ['icon' => 'users',    'label' => '± 250 Delegasi'],
            ['icon' => 'bed',      'label' => 'Hotel Santika Tasikmalaya'],
        ],
    ],

    'nav' => [
        ['label' => 'Beranda',     'href' => '#beranda'],
        ['label' => 'APEKSI 2026', 'href' => '#apeksi'],
        ['label' => 'Jelajahi',    'href' => '#jelajahi'],
        ['label' => 'City Guide',  'href' => '#city-guide'],
        ['label' => 'Peta',        'href' => '#peta'],
        ['label' => 'Investasi',   'href' => '#investasi'],
    ],

    'guides' => [
        ['title' => 'Digital Guide',          'description' => 'Panduan lengkap selama kegiatan',      'image' => $img('general/guide-1.jpg'), 'icon' => 'phone',    'tint' => 'bg-blue-100 text-blue-700',     'href' => '#digital-guide'],
        ['title' => 'Hotel & Accommodation',  'description' => 'Informasi hotel dan fasilitas',        'image' => $img('general/guide-2.jpg'), 'icon' => 'bed',      'tint' => 'bg-amber-100 text-amber-700',   'href' => '#istirahat'],
        ['title' => 'Culinary Map',           'description' => 'Temukan kuliner khas Tasikmalaya',     'image' => $img('general/guide-3.jpg'), 'icon' => 'map',      'tint' => 'bg-emerald-100 text-emerald-700','href' => '#kuliner'],
        ['title' => 'Explore Tasikmalaya',    'description' => 'Destinasi budaya, alam dan UMKM',      'image' => $img('general/guide-4.jpg'), 'icon' => 'pin',      'tint' => 'bg-teal-100 text-teal-700',     'href' => '#jelajahi'],
        ['title' => 'APEKSI Agenda',          'description' => 'Agenda lengkap dan informasi acara',   'image' => $img('general/guide-5.jpg'), 'icon' => 'calendar', 'tint' => 'bg-rose-100 text-rose-700',     'href' => '#apeksi'],
        ['title' => 'Transportation',         'description' => 'Informasi transportasi dan mobilitas', 'image' => $img('general/guide-6.jpg'), 'icon' => 'bus',      'tint' => 'bg-orange-100 text-orange-700', 'href' => '#journey'],
    ],

    'events' => [
        ['day' => '01', 'date' => '21 October', 'title' => 'Arrival',                   'image' => $img('general/day-1.jpg'),
         'items' => ['Registration', 'Hotel Check-in', 'Welcoming / Gala Dinner']],
        ['day' => '02', 'date' => '22 October', 'title' => 'Connect & Collaborate',     'image' => $img('general/day-2.jpg'),
         'items' => ['Official Opening', 'Workshop Digital Transformation', 'Forum Kepala Daerah', 'Policy Brief', 'City Tour & UMKM Visit']],
        ['day' => '03', 'date' => '23 October', 'title' => 'Experience & Farewell',     'image' => $img('general/day-3.jpg'),
         'items' => ['Morning Exercise', 'Ramah Tamah', 'Oleh-oleh Tasikmalaya', 'Departure']],
    ],

    'discover' => [
        ['title' => 'Culture',     'description' => 'Tradisi, seni dan budaya Sunda yang hidup dalam keseharian masyarakat.', 'image' => $img('culture/culture-cover.jpg'),       'href' => '#budaya'],
        ['title' => 'Craft',       'description' => 'Karya lokal yang menjadi identitas kreativitas Tasikmalaya.',            'image' => $img('craft/craft-cover.jpg'),           'href' => '#craft'],
        ['title' => 'Culinary',    'description' => 'Temukan cita rasa khas Tasikmalaya.',                                    'image' => $img('culinary/culinary-cover.jpg'),     'href' => '#kuliner'],
        ['title' => 'Destination', 'description' => 'Jelajahi destinasi pilihan di Kota Tasikmalaya.',                        'image' => $img('destination/destination-cover.jpg'),'href' => '#peta'],
    ],

    'crafts' => [
        ['title' => 'Bordir Kawalu',  'description' => 'Keindahan dalam setiap jahitan yang penuh makna.',     'image' => $img('craft/bordir-kawalu.jpg')],
        ['title' => 'Kelom Geulis',   'description' => 'Alas kaki khas yang mendunia.',                        'image' => $img('craft/kelom-geulis.jpg')],
        ['title' => 'Payung Geulis',  'description' => 'Simbol keselarasan dan keanggunan Tasikmalaya.',       'image' => $img('craft/payung-geulis.jpg')],
        ['title' => 'Mendong',        'description' => 'Karya anyaman yang klasik dan modern.',                'image' => $img('craft/mendong.jpg')],
    ],

    'culinaryFilters' => ['Semua', 'Kuliner Khas', 'Restoran', 'Coffee', 'Oleh-oleh', 'UMKM'],

    'culinary' => [
        ['title' => 'Nasi Cikur',        'category' => 'Kuliner Khas', 'rating' => 4.8, 'distance' => '1.2 km', 'image' => $img('culinary/nasi-cikur.jpg'),   'lat' => -7.3274, 'lng' => 108.2207],
        ['title' => 'Kupat Tahu Tasik',  'category' => 'Kuliner Khas', 'rating' => 4.6, 'distance' => '2.1 km', 'image' => $img('culinary/kupat-tahu.jpg'),   'lat' => -7.3195, 'lng' => 108.2262],
        ['title' => 'Sate Maranggi',     'category' => 'Restoran',     'rating' => 4.7, 'distance' => '3.4 km', 'image' => $img('culinary/sate-maranggi.jpg'),'lat' => -7.3342, 'lng' => 108.2150],
    ],

    'featuredPlace' => [
        'title' => 'Kedai Teh Sawargi', 'category' => 'Coffee & Resto', 'rating' => 4.5, 'reviews' => 320,
        'distance' => '1.2 km', 'address' => 'Jl. HZ Mustofa No. 12', 'image' => 'images/culinary/kedai-teh-sawargi.jpg',
        'lat' => -7.3262, 'lng' => 108.2231,
    ],

    // Dummy map points. Replace with real coordinates.
    'mapPoints' => [
        ['name' => 'Nasi Cikur',          'type' => 'culinary',    'lat' => -7.3274, 'lng' => 108.2207],
        ['name' => 'Kupat Tahu Tasik',    'type' => 'culinary',    'lat' => -7.3195, 'lng' => 108.2262],
        ['name' => 'Kedai Teh Sawargi',   'type' => 'culinary',    'lat' => -7.3262, 'lng' => 108.2231],
        ['name' => 'Hotel Santika',       'type' => 'hotel',       'lat' => -7.3231, 'lng' => 108.2203],
        ['name' => 'Balai Kota',          'type' => 'event',       'lat' => -7.3496, 'lng' => 108.2204],
        ['name' => 'Kampung Kelom Geulis','type' => 'umkm',        'lat' => -7.3402, 'lng' => 108.2311],
        ['name' => 'Situ Gede',           'type' => 'destination', 'lat' => -7.3667, 'lng' => 108.2025],
    ],
    'mapLegend' => [
        'culinary' => ['label' => 'Culinary', 'color' => '#0b2a4a'],
        'hotel' => ['label' => 'Hotel', 'color' => '#2f6fdb'],
        'destination' => ['label' => 'Destination', 'color' => '#2f8f5b'],
        'umkm' => ['label' => 'UMKM', 'color' => '#7a4bc2'],
        'event' => ['label' => 'Event', 'color' => '#e05a5a'],
    ],

    'journey' => [
        ['label' => 'Hotel',          'icon' => 'bed'],
        ['label' => 'Balai Kota',     'icon' => 'building'],
        ['label' => 'Pusat Kerajinan','icon' => 'bag'],
        ['label' => 'Destinasi Kuliner','icon' => 'utensils'],
        ['label' => 'Destinasi Budaya','icon' => 'pin'],
        ['label' => 'Pusat Oleh-oleh','icon' => 'gift'],
    ],
    'journeyMeta' => [
        ['icon' => 'clock', 'label' => '4–6 Destinasi'],
        ['icon' => 'clock', 'label' => '± 5 Jam'],
        ['icon' => 'bus',   'label' => 'Transportasi Disiapkan'],
    ],

    'hotel' => [
        'name' => 'Hotel Santika Tasikmalaya', 'stars' => 5, 'image' => 'images/hotel/santika.jpg',
        'description' => 'Lokasi strategis dengan fasilitas lengkap untuk kenyamanan delegasi.',
        'facilities' => [['icon' => 'utensils', 'label' => 'Restaurant'], ['icon' => 'parking', 'label' => 'Parking'], ['icon' => 'wifi', 'label' => 'WiFi'], ['icon' => 'users', 'label' => 'Meeting Room']],
        'maps' => 'https://www.openstreetmap.org/?mlat=-7.3231&mlon=108.2203#map=16/-7.3231/108.2203',
    ],

    'investments' => [
        ['title' => 'Investment',       'description' => 'Explore potential investment sectors.',        'image' => $img('general/invest-investment.jpg'),       'icon' => 'trend'],
        ['title' => 'UMKM',             'description' => 'Meet local businesses and products.',          'image' => $img('general/invest-umkm.jpg'),             'icon' => 'bag'],
        ['title' => 'Creative Economy', 'description' => "Discover Tasikmalaya's creative industries.", 'image' => $img('general/invest-creative-economy.jpg'),'icon' => 'spark'],
    ],

    'digitalCategories' => [
        ['label' => 'Welcome Guide', 'icon' => 'book'], ['label' => 'Hotel', 'icon' => 'bed'],
        ['label' => 'Culinary', 'icon' => 'utensils'], ['label' => 'Map', 'icon' => 'pin'],
        ['label' => 'Transportation', 'icon' => 'bus'], ['label' => 'Emergency', 'icon' => 'shield'],
        ['label' => 'Places of Worship', 'icon' => 'building'], ['label' => 'Important Contacts', 'icon' => 'phone'],
    ],

    // DUMMY contacts - replace with official numbers before launch.
    'emergency' => [
        ['title' => 'Medical Emergency', 'number' => '119',           'icon' => 'plus',    'tint' => 'bg-rose-100 text-rose-600'],
        ['title' => 'Ambulance',         'number' => '118',           'icon' => 'bus',     'tint' => 'bg-red-100 text-red-600'],
        ['title' => 'Security',          'number' => '110',           'icon' => 'shield',  'tint' => 'bg-slate-100 text-slate-600'],
        ['title' => 'Transportation',    'number' => '0812 3456 7890','icon' => 'bus',     'tint' => 'bg-slate-100 text-slate-600'],
        ['title' => 'Event Helpdesk',    'number' => '0812 3456 7890','icon' => 'phone',   'tint' => 'bg-blue-100 text-blue-600'],
    ],

    'galleryFilters' => ['Semua', 'Budaya', 'Kuliner', 'Destinasi', 'UMKM', 'APEKSI'],
    'gallery' => [
        ['alt' => 'Pengrajin lokal',       'cat' => 'UMKM',      'image' => 'images/gallery/gallery-1.jpg',  'span' => 'row-span-2'],
        ['alt' => 'Penari tradisional',    'cat' => 'Budaya',    'image' => 'images/gallery/gallery-2.jpg',  'span' => 'row-span-2'],
        ['alt' => 'Payung geulis kuning',  'cat' => 'Budaya',    'image' => 'images/gallery/gallery-3.jpg',  'span' => 'row-span-2'],
        ['alt' => 'Parade payung',         'cat' => 'Budaya',    'image' => 'images/gallery/gallery-5.jpg',  'span' => 'row-span-2'],
        ['alt' => 'Lanskap Tasikmalaya',   'cat' => 'Destinasi', 'image' => 'images/gallery/gallery-6.jpg',  'span' => 'row-span-2'],
        ['alt' => 'Pengrajin anyaman',     'cat' => 'UMKM',      'image' => 'images/gallery/gallery-7.jpg',  'span' => 'row-span-2'],
        ['alt' => 'Hidangan khas',         'cat' => 'Kuliner',   'image' => 'images/gallery/gallery-8.jpg',  'span' => 'row-span-2'],
        ['alt' => 'Kuliner Tasikmalaya',   'cat' => 'Kuliner',   'image' => 'images/gallery/gallery-9.jpg',  'span' => 'row-span-2'],
        ['alt' => 'Masjid Agung malam hari','cat' => 'APEKSI',   'image' => 'images/gallery/gallery-10.jpg', 'span' => 'row-span-2'],
    ],

    'footer' => [
        'explore'     => ['APEKSI 2026', 'Agenda', 'Jelajahi', 'City Guide'],
        'information' => ['Hotel', 'Transportasi', 'Emergency', 'Contact'],
        'social'      => ['instagram', 'x', 'facebook', 'youtube'],
    ],
];
