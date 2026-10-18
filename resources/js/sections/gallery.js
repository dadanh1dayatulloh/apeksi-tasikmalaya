/** Lightbox memakai <dialog> bawaan browser (Esc menutup, fokus terkelola). */
export function init() {
    const dlg = document.querySelector('[data-lightbox]');
    if (!dlg) return;
    const img = dlg.querySelector('img');
    const cap = dlg.querySelector('[data-cap]');
    document.querySelectorAll('[data-photo]').forEach((b) => b.addEventListener('click', () => {
        img.src = b.dataset.photo; img.alt = b.dataset.title; cap.textContent = b.dataset.title;
        dlg.showModal();
    }));
    dlg.addEventListener('click', (e) => { if (e.target === dlg) dlg.close(); });
}
