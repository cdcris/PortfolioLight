<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="The portfolio of Alex Morgan, product designer based in Copenhagen.">
    <title>Alex Morgan — Product Designer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-[#292a2d] antialiased">
    <main class="mx-auto w-full max-w-[690px] px-6 sm:px-8">
        <section class="hero relative pt-12 sm:pt-16" aria-labelledby="intro-title">
            <div class="hero-portrait-wrap relative mx-auto mb-12 h-[270px] w-[270px] sm:ml-auto sm:mr-[40px] sm:mb-14 sm:h-[300px] sm:w-[300px]">
                <div class="portrait-art" role="img" aria-label="Illustrated portrait of Alex Morgan">
                    <div class="portrait-window"></div>
                    <div class="portrait-plant plant-one"></div>
                    <div class="portrait-plant plant-two"></div>
                    <div class="portrait-person">
                        <div class="portrait-hair"></div>
                        <div class="portrait-neck"></div>
                        <div class="portrait-face">
                            <span class="portrait-eye eye-one"></span><span class="portrait-eye eye-two"></span>
                            <span class="portrait-nose"></span><span class="portrait-smile"></span>
                        </div>
                        <div class="portrait-shirt"></div>
                    </div>
                    <div class="portrait-hand"></div>
                    <span class="portrait-grain"></span>
                </div>
                <div class="portrait-note" aria-hidden="true">Let me<br>introduce<br>myself <span>⌁</span></div>
                <button class="play-button" type="button" aria-label="Play intro video" aria-haspopup="dialog" data-intro-trigger>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5.8c0-.8.9-1.3 1.6-.9l10 6.2a1 1 0 0 1 0 1.7l-10 6.2c-.7.4-1.6-.1-1.6-.9V5.8Z" fill="currentColor"/></svg>
                </button>
            </div>

            <div class="intro-copy">
                <p class="eyebrow">Independent designer · Copenhagen, DK</p>
                <h1 id="intro-title" class="text-[28px] font-semibold leading-tight tracking-[-0.04em] sm:text-[31px]">Alex Morgan</h1>
                <p class="intro-role">Product Designer</p>
                <div class="intro-body">
                    <p>Hello there! My name is Alex and I’m a Product Designer working at <a href="#experience">Fable</a> in Copenhagen. I grew up on the internet and love computers and software.</p>
                    <p>Over the last 10 years, I’ve designed digital products, shaped product strategy, and helped small teams turn ambitious ideas into useful, thoughtful experiences.</p>
                    <p>I’ve had the chance to work with kind people at <a href="#work">Fable</a>, <a href="#work">Northstar</a>, and <a href="#work">Common Room</a>.</p>
                </div>
                <div class="social-links flex flex-wrap items-center gap-x-5 gap-y-2" aria-label="Social links">
                    <a href="https://www.linkedin.com/" target="_blank" rel="noreferrer">LinkedIn <span aria-hidden="true">↗</span></a>
                    <a href="https://x.com/" target="_blank" rel="noreferrer">X <span aria-hidden="true">↗</span></a>
                    <a href="mailto:hello@alexmorgan.design">Email <span aria-hidden="true">↗</span></a>
                </div>
            </div>
            <a class="scroll-cue" href="#work">Scroll to read more <span aria-hidden="true">↓</span></a>
        </section>

        <section id="work" class="work-section" aria-labelledby="work-title">
            <div class="section-heading flex items-end justify-between">
                <h2 id="work-title">Selected work</h2><span class="section-index">01 — 03</span>
            </div>

            <article class="project" aria-labelledby="project-fable">
                <div class="project-meta"><span>Fable</span><span>2023 — 2026</span></div>
                <h3 id="project-fable">Making money feel a little more human</h3>
                <p class="project-lede">Fable is a new kind of money app for people building a life together. I led product design from the first sketches through launch, finding a calmer way to make everyday money decisions as a team.</p>
                <p class="project-lede">The challenge was to make a shared financial picture feel clear and personal without losing the trust people expect from their bank.</p>
                <figure class="showcase showcase-fable">
                    <div class="fable-glow glow-left"></div><div class="fable-glow glow-right"></div>
                    <div class="phone phone-back"><div class="phone-speaker"></div><div class="phone-screen back-screen"><span class="mini-kicker">YOUR SPACE</span><b>Good things<br>are growing.</b><div class="sparkline"></div><div class="mini-row"><i></i><span>Weekend away</span><strong>$840</strong></div><div class="mini-row"><i></i><span>New home</span><strong>$2,410</strong></div></div></div>
                    <div class="phone phone-front"><div class="phone-speaker"></div><div class="phone-screen"><div class="app-top"><span>9:41</span><span>•••</span></div><div class="fable-mark">f<span>✳</span></div><p class="balance-label">YOUR SHARED BALANCE</p><div class="balance">$12,480<span>.32</span></div><div class="avatar-stack"><i>A</i><i>J</i><span>you + Jamie</span></div><div class="spending-card"><span>This month</span><b>$2,840</b><div class="spend-bar"><i></i></div><small>Looking good — 68% of your plan</small></div><div class="transaction"><i>↗</i><span>Groceries<small>Today · Shared</small></span><b>−$84.20</b></div><div class="transaction"><i>⌂</i><span>Rent<small>Yesterday · Shared</small></span><b>−$1,250</b></div><div class="tabbar"><span>◉</span><span>◷</span><span>◎</span><span>⌕</span></div></div></div>
                    <div class="floating-note note-left">Built for<br><b>two people</b> ↗</div><div class="floating-note note-right">A little less<br>money stress <span>✳</span></div>
                    <figcaption>One shared space for the plans you’re making together</figcaption>
                </figure>
                <h4>Money, in the same place</h4>
                <p>I started with the moments that tend to create friction: bills arriving at different times, unclear shared costs, and savings goals that live in separate spreadsheets. We brought the essentials into one shared space and made progress visible in a way that feels encouraging, not judgmental.</p>
                <div class="feature-grid">
                    <div class="feature-card feature-card-lilac"><span class="feature-label">01 / SEE IT TOGETHER</span><div class="insight-card"><span>Shared spending</span><b>$2,840</b><div class="chart-bars"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div><small>On track this month <b>↗</b></small></div><p>A clear view of what’s shared, at a glance.</p></div>
                    <div class="feature-card feature-card-peach"><span class="feature-label">02 / MAKE A PLAN</span><div class="goal-card"><div class="goal-icon">☼</div><span>Summer in Lisbon</span><b>$1,680 <small>of $2,400</small></b><div class="goal-progress"><i></i></div><small>Almost there. Nice work!</small></div><p>Small steps toward the things that matter.</p></div>
                </div>
                <blockquote class="quote-card"><span class="quote-mark">“</span><p>Alex has a rare ability to make complex product problems feel simple. The care they brought to every detail made our product better — and made the team better, too.</p><footer><span class="quote-avatar">JM</span><span><b>Jamie Moore</b><small>Co-founder, Fable</small></span></footer></blockquote>
                <a class="project-link" href="#experience">Visit fable.money <span>↗</span></a>
            </article>

            <article class="project" aria-labelledby="project-northstar">
                <div class="project-meta"><span>Northstar</span><span>2021 — 2023</span></div>
                <h3 id="project-northstar">A clearer path to your next big idea</h3>
                <p class="project-lede">Northstar helps independent teams plan, share, and ship ambitious projects. I worked across the core product, bringing a fragmented planning workflow into a single, flexible canvas.</p>
                <figure class="showcase showcase-northstar">
                    <div class="browser-frame"><div class="browser-chrome"><span class="chrome-dots"><i></i><i></i><i></i></span><div>northstar.app / workspace</div><span>⌕</span></div><div class="workspace"><aside class="workspace-sidebar"><div class="northstar-logo"><i>✳</i> northstar</div><div class="workspace-switch"><i>R</i><span>Rosewood Studio<small>Free workspace</small></span><b>⌄</b></div><div class="side-label">WORKSPACE</div><span class="side-item active">▦ &nbsp; Overview</span><span class="side-item">◫ &nbsp; My work</span><span class="side-item">◷ &nbsp; Timeline</span><span class="side-item">⚙ &nbsp; Settings</span><div class="side-label projects-label">YOUR PROJECTS <b>＋</b></div><span class="side-item"><i class="project-dot dot-violet"></i> Studio refresh</span><span class="side-item"><i class="project-dot dot-coral"></i> Spring launch</span><span class="side-item"><i class="project-dot dot-green"></i> Brand platform</span><div class="sidebar-bottom"><i>AM</i> Alex Morgan <span>···</span></div></aside><div class="workspace-main"><div class="workspace-top"><span>Workspace / Overview</span><span>?</span></div><div class="workspace-content"><div class="welcome-row"><div><small>MONDAY, MAY 12</small><h4>Good morning, Alex <span>✳</span></h4><p>Here's what’s happening across your workspace.</p></div><button>＋ &nbsp; New project</button></div><div class="overview-stats"><div><span>Active projects</span><b>08</b><small class="stat-green">↗ 2 this month</small></div><div><span>Tasks completed</span><b>124</b><small class="stat-green">↗ 18% this week</small></div><div><span>Team members</span><b>06</b><small>Across 3 projects</small></div></div><div class="dashboard-title">Your projects <span>View all →</span></div><div class="project-table"><div class="table-head"><span>PROJECT</span><span>STATUS</span><span>PROGRESS</span><span>TEAM</span></div><div class="table-row"><span><i class="project-dot dot-violet"></i><b>Studio refresh</b></span><span class="status status-violet">In progress</span><span><i class="progress-line"><b style="width:72%"></b></i>72%</span><span class="tiny-avatars">AM JM KL</span></div><div class="table-row"><span><i class="project-dot dot-coral"></i><b>Spring launch</b></span><span class="status status-peach">Planning</span><span><i class="progress-line"><b style="width:38%"></b></i>38%</span><span class="tiny-avatars">AM RN</span></div><div class="table-row"><span><i class="project-dot dot-green"></i><b>Brand platform</b></span><span class="status status-green">On track</span><span><i class="progress-line"><b style="width:86%"></b></i>86%</span><span class="tiny-avatars">JM KL RN</span></div></div><div class="activity-row"><i>✓</i><span><b>Jamie</b> completed <b>Review visual direction</b><small>12 minutes ago · Studio refresh</small></span></div></div></div></div></div>
                    <figcaption>A workspace that gives good ideas room to grow</figcaption>
                </figure>
                <h4>Make the work visible</h4>
                <p>Teams told us their plans were scattered across docs, boards, and conversations. I designed an overview that brings the right level of detail together, while keeping each project adaptable to the way that team already works.</p>
                <figure class="showcase showcase-planning"><div class="planning-canvas"><div class="canvas-toolbar"><span>‹ &nbsp; Studio refresh</span><span>Week 20 &nbsp; ⌄</span><span class="tiny-avatars">AM JM KL &nbsp; ＋</span></div><div class="timeline-grid"><div class="timeline-labels"><span>PROJECT PLAN</span><b>Discovery</b><b>Design</b><b>Build</b><b>Launch</b></div><div class="timeline-board"><div class="timeline-months"><span>MAY 12</span><span>MAY 19</span><span>MAY 26</span><span>JUN 02</span></div><div class="timeline-line"><i class="task task-violet" style="left:4%;width:34%">Research & insights <small>AM · 3 tasks</small></i></div><div class="timeline-line"><i class="task task-blue" style="left:24%;width:44%">Visual direction <small>JM · 5 tasks</small></i></div><div class="timeline-line"><i class="task task-orange" style="left:49%;width:38%">Prototype & test <small>KL · 4 tasks</small></i></div><div class="timeline-line"><i class="task task-green" style="left:76%;width:21%">Handoff <small>3 tasks</small></i></div></div></div></div><figcaption>A flexible timeline for the work ahead</figcaption></figure>
                <blockquote class="quote-card quote-card-mint"><span class="quote-mark">“</span><p>Alex thinks in systems, sweats the details, and makes the complicated feel obvious. That combination changed how our product felt to use.</p><footer><span class="quote-avatar quote-avatar-green">EK</span><span><b>Erin Kim</b><small>Head of Product, Northstar</small></span></footer></blockquote>
                <a class="project-link" href="#experience">Visit northstar.app <span>↗</span></a>
            </article>

            <article class="project" aria-labelledby="project-common">
                <div class="project-meta"><span>Common Room</span><span>2018 — 2021</span></div>
                <h3 id="project-common">Helping good things find their people</h3>
                <p class="project-lede">Common Room is a community platform for people who bring people together. I joined early and helped build a welcoming home for groups, events, and the conversations in between.</p>
                <figure class="showcase showcase-common"><div class="community-board"><div class="community-nav"><div class="common-logo"><i>◒</i> common room</div><span>Our community</span><span>Events</span><span>Resources</span><button>Join the room <b>↗</b></button></div><div class="community-hero"><span class="community-pill">A place to find your people</span><h4>Better things<br>happen <em>together.</em></h4><p>Ideas, conversations, and kind people —<br>all in one place.</p><button>Come on in <span>→</span></button><div class="orbit orbit-one"><i>J</i><span>✳</span></div><div class="orbit orbit-two"><i>M</i><i>A</i><span>♡</span></div><div class="orbit orbit-three"><i>S</i><i>R</i><i>K</i></div><div class="community-sun"></div></div><div class="community-bottom"><span>★★★★★ &nbsp; A little corner of the internet we love</span><span>Scroll to explore ↓</span></div></div><figcaption>A warm, welcoming front door to a growing community</figcaption></figure>
                <h4>Designed to feel like belonging</h4>
                <p>We started by listening to members. They wanted a place that felt less like another social feed and more like walking into a room where someone already knew your name. A flexible set of profiles, thoughtful event details, and small moments of delight made that feeling tangible.</p>
                <a class="project-link" href="#experience">Visit commonroom.community <span>↗</span></a>
            </article>
        </section>

        <section class="testimonials" aria-labelledby="kind-words-title">
            <div class="section-heading"><h2 id="kind-words-title">Kind words from the people</h2></div>
            <div class="testimonial-grid">
                <blockquote class="testimonial"><p>“Alex brings clarity and generosity to every room. They made our product easier to understand and our team more confident in what we were building.”</p><footer><span class="testimonial-avatar avatar-lilac">JM</span><span><b>Jamie Moore</b><small>Co-founder, Fable</small></span></footer></blockquote>
                <blockquote class="testimonial"><p>“They see the small details and the big picture at the same time. Working together made hard problems feel genuinely fun.”</p><footer><span class="testimonial-avatar avatar-yellow">EK</span><span><b>Erin Kim</b><small>Head of Product, Northstar</small></span></footer></blockquote>
                <blockquote class="testimonial"><p>“Thoughtful, curious, and a brilliant partner. Alex is the sort of designer who makes the work better and the day better.”</p><footer><span class="testimonial-avatar avatar-mint">RL</span><span><b>Rory Lee</b><small>Engineering Lead, Common Room</small></span></footer></blockquote>
            </div>
        </section>

        <section id="experience" class="experience" aria-labelledby="experience-title">
            <div class="section-heading"><h2 id="experience-title">A little about my path</h2></div>
            <div class="experience-list">
                <div class="experience-row"><a href="#work">Fable <span>↗</span></a><span>Product Design Lead</span><time>2023 — Now</time></div>
                <div class="experience-row"><a href="#work">Northstar <span>↗</span></a><span>Senior Product Designer</span><time>2021 — 2023</time></div>
                <div class="experience-row"><a href="#work">Common Room <span>↗</span></a><span>Product Designer</span><time>2018 — 2021</time></div>
                <div class="experience-row"><a href="#work">Studio Elsewhere <span>↗</span></a><span>Digital Designer</span><time>2016 — 2018</time></div>
            </div>
        </section>

        <footer class="site-footer">
            <div class="footer-message"><span class="footer-spark">✳</span><p>Want to make<br>something good?</p><a href="mailto:hello@alexmorgan.design">Say hello <span>↗</span></a></div>
            <div class="footer-bottom"><span>© Alex Morgan 2026</span><div class="flex gap-5"><a href="https://www.linkedin.com/" target="_blank" rel="noreferrer">LinkedIn ↗</a><a href="https://x.com/" target="_blank" rel="noreferrer">X ↗</a><a href="mailto:hello@alexmorgan.design">Email ↗</a></div></div>
        </footer>
    </main>

    <dialog class="intro-dialog" data-intro-dialog aria-labelledby="dialog-title">
        <button class="dialog-close" type="button" aria-label="Close intro video" data-intro-close>×</button>
        <div class="dialog-video"><div class="dialog-orbit">✳</div><span class="dialog-play">▶</span></div>
        <p class="eyebrow">A 30 second hello</p><h2 id="dialog-title">Hi, I’m Alex.</h2><p>I’m a product designer who loves making useful things feel a little more human. Thanks for stopping by.</p>
    </dialog>
</body>
</html>
