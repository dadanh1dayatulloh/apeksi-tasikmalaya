/** Karakter sedikit menoleh mengikuti pointer; kamera parallax halus. Nonaktif di layar sentuh / reduced motion. */
export function bindPointer({ mascots, camera, enabled }) {
    const p = { x: 0, y: 0 };
    if (enabled) {
        addEventListener('pointermove', (e) => {
            p.x = (e.clientX / innerWidth) * 2 - 1;
            p.y = (e.clientY / innerHeight) * 2 - 1;
        }, { passive: true });
    }
    return function update() {
        if (!enabled) return;
        mascots.forEach((m) => {
            m.pivot.rotation.y += (p.x * 0.35 - m.pivot.rotation.y) * 0.06;
            m.pivot.rotation.x += (p.y * 0.08 - m.pivot.rotation.x) * 0.06;
        });
        camera.position.x += (p.x * 0.25 - camera.position.x) * 0.04;
        camera.position.y += (-p.y * 0.12 - camera.position.y) * 0.04;
        camera.lookAt(0, 0, 0);
    };
}
