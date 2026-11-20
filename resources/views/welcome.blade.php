<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#ffffff">
        <meta name="description" content="{{ config('portfolio.name') }}’s design portfolio. Four concept projects exploring AI, research, and automation.">
        <title>{{ config('portfolio.name') }} | {{ config('portfolio.role') }}</title>
        <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='16' fill='%23121212'/%3E%3Ctext x='32' y='46' text-anchor='middle' font-size='43' font-family='Arial,sans-serif' font-weight='700' fill='white'%3E{{ rawurlencode(e(mb_substr(config('portfolio.name'), 0, 1))) }}%3C/text%3E%3C/svg%3E">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <a href="#selected-work" class="skip-link">Skip to selected work</a>
        <main id="top">
            <section class="hero" aria-labelledby="profile-name">
                <div class="hero-intro">
                    <div class="bio">
                        <header class="identity">
                            <h1 id="profile-name">{{ config('portfolio.name') }}</h1>
                            <p>{{ config('portfolio.role') }}</p>
                            <div class="mt-3 flex flex-nowrap items-center justify-center gap-x-4 md:justify-start">
                                <img src="{{ asset('images/portfolio/logo_python.png') }}" alt="Python" class="block h-10 w-auto object-contain">
                                <img src="{{ asset('images/portfolio/logo_rust.png') }}" alt="Rust" class="block h-10 w-auto object-contain">
                                <img src="{{ asset('images/portfolio/langchain.png') }}" alt="LangChain" class="block h-10 w-auto object-contain">
                            </div>
                        </header>
                        <div class="bio-copy">
                            <p>Hello there! My name is {{ config('portfolio.name') }} and I'm an {{ config('portfolio.role') }} who builds the systems that let you do less and get more done.</p>
                            <p>In my 4 years of experience, I have built and deployed AI-powered applications, integrated them into existing systems and tools, automated manual workflows end to end, and worked with teams across startups, research, and institutions.</p>
                        </div>
                        @include('portfolio.contact-links', ['label' => 'Portfolio links'])
                    </div>
                    <div class="intro-portrait">
                        <div class="intro-note handwriting" aria-hidden="true">
                            <span>Let me<br>introduce<br>myself</span>
                            <svg viewBox="0 0 106 56" fill="none">
                                <path d="M3 44c21 6 58-3 85-31M73 14c6-1 13-3 20-6 0 6-1 12-3 19" stroke="currentColor" stroke-width="3.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <button class="portrait-button" type="button" data-play-intro aria-label="Play {{ config('portfolio.name') }}’s introduction" aria-haspopup="dialog">
                            <img src="{{ asset('images/portfolio/cris.webp') }}" alt="{{ config('portfolio.name') }} smiling and waving from the studio" width="800" height="800" fetchpriority="high">
                            <span class="play-disc" aria-hidden="true">
                                <svg viewBox="0 0 32 36" fill="currentColor"><path d="M4 3.1c0-2.3 2.5-3.6 4.4-2.4l22 14.9c1.8 1.2 1.8 3.7 0 4.9l-22 14.8C6.5 36.5 4 35.2 4 33Z"/></svg>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="project-reel" data-project-reel>
                    <div class="reel-track" aria-hidden="true">
                        @for ($copy = 0; $copy < 2; $copy++)
                            <div class="reel-group">
                                @foreach (['defense', 'rag', 'analysis', 'automation'] as $kind)
                                    <a class="reel-tile" href="#{{ config('portfolio.projects.'.$kind.'.id') }}" tabindex="-1" aria-label="{{ config('portfolio.projects.'.$kind.'.type') }}">
                                        @include('portfolio.preview', ['kind' => $kind])
                                    </a>
                                @endforeach
                            </div>
                        @endfor
                    </div>
                    <button type="button" class="reel-toggle round-action" data-reel-toggle aria-label="Pause gallery motion" title="Pause gallery motion">
                        <svg class="pause-glyph" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><rect x="3" y="2" width="4" height="12" rx="1"/><rect x="9" y="2" width="4" height="12" rx="1"/></svg>
                        <svg class="play-glyph" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M4 2v12l10-6Z"/></svg>
                    </button>
                </div>
                <div class="read-cue">
                    <a href="#selected-work">Scroll to read more <span aria-hidden="true">↓</span></a>
                </div>
            </section>

            <section id="selected-work" class="work-section" aria-labelledby="work-title">
                <h2 id="work-title" class="section-title handwriting">Selected work</h2>
                @foreach (config('portfolio.projects') as $kind => $project)
                    <article id="{{ $project['id'] }}" class="case-study" aria-labelledby="{{ $project['id'] }}-title">
                        <div class="reading-column">
                            <header class="case-heading">
                                <div class="brand-lockup brand-{{ $kind }}">
                                    <span class="brand-icon" aria-hidden="true">{{ $project['mark'] }}</span>
                                    {{ $project['brand'] }}
                                </div>
                                <span class="year-tag">{{ $project['year'] }}</span>
                            </header>
                            <h3 id="{{ $project['id'] }}-title">{{ $project['headline'] }}</h3>
                            <p>{{ $project['overview'] }}</p>
                            <p>{{ $project['approach'] }}</p>
                        </div>
                        <figure class="case-figure">
                            <div class="case-art" role="img" aria-label="{{ $project['caption'] }}">
                                @include('portfolio.preview', ['kind' => $kind])
                            </div>
                            <figcaption>{{ $project['caption'] }}</figcaption>
                        </figure>
                        <div class="reading-column">
                            <h4>{{ $project['detail'] }}</h4>
                            <p>{{ $project['reflection'] }}</p>
                        </div>
                    </article>
                @endforeach
            </section>

            <section id="experience" class="experience reading-column" aria-labelledby="experience-title">
                <h2 id="experience-title" class="section-title handwriting">Work Experience</h2>
                <ol>
                    @foreach (config('portfolio.experience') as $position)
                        <li class="experience-row">
                            <strong>{{ $position['years'] }}</strong>
                            <div>
                                <h3>{{ $position['role'] }}</h3>
                                <strong>{{ $position['studio'] }}</strong>
                                <p>{{ $position['description'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </section>

            <section id="education" class="experience reading-column" aria-labelledby="education-title">
                <h2 id="education-title" class="section-title handwriting">Education</h2>
                <ol>
                    @foreach (config('portfolio.education') as $entry)
                        <li class="experience-row grid-cols-[minmax(0,1fr)_auto]">
                            <strong class="self-center">{{ $entry['years'] }}</strong>
                            <img src="{{ asset('images/portfolio/'.$entry['logo']) }}" alt="" width="64" height="64" loading="lazy" class="size-14 object-contain drop-shadow-md sm:size-16">
                            <div class="col-span-2">
                                <h3>{{ $entry['title'] }}</h3>
                                <strong class="mt-2 block">{{ $entry['school'] }}</strong>
                                <h4 class="mt-4 font-semibold">{{ $entry['heading'] }}</h4>
                                <ul class="mt-1 list-disc space-y-1 pl-5">
                                    @foreach ($entry['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </section>
        </main>
        <footer class="page-footer text-center">
            <p class="handwriting">Want to chat? Say hi!</p>
            @include('portfolio.contact-links', ['label' => 'Footer links'])
            <small>© {{ config('portfolio.name') }} {{ now()->year }}</small>
        </footer>
        <a class="back-to-top pill" data-back-to-top href="#top" hidden>Back to top <span aria-hidden="true">↑</span></a>
        @include('portfolio.intro')
    </body>
</html>
