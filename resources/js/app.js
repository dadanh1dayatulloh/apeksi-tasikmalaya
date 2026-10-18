import L from 'leaflet';
import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

const $ = (s, c = document) => c.querySelector(s);
const $$ = (s, c = document) => [...c.querySelectorAll(s)];

/* Mobile menu */
const menuBtn = $('[data-menu-toggle]');
const menu = $('#mobile-menu');
if (menuBtn && menu) {
    const setOpen = (open) => {
        menuBtn.setAttribute('aria-expanded', String(open));
        menu.classList.toggle('-translate-y-4', !open);
        menu.classList.toggle('invisible', !open);
        menu.classList.toggle('opacity-0', !open);
        menu.classList.toggle('pointer-events-none', !open);
        document.body.classList.toggle('overflow-hidden', open);
    };
    menuBtn.addEventListener('click', () => setOpen(menuBtn.getAttribute('aria-expanded') !== 'true'));
    $$('[data-menu-link]', menu).forEach((a) => a.addEventListener('click', () => setOpen(false)));
    document.addEventListener('keydown', (e) => e.key === 'Escape' && setOpen(false));
}

/* Navbar solid background after scroll */
const nav = $('[data-navbar]');
if (nav) {
    const onScroll = () => nav.classList.toggle('is-scrolled', window.scrollY > 40);
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}

/* Scroll reveal */
const revealEls = $$('.reveal');
if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
        entries.forEach((en) => { if (en.isIntersecting) { en.target.classList.add('is-visible'); io.unobserve(en.target); } });
    }, { threshold: 0.08 });
    revealEls.forEach((el) => io.observe(el));
} else revealEls.forEach((el) => el.classList.add('is-visible'));

/* Generic filter: [data-filter-group] buttons -> [data-filter-item][data-category] */
$$('[data-filter-group]').forEach((group) => {
    const target = $(group.dataset.filterGroup);
    if (!target) return;
    $$('button[data-filter]', group).forEach((btn) => btn.addEventListener('click', () => {
        $$('button[data-filter]', group).forEach((b) => b.setAttribute('aria-pressed', String(b === btn)));
        const val = btn.dataset.filter;
        $$('[data-filter-item]', target).forEach((it) => {
            it.hidden = !(val === 'Semua' || it.dataset.category === val);
        });
    }));
});

/* Culinary search */
const search = $('[data-culinary-search]');
if (search) search.addEventListener('input', () => {
    const q = search.value.trim().toLowerCase();
    $$('#culinary-list [data-filter-item]').forEach((it) => {
        it.hidden = q !== '' && !it.textContent.toLowerCase().includes(q);
    });
});

/* Timeline tabs (mobile) */
$$('[data-day-tab]').forEach((tab) => tab.addEventListener('click', () => {
    $$('[data-day-tab]').forEach((t) => t.setAttribute('aria-selected', String(t === tab)));
    $$('.day-card').forEach((c) => c.classList.toggle('is-active', c.dataset.day === tab.dataset.dayTab));
}));

/* Craft carousel */
const craftEl = $('.craft-swiper');
if (craftEl) new Swiper(craftEl, {
    modules: [Navigation],
    slidesPerView: 1.15, spaceBetween: 16,
    navigation: { prevEl: '[data-craft-prev]', nextEl: '[data-craft-next]' },
    breakpoints: { 640: { slidesPerView: 2.1 }, 1024: { slidesPerView: 4, spaceBetween: 20 } },
});

/* Map */
const mapEl = $('#tasik-map');
if (mapEl) {
    const points = JSON.parse(mapEl.dataset.points || '[]');
    const legend = JSON.parse(mapEl.dataset.legend || '{}');
    const map = L.map(mapEl, { scrollWheelZoom: false, zoomControl: true }).setView([-7.3274, 108.2207], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19, attribution: '&copy; OpenStreetMap contributors',
    }).addTo(map);
    points.forEach((p) => {
        const color = legend[p.type]?.color || '#0b2a4a';
        const icon = L.divIcon({ className: '', html: `<div class="pin" style="background:${color}"></div>`, iconSize: [28, 28], iconAnchor: [14, 28] });
        L.marker([p.lat, p.lng], { icon, title: p.name }).addTo(map).bindPopup(`<strong>${p.name}</strong><br>${legend[p.type]?.label ?? ''}`);
    });
    setTimeout(() => map.invalidateSize(), 300);
    window.addEventListener('resize', () => map.invalidateSize());
}

/* Video modal */
const modal = $('#video-modal');
if (modal) {
    const frame = $('[data-video-frame]', modal);
    const open = () => {
        const src = modal.dataset.src;
        frame.innerHTML = src
            ? `<iframe class="size-full" src="${src}" title="Video Kota Tasikmalaya" allow="autoplay; encrypted-media" allowfullscreen></iframe>`
            : '<p class="p-8 text-center text-white">Video belum tersedia. Isi atribut data-src pada #video-modal.</p>';
        modal.classList.remove('hidden'); modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');
        $('[data-video-close]', modal).focus();
    };
    const close = () => {
        modal.classList.add('hidden'); modal.classList.remove('flex');
        frame.innerHTML = ''; document.body.classList.remove('overflow-hidden');
    };
    $$('[data-video-open]').forEach((b) => b.addEventListener('click', open));
    $$('[data-video-close]', modal).forEach((b) => b.addEventListener('click', close));
    modal.addEventListener('click', (e) => e.target === modal && close());
    document.addEventListener('keydown', (e) => e.key === 'Escape' && close());
}

/* Back to top */
const topBtn = $('[data-back-top]');
if (topBtn) {
    window.addEventListener('scroll', () => topBtn.classList.toggle('hidden', window.scrollY < 600), { passive: true });
    topBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}
