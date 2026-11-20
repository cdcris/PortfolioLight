<div class="product-preview preview-{{ $kind }}" aria-hidden="true">
    @switch($kind)
        @case('rag')
            <div class="folio-source preview-paper">
                <div class="preview-bar"><span class="preview-dots"><i></i><i></i><i></i></span><span>Library</span></div>
                <div class="folio-source-body">
                    <div class="folio-folder"><i></i></div>
                    <span class="preview-label">Collection / 08</span>
                    <strong class="folio-source-title">Research<br>library</strong>
                    <span class="folio-file"><i>↳</i> Field notes.pdf</span>
                    <span class="folio-file"><i>↳</i> Interview log.pdf</span>
                    <span class="folio-file"><i>↳</i> Pilot review.pdf</span>
                </div>
            </div>
            <div class="folio-chat preview-paper">
                <div class="preview-bar"><strong class="folio-wordmark"><i>f</i> Folio</strong><span>Workspace <b class="folio-avatar">M</b></span></div>
                <div class="folio-answer">
                    <div class="folio-question">What did we learn from the pilot?</div>
                    <div class="folio-answer-by"><i>f</i> Folio <span>· Research library</span></div>
                    <strong class="folio-answer-title">A faster first answer.</strong>
                    <p>The pilot team spent less time looking for context. Answers linked back to the interview notes that informed them.</p>
                    <div class="folio-citation"><b>1</b> Pilot review <span>p. 04</span></div>
                    <div class="folio-compose">Ask a follow-up… <i>↑</i></div>
                </div>
            </div>
            @break
        @case('analysis')
            <div class="signal-report preview-paper">
                <div class="signal-mast"><strong><i>▥</i> Signal</strong><span>Research desk</span></div>
                <div class="signal-page">
                    <div class="preview-label">Market intelligence · Vol. 04</div>
                    <strong class="signal-title">The market<br>in focus.</strong>
                    <div class="signal-deck">A competitive landscape report</div>
                    <div class="signal-print"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="signal-colophon"><span>Research edition</span><span>01 / 16</span></div>
                </div>
            </div>
            <div class="signal-chart preview-paper">
                <div class="signal-chart-head"><span class="preview-label">Market signals</span><span>•••</span></div>
                <strong>Share of voice</strong>
                <span class="signal-key"><i></i> Fieldwork <i></i> Others</span>
                <div class="signal-chart-plot">
                    <div class="signal-axis"><span>60%</span><span>40%</span><span>20%</span></div>
                    <svg viewBox="0 0 220 80" preserveAspectRatio="none" focusable="false"><path class="signal-gridline" d="M0 8H220 M0 39H220 M0 70H220"/><path class="signal-dashed" d="M0 28 C25 27 26 39 47 38 S71 22 88 31 S115 46 136 43 S175 58 197 51 L220 55"/><path class="signal-trend" d="M0 68 C20 70 26 52 45 56 S73 37 91 39 S116 18 133 27 S158 21 175 24 S197 7 220 4"/></svg>
                </div>
                <div class="signal-months"><span>Jan</span><span>Mar</span><span>Jun</span></div>
                <div class="signal-summary"><span>Period change</span><b>↗ 18.4%</b></div>
            </div>
            @break
        @case('defense')
            <div class="sentry-console">
                <div class="sentry-top"><strong><i></i> Sentry</strong><span>Network / Overview</span><b>● &nbsp; Live</b></div>
                <div class="sentry-body">
                    <div class="sentry-sidebar"><span class="preview-label">Workspace</span><b>◉ &nbsp; Overview</b><span>▤ &nbsp; Traffic log</span><span>◇ &nbsp; Bot rules</span><span>⊞ &nbsp; Sources</span><small>Region<br><strong>All regions</strong></small></div>
                    <div class="sentry-main"><div class="sentry-heading"><strong>Traffic overview</strong><span>Last 24 hours ⌄</span></div>
                        <div class="sentry-stats"><div><span>Total requests</span><b>84,219</b></div><div><span>Bots blocked</span><b>6,407</b></div><div><span>Verified traffic</span><b>92.4%</b></div></div>
                        <div class="sentry-graph"><div><strong>Request volume</strong><span>● &nbsp; Verified &nbsp; ◦ &nbsp; Blocked</span></div>
                            <svg viewBox="0 0 340 88" preserveAspectRatio="none" focusable="false"><path class="sentry-grid" d="M0 5H340 M0 30H340 M0 55H340 M0 80H340 M0 0V88 M68 0V88 M136 0V88 M204 0V88 M272 0V88 M340 0V88"/><path class="sentry-fill" d="M0 66 L8 62 16 65 24 53 32 56 40 48 47 52 54 37 61 41 68 23 73 48 81 54 90 50 99 56 107 45 115 48 122 32 129 38 137 15 143 27 151 22 159 40 167 33 175 47 183 45 191 58 199 53 207 59 215 34 223 40 230 17 237 21 244 8 250 32 258 29 266 43 274 41 282 52 290 48 297 56 304 37 309 41 316 29 324 34 332 22 340 27 V88 H0Z"/><path class="sentry-line" d="M0 66 L8 62 16 65 24 53 32 56 40 48 47 52 54 37 61 41 68 23 73 48 81 54 90 50 99 56 107 45 115 48 122 32 129 38 137 15 143 27 151 22 159 40 167 33 175 47 183 45 191 58 199 53 207 59 215 34 223 40 230 17 237 21 244 8 250 32 258 29 266 43 274 41 282 52 290 48 297 56 304 37 309 41 316 29 324 34 332 22 340 27"/><path class="sentry-lower" d="M0 78 L22 76 38 79 55 70 64 72 78 62 93 74 113 71 130 74 145 60 158 66 175 57 184 70 202 74 215 68 225 73 243 54 257 66 272 65 292 72 307 65 320 68 340 63"/></svg>
                            <div class="sentry-ticks"><span>00:00</span><span>06:00</span><span>12:00</span><span>18:00</span></div>
                        </div>
                        <div class="sentry-event"><span>Latest event</span><div><i>◇</i><b>Unverified crawler</b><small>/catalog</small><em>Blocked</em></div></div>
                    </div>
                </div>
            </div>
            @break
        @case('automation')
            <div class="relay-app preview-paper">
                <div class="relay-top"><strong><i>∿</i> Relay</strong><span>Studio &nbsp; / &nbsp; Automations</span><b>✦ &nbsp; Published</b></div>
                <div class="relay-board">
                    <strong class="relay-title">Customer intake <small>Workflow</small></strong>
                    <svg class="relay-wires" viewBox="0 0 1000 400" preserveAspectRatio="none" focusable="false"><path d="M208 211H272Q286 211 286 197V142Q286 128 300 128H375 M534 128H587Q602 128 602 143V216Q602 231 617 231H727"/><path class="relay-wire-alt" d="M532 128H566Q579 128 579 115V74Q579 61 592 61H727"/></svg>
                    <div class="relay-node relay-trigger"><i>ϟ</i><span><small>Trigger</small><b>New request</b></span></div>
                    <div class="relay-node relay-filter"><i>⑂</i><span><small>Condition</small><b>Triage request</b></span></div>
                    <div class="relay-node relay-review"><i>◌</i><span><small>Review</small><b>Ask the team</b></span></div>
                    <div class="relay-node relay-send"><i>↗</i><span><small>Action</small><b>Send reply</b></span></div>
                    <span class="relay-branch">Ready to send</span>
                    <div class="relay-controls"><b>✥</b><span>−</span><span>100%</span><span>+</span></div>
                </div>
            </div>
            @break
    @endswitch
</div>
