const dialog = document.querySelector('[data-intro-reel]');

if (dialog) {
    const scenes = [...dialog.querySelectorAll('[data-caption]')];
    const caption = dialog.querySelector('[data-intro-caption]');
    const toggle = dialog.querySelector('[data-intro-toggle]');
    const seek = dialog.querySelector('[data-intro-seek]');
    const time = dialog.querySelector('[data-intro-time]');
    const sceneDuration = 4.5;
    const duration = scenes.length * sceneDuration;
    let position = 0;
    let activeScene = -1;
    let lastSecond = -1;
    let startedAt = 0;
    let animationFrame;
    let opener;

    seek.max = duration;

    function formatTime(seconds) {
        return `${Math.floor(seconds / 60)}:${String(Math.floor(seconds % 60)).padStart(2, '0')}`;
    }

    function render() {
        const index = Math.min(Math.floor(position / sceneDuration), scenes.length - 1);
        const second = Math.floor(position);

        if (index !== activeScene) {
            scenes.forEach((scene, number) => scene.toggleAttribute('data-active', number === index));
            caption.textContent = scenes[index].dataset.caption;
            activeScene = index;
        }

        if (second !== lastSecond) {
            time.textContent = `${formatTime(second)} / ${formatTime(duration)}`;
            seek.setAttribute('aria-valuetext', `${second} of ${duration} seconds`);
            lastSecond = second;
        }

        const fraction = (position - index * sceneDuration) / sceneDuration;
        scenes[index].style.setProperty('--reel-scale', 1 + fraction * .04);
        seek.value = position;
    }

    function pause() {
        cancelAnimationFrame(animationFrame);
        const ended = position >= duration;
        dialog.dataset.state = ended ? 'ended' : 'paused';
        toggle.setAttribute('aria-label', ended ? 'Replay introduction' : 'Play introduction');
    }

    function tick(now) {
        position = Math.max(0, Math.min(duration, (now - startedAt) / 1000));
        render();

        if (position >= duration) {
            pause();
            return;
        }

        animationFrame = requestAnimationFrame(tick);
    }

    function play() {
        if (position >= duration) {
            position = 0;
        }
        dialog.dataset.state = 'playing';
        toggle.setAttribute('aria-label', 'Pause introduction');
        startedAt = performance.now() - position * 1000;
        render();
        animationFrame = requestAnimationFrame(tick);
    }

    document.querySelectorAll('[data-play-intro]').forEach((button) => {
        button.addEventListener('click', () => {
            opener = button;
            position = 0;
            dialog.showModal();
            play();
        });
    });

    toggle.addEventListener('click', () => {
        if (dialog.dataset.state === 'playing') {
            pause();
        } else {
            play();
        }
    });

    seek.addEventListener('input', () => {
        position = Number(seek.value);
        startedAt = performance.now() - position * 1000;
        render();
        if (position >= duration || dialog.dataset.state === 'ended') {
            pause();
        }
    });

    document.addEventListener('visibilitychange', () => {
        if (document.hidden && dialog.dataset.state === 'playing') {
            pause();
        }
    });

    dialog.addEventListener('click', (event) => {
        if (event.target === dialog) {
            const bounds = dialog.getBoundingClientRect();
            if (event.clientX < bounds.left || event.clientX > bounds.right ||
                event.clientY < bounds.top || event.clientY > bounds.bottom) {
                dialog.close();
            }
        }
    });

    dialog.addEventListener('close', () => {
        pause();
        opener?.focus({ preventScroll: true });
    });
}
