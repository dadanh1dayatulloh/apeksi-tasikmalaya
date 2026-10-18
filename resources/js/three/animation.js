import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { CAM_Z, halfWidth } from './camera.js';

gsap.registerPlugin(ScrollTrigger);

/**
 * Pose per section: [x (fraksi setengah lebar layar), y, skala]. Skala 0 = disembunyikan.
 * Ubah angka di sini untuk memindahkan Tata/Titi.
 */
const DESKTOP = {
    hero:    { tata: [-0.2, -1.55, 1.12], titi: [0.2, -1.55, 1] },
    kenali:  { tata: [0.8, -2.0, 0.62],   titi: [0, 0, 0] },
    budaya:  { tata: [0, 0, 0],           titi: [0.86, -2.2, 0.5] },
    destinasi: { tata: [-0.86, -2.1, 0.55], titi: [0, 0, 0] },
    kuliner: { tata: [0, 0, 0],           titi: [0.82, -2.0, 0.65] },
    kreatif: { tata: [-0.82, -2.0, 0.6],  titi: [0.82, -2.0, 0.6] },
    peta:    { tata: [0, 0, 0],           titi: [0, 0, 0] },
    bantuan: { tata: [0.84, -2.1, 0.55],  titi: [0, 0, 0] },
    kuis:    { tata: [-0.7, -1.9, 0.7],   titi: [0.7, -1.9, 0.7] },
    penutup: { tata: [-0.2, -1.5, 1.1],   titi: [0.2, -1.5, 1] },
};
// Seluler: hanya tampil di hero & penutup, lebih kecil.
const HIDE = [0, 0, 0];
const MOBILE = {
    hero:    { tata: [-0.3, -1.1, 0.78], titi: [0.34, -1.1, 0.7] },
    penutup: { tata: [-0.3, -1.1, 0.75], titi: [0.34, -1.1, 0.68] },
};

export function bindScroll({ tata, titi, camera, reduce }) {
    let current = 'hero';
    const isMobile = () => innerWidth < 768;
    const dur = (d) => (reduce ? 0 : d);

    function pose(id, d = 1.2) {
        const table = isMobile() ? MOBILE : DESKTOP;
        const set = table[id] ?? {};
        const hw = halfWidth(camera);
        [['tata', tata], ['titi', titi]].forEach(([k, m]) => {
            if (!m) return;
            const [x, y, s] = set[k] ?? HIDE;
            gsap.to(m.root.position, { x: x * hw, y, duration: dur(d), ease: 'power3.out', overwrite: 'auto' });
            gsap.to(m.root.scale, { x: s || 0.0001, y: s || 0.0001, z: s || 0.0001, duration: dur(d), ease: 'power3.out', overwrite: 'auto' });
            gsap.to(m.root.rotation, { y: x > 0 ? -0.45 : x < 0 ? 0.45 : 0, duration: dur(d), ease: 'power3.out', overwrite: 'auto' });
        });
        // Kamera mundur sedikit saat meninggalkan hero (zoom out sinematik)
        gsap.to(camera.position, { z: id === 'hero' || id === 'penutup' ? CAM_Z : CAM_Z + 1.2, duration: dur(1.6), ease: 'sine.inOut', overwrite: 'auto' });
    }

    Object.keys(DESKTOP).forEach((id) => {
        const el = document.getElementById(id);
        if (!el) return;
        ScrollTrigger.create({
            trigger: el, start: 'top 55%', end: 'bottom 55%',
            onToggle: (self) => { if (self.isActive) { current = id; pose(id); } },
        });
    });

    pose('hero', 0);
    addEventListener('resize', () => pose(current, 0.4));
}
