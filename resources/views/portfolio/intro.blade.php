<dialog class="intro-reel" aria-labelledby="intro-reel-title" data-intro-reel>
    <h2 id="intro-reel-title" class="sr-only">Meet {{ config('portfolio.name') }}, {{ config('portfolio.role') }}</h2>
    <form method="dialog" class="intro-reel__dismiss">
        <button type="submit" class="intro-reel__button" aria-label="Close introduction" autofocus>
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
    </form>

    <div class="intro-reel__screen" aria-hidden="true">
        <div class="intro-reel__scene" data-caption="Hi, I’m {{ config('portfolio.name') }}. My role is {{ config('portfolio.role') }}." data-active>
            <img src="{{ asset('images/portfolio/alex-intro.webp') }}" alt="" class="intro-reel__photo intro-reel__portrait" loading="lazy">
        </div>
        <div class="intro-reel__scene" data-caption="At my desk, most projects start with a question.">
            <img src="{{ asset('images/portfolio/studio-desk.webp') }}" alt="" class="intro-reel__photo" loading="lazy">
        </div>
        <div class="intro-reel__scene" data-caption="Can a chatbot show exactly where its answer came from?">
            @include('portfolio.preview', ['kind' => 'rag'])
        </div>
        <div class="intro-reel__scene" data-caption="What if a team could automate the tasks it repeats every week?">
            @include('portfolio.preview', ['kind' => 'automation'])
        </div>
    </div>

    <p class="intro-reel__caption" aria-live="polite" aria-atomic="true" data-intro-caption></p>
    <div class="intro-reel__controls">
        <button type="button" class="intro-reel__button" aria-label="Pause introduction" data-intro-toggle>
            <svg data-icon="pause" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <rect x="5" y="4" width="5" height="16" rx="1"/><rect x="14" y="4" width="5" height="16" rx="1"/>
            </svg>
            <svg data-icon="play" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M6 4a1 1 0 0 1 1.5-.86l13 8a1 1 0 0 1 0 1.72l-13 8A1 1 0 0 1 6 20Z"/>
            </svg>
            <svg data-icon="replay" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 9a8 8 0 1 1-.3 5M4 4v5h5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <input class="intro-reel__seek" type="range" min="0" step="0.1" value="0" aria-label="Introduction playback position" data-intro-seek>
        <span class="intro-reel__time" aria-hidden="true" data-intro-time></span>
    </div>
</dialog>
