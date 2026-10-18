import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

const COLORS = { wisata: '#0f5c55', kuliner: '#d12b6b', budaya: '#a86a00', hotel: '#4f5b57', layanan: '#c2410c' };

export function init() {
    const el = document.getElementById('map');
    const raw = document.getElementById('map-data');
    if (!el || !raw) return;
    const data = JSON.parse(raw.textContent);
    const panel = document.querySelector('[data-map-panel]');

    const map = L.map(el, { scrollWheelZoom: false }).setView(data.center, 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19, attribution: '&copy; OpenStreetMap' }).addTo(map);

    const markers = data.markers.map((m) => {
        const icon = L.divIcon({
            className: '',
            html: `<span style="display:block;width:22px;height:22px;border-radius:50% 50% 50% 0;rotate:-45deg;background:${COLORS[m.category] ?? '#10201c'};border:3px solid #f1f3ee;box-shadow:0 2px 6px #0005"></span>`,
            iconSize: [22, 22], iconAnchor: [11, 22],
        });
        const mk = L.marker([m.latitude, m.longitude], { icon, title: m.title, alt: m.title }).addTo(map);
        mk.on('click', () => {
            panel.innerHTML = '';
            const h = Object.assign(document.createElement('h3'), { className: 'font-display text-2xl font-bold', textContent: m.title });
            const c = Object.assign(document.createElement('p'), { className: 'mt-1 text-sm font-semibold capitalize text-moss', textContent: m.category });
            const d = Object.assign(document.createElement('p'), { className: 'mt-3', textContent: m.description });
            const a = Object.assign(document.createElement('p'), { className: 'mt-2 text-sm text-stone', textContent: m.location ?? '' });
            const l = Object.assign(document.createElement('a'), {
                className: 'mt-4 inline-block rounded-full bg-ink px-5 py-2.5 text-sm font-semibold text-paper', textContent: 'Buka rute',
                href: `https://www.google.com/maps/search/?api=1&query=${m.latitude},${m.longitude}`, target: '_blank', rel: 'noopener',
            });
            panel.append(h, c, d, a, l);
        });
        return { m, mk };
    });

    document.querySelectorAll('[data-cat]').forEach((b) => b.addEventListener('click', () => {
        document.querySelectorAll('[data-cat]').forEach((x) => x.setAttribute('aria-pressed', String(x === b)));
        markers.forEach(({ m, mk }) => (b.dataset.cat === 'all' || m.category === b.dataset.cat ? mk.addTo(map) : mk.remove()));
    }));
    setTimeout(() => map.invalidateSize(), 300);
}
