export function init() {
    const nav = document.querySelector('[data-nav]');
    if (!nav) return;
    const solid = nav.dataset.solid === '1';
    const set = () => nav.classList.toggle('is-solid', solid || scrollY > 40);
    set();
    addEventListener('scroll', set, { passive: true });

    const btn = document.querySelector('[data-menu-btn]');
    const menu = document.querySelector('[data-menu]');
    const toggle = (open) => { menu.classList.toggle('hidden', !open); btn.setAttribute('aria-expanded', String(open)); };
    btn?.addEventListener('click', () => toggle(menu.classList.contains('hidden')));
    menu?.querySelectorAll('a').forEach((a) => a.addEventListener('click', () => toggle(false)));
    addEventListener('keydown', (e) => e.key === 'Escape' && toggle(false));
}
