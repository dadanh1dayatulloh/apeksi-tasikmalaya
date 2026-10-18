// Ubah pertanyaan di sini. a = indeks jawaban benar.
const QUESTIONS = [
    { q: 'Payung berhias lukisan tangan khas Tasikmalaya disebut apa?', o: ['Payung Geulis', 'Payung Teduh', 'Payung Lipat'], a: 0 },
    { q: 'Alas kaki kayu berhias lukisan khas Tasikmalaya disebut apa?', o: ['Sandal Jepit', 'Kelom Geulis', 'Bakiak Polos'], a: 1 },
    { q: 'Bahan khas apa yang ditumbuk bersama nasi pada Nasi Tutug Oncom?', o: ['Tempe', 'Tahu', 'Oncom'], a: 2 },
    { q: 'Tasikmalaya berada di provinsi mana?', o: ['Jawa Barat', 'Jawa Tengah', 'Banten'], a: 0 },
];
const RESULT = [
    ['Tata', 'Yuk, jalan-jalan lagi. Masih banyak yang bisa kamu temukan di Tasikmalaya!'],
    ['Titi', 'Lumayan! Kamu sudah mulai kenal Tasikmalaya.'],
    ['Tata', 'Hebat! Kamu sudah cukup kenal Tasikmalaya.'],
];

export function init() {
    const root = document.querySelector('[data-quiz]');
    if (!root) return;
    const q = root.querySelector('[data-q]');
    const opts = root.querySelector('[data-opts]');
    const step = root.querySelector('[data-step]');
    const react = root.querySelector('[data-react]');
    let i = 0, score = 0;

    function show() {
        react.textContent = '';
        if (i >= QUESTIONS.length) return finish();
        const cur = QUESTIONS[i];
        step.textContent = `Pertanyaan ${i + 1} dari ${QUESTIONS.length}`;
        q.textContent = cur.q;
        opts.innerHTML = '';
        cur.o.forEach((label, idx) => {
            const b = document.createElement('button');
            b.type = 'button';
            b.textContent = label;
            b.className = 'rounded-full border border-ink/20 px-5 py-3 text-left font-medium transition hover:border-ink focus-visible:border-ink';
            b.onclick = () => answer(idx, b);
            opts.append(b);
        });
    }
    function answer(idx, btn) {
        const ok = idx === QUESTIONS[i].a;
        if (ok) score++;
        [...opts.children].forEach((b, n) => {
            b.disabled = true;
            if (n === QUESTIONS[i].a) b.classList.add('bg-moss', 'text-paper', 'border-moss');
        });
        if (!ok) btn.classList.add('bg-payung', 'text-paper', 'border-payung');
        react.textContent = ok ? 'Tata: Betul sekali!' : 'Titi: Hampir! Jawaban yang benar sudah ditandai.';
        setTimeout(() => { i++; show(); }, 1500);
    }
    function finish() {
        const r = RESULT[score >= QUESTIONS.length - 1 ? 2 : score >= 2 ? 1 : 0];
        step.textContent = `Skor kamu ${score} dari ${QUESTIONS.length}`;
        q.textContent = r[1];
        react.textContent = r[0];
        opts.innerHTML = '';
        const b = document.createElement('button');
        b.type = 'button'; b.textContent = 'Main lagi';
        b.className = 'rounded-full bg-ink px-6 py-3 font-semibold text-paper';
        b.onclick = () => { i = 0; score = 0; show(); };
        opts.append(b);
    }
    show();
}
