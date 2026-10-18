import { AnimationMixer, Box3, Group, Vector3 } from 'three';
import gsap from 'gsap';
import { loadGLB } from './loader.js';

const HEIGHT = 2.4; // tinggi seragam di scene

/**
 * Struktur: root (pose scroll) > pivot (ikut pointer) > model (GLB asli).
 * Origin root ada di telapak kaki karakter.
 */
export async function createMascot(url, onProgress, reduceMotion) {
    const gltf = await loadGLB(url, onProgress);
    const model = gltf.scene;

    const box = new Box3().setFromObject(model);
    const size = box.getSize(new Vector3());
    const k = HEIGHT / (size.y || 1);
    model.scale.setScalar(k);
    box.setFromObject(model);
    const c = box.getCenter(new Vector3());
    model.position.set(-c.x, -box.min.y, -c.z);

    const pivot = new Group().add(model);
    const root = new Group().add(pivot);

    // Animasi dari file Blender (rig + action) dipakai jika ada.
    let mixer = null;
    if (gltf.animations.length) {
        mixer = new AnimationMixer(model);
        const clip = gltf.animations.find((a) => /idle|stand|wait/i.test(a.name)) ?? gltf.animations[0];
        mixer.clipAction(clip).play();
    } else if (!reduceMotion) {
        // Tidak ada animasi di GLB: idle sederhana (napas + melayang pelan).
        gsap.to(pivot.position, { y: 0.06, duration: 1.8, yoyo: true, repeat: -1, ease: 'sine.inOut' });
        gsap.to(model.scale, { y: k * 1.015, duration: 1.8, yoyo: true, repeat: -1, ease: 'sine.inOut' });
    }

    model.traverse((o) => { if (o.isMesh) { o.frustumCulled = true; } });
    return { root, pivot, model, update: (dt) => mixer?.update(dt) };
}
