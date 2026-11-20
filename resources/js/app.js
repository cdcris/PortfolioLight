import './intro.js';

const gallery = document.querySelector('[data-project-reel]');
const motionToggle = gallery?.querySelector('[data-reel-toggle]');

motionToggle?.addEventListener('click', () => {
    const paused = gallery.toggleAttribute('data-paused');
    const label = paused ? 'Resume gallery motion' : 'Pause gallery motion';

    motionToggle.setAttribute('aria-label', label);
    motionToggle.title = label;
});

const hero = document.querySelector('.hero');
const backToTop = document.querySelector('[data-back-to-top]');

if (hero && backToTop) {
    const observer = new IntersectionObserver(([entry]) => {
        backToTop.hidden = entry.isIntersecting;
    });

    observer.observe(hero);
}
