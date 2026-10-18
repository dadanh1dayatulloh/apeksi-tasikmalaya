/** Speech bubble Tata/Titi: hanya muncul sekali pada section yang punya data-tata / data-titi. */
export function init() {
    const box = document.querySelector('[data-guide]');
    if (!box) return;
    const who = box.querySelector('[data-who]');
    const txt = box.querySelector('[data-text]');
    let timer;
    const say = (name, text) => {
        who.textContent = name; txt.textContent = text; box.dataset.show = '1';
        clearTimeout(timer); timer = setTimeout(() => (box.dataset.show = '0'), 6500);
    };
    const io = new IntersectionObserver((entries) => entries.forEach((e) => {
        if (!e.isIntersecting) return;
        io.unobserve(e.target);
        const { tata, titi } = e.target.dataset;
        if (tata) { say('Tata', tata); if (titi) setTimeout(() => say('Titi', titi), 3500); }
        else if (titi) say('Titi', titi);
    }), { threshold: 0.45 });
    document.querySelectorAll('[data-tata],[data-titi]').forEach((s) => io.observe(s));
    box.querySelector('[data-close]')?.addEventListener('click', () => (box.dataset.show = '0'));
}
