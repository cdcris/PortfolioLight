<?php

return [
    'name' => 'Crisly Dela Cruz',
    'role' => 'AI Engineer',

    'projects' => [
        'rag' => [
            'id' => 'rag-chatbot',
            'brand' => 'Folio',
            'mark' => 'f',
            'type' => 'RAG Chatbot',
            'year' => '2025 – 2026',
            'headline' => 'A chatbot that shows its sources',
            'overview' => 'A team handbook is only helpful if you can find the right page. Folio is a RAG chatbot concept that lets someone ask a question in their own words and get an answer drawn from the documents their team already uses.',
            'approach' => 'I designed the conversation around a small detail. Every citation opens the original passage alongside the answer, so you can check the wording without losing your place.',
            'caption' => 'A conversation in Folio, with the source library open alongside it',
            'detail' => 'Leaving room for uncertainty',
            'reflection' => 'When two documents disagree, Folio presents both passages. When the library has no answer, it says so and suggests where to look next. Those quiet moments shaped the interface as much as the successful searches.',
        ],
        'analysis' => [
            'id' => 'competitors-analysis',
            'brand' => 'Signal',
            'mark' => '▥',
            'type' => 'Competitors Analysis',
            'year' => '2025',
            'headline' => 'A field guide to a changing market',
            'overview' => 'Signal began with a spreadsheet full of competitor links and a recurring question from a product team. What has actually changed since the last time we looked?',
            'approach' => 'This concept turns public product updates into a short research brief. A side-by-side view keeps pricing, positioning, and release notes together, with a dated source for every observation.',
            'caption' => 'Signal’s market brief pairs a competitive snapshot with its underlying data',
            'detail' => 'Reading one change in context',
            'reflection' => 'A price increase can look very different after a plan adds a new feature. Keeping the original announcement close to the comparison gives a researcher room to make that distinction.',
        ],
        'defense' => [
            'id' => 'digital-defense',
            'brand' => 'Sentry',
            'mark' => '',
            'type' => 'Digital Defense',
            'year' => '2024 – 2025',
            'headline' => 'Block AI bots and competitive scrapers',
            'overview' => 'Sentry is a digital defense concept for independent publishers. Its dashboard gives an editor a readable picture of automated traffic, from search crawlers to AI bots and competitive scrapers.',
            'approach' => 'The main view brings requests, rules, and recent decisions into one place. An editor can inspect a traffic sample before deciding whether a crawler should be allowed, monitored, or blocked.',
            'caption' => 'A sample traffic overview in Sentry, with recent decisions and request volume',
            'detail' => 'Making a rule easy to explain',
            'reflection' => 'Each decision includes the rule that triggered it and the time it took effect. When a colleague asks why a request was blocked, the answer is already in the activity history.',
        ],
        'automation' => [
            'id' => 'ai-automation',
            'brand' => 'Relay',
            'mark' => '∿',
            'type' => 'AI Automation',
            'year' => '2024',
            'headline' => 'Less busywork between tools',
            'overview' => 'Relay explores AI automation for a small operations team. A workflow can collect an incoming request, turn it into a useful summary, and send a draft to the right person for review.',
            'approach' => 'I laid the steps out on a canvas so the handoffs stay visible. Each step shows a sample input and output, which makes it easier to catch a missing detail before a workflow goes live.',
            'caption' => 'An example workflow in Relay, from incoming request to human review',
            'detail' => 'A place to pause',
            'reflection' => 'A person can read and edit the draft before anything is sent. That review step became a first-class part of the canvas, with the same space and attention as the automated steps around it.',
        ],
    ],

    'experience' => [
        [
            'years' => '2024 — Today',
            'role' => 'AI Engineer',
            'studio' => 'Freelancer',
            'description' => 'Building and deploying AI-powered applications, integrating them into existing systems, and automating workflows end to end.',
        ],
        [
            'years' => '2021 — 2024',
            'role' => 'Software Developer',
            'studio' => 'Freelancer',
            'description' => 'Designed and built custom software solutions that turned client requirements into reliable, practical tools.',
        ],
        [
            'years' => '2018 — 2021',
            'role' => 'Technical Support',
            'studio' => 'Freelancer',
            'description' => 'Maintained, repaired, and upgraded hardware, software, and networks for TESDA-accredited schools and computer shops.',
        ],
    ],

    'education' => [
        [
            'years' => '2018 — 2022',
            'title' => 'BS in Information Technology',
            'school' => 'Tarlac Agricultural University',
            'logo' => 'logo_tau.png',
            'heading' => 'Awards',
            'items' => [
                'Cum Laude',
                'Intelligent Class Scheduling System for Tarlac Agricultural University, Copyright Registration No. 2022-1084, Issued by the National Library of the Philippines 2022.',
            ],
        ],
        [
            'years' => '2018',
            'title' => 'Technical Education and Skills Development Authority (TESDA)',
            'school' => 'United School of Science and Technology',
            'logo' => 'logo_tesda.webp',
            'heading' => 'National certificates',
            'items' => [
                'Computer System Servicing NCII',
                'Visual Graphic Design NC III',
            ],
        ],
    ],
];
