import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

/** Desktop: scroll horizontal ter-pin. Seluler / reduced motion: scroll-snap biasa. */
export function init() {
    const wrap = document.querySelector('[data-hscroll]');
    const track = wrap?.querySelector('[data-track]');
    if (!track) return;
    gsap.registerPlugin(ScrollTrigger);
    gsap.matchMedia().add('(min-width: 1024px) and (prefers-reduced-motion: no-preference)', () => {
        const dist = () => Math.max(0, track.scrollWidth - wrap.clientWidth);
        gsap.to(track, {
            x: () => -dist(), ease: 'none',
            scrollTrigger: { trigger: wrap, start: 'top top+=64', end: () => '+=' + dist(), pin: true, scrub: 0.6, invalidateOnRefresh: true },
        });
    });
}
