import { ACESFilmicToneMapping, Clock, DirectionalLight, HemisphereLight, PMREMGenerator, Scene, SRGBColorSpace, WebGLRenderer } from 'three';
import { RoomEnvironment } from 'three/examples/jsm/environments/RoomEnvironment.js';
import { createCamera } from './camera.js';
import { loadTata } from './tata.js';
import { loadTiti } from './titi.js';
import { bindScroll } from './animation.js';
import { bindPointer } from './interaction.js';

/**
 * Mengembalikan true jika minimal satu karakter berhasil tampil.
 * Jika WebGL / GLB gagal -> false, poster statis tetap terlihat dan website jalan normal.
 */
export async function initStage({ canvas, onProgress, reduce }) {
    const weak = innerWidth < 768 || (navigator.hardwareConcurrency ?? 8) <= 4;
    let renderer;
    try {
        renderer = new WebGLRenderer({ canvas, alpha: true, antialias: !weak, powerPreference: 'high-performance' });
    } catch (e) {
        console.warn('[3D] WebGL tidak tersedia, memakai poster statis.', e);
        return false;
    }
    renderer.setPixelRatio(Math.min(devicePixelRatio, weak ? 1 : 1.5));
    renderer.outputColorSpace = SRGBColorSpace;
    renderer.toneMapping = ACESFilmicToneMapping;

    const scene = new Scene();
    const camera = createCamera();
    scene.environment = new PMREMGenerator(renderer).fromScene(new RoomEnvironment(), 0.04).texture;
    scene.add(new HemisphereLight(0xffffff, 0x0f5c55, 0.7));
    const key = new DirectionalLight(0xfff1d6, 2.2);
    key.position.set(3, 5, 6);
    scene.add(key);

    const size = () => { renderer.setSize(innerWidth, innerHeight, false); camera.aspect = innerWidth / innerHeight; camera.updateProjectionMatrix(); };
    size();
    addEventListener('resize', size);

    const prog = [0, 0];
    const report = (i) => (f) => { prog[i] = f; onProgress?.((prog[0] + prog[1]) / 2); };
    const results = await Promise.allSettled([loadTata(report(0), reduce), loadTiti(report(1), reduce)]);
    const [tata, titi] = results.map((r, i) => {
        if (r.status === 'fulfilled') return r.value;
        console.warn(`[3D] ${i ? 'titi' : 'tata'}.glb gagal dimuat (cek public/assets/models/):`, r.reason?.message ?? r.reason);
        return null;
    });
    const mascots = [tata, titi].filter(Boolean);
    if (!mascots.length) { renderer.dispose(); return false; }
    mascots.forEach((m) => scene.add(m.root));

    bindScroll({ tata, titi, camera, reduce });
    const pointer = bindPointer({ mascots, camera, enabled: !reduce && matchMedia('(hover: hover)').matches });

    const clock = new Clock();
    renderer.setAnimationLoop(() => {
        if (document.hidden) return;
        const dt = clock.getDelta();
        mascots.forEach((m) => m.update(dt));
        pointer();
        renderer.render(scene, camera);
    });
    return true;
}
