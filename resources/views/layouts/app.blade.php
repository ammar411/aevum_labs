<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $description ?? 'Aevum Labs builds modern web platforms, autonomous AI workflows, enterprise systems, and managed technical operations.' }}">
    <title>{{ $title ?? 'Aevum Labs — Autonomous Systems. Managed Operations.' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    <div class="mesh-bg" aria-hidden="true"></div>
    <div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>

    <header class="site-header" id="navbar">
        <div class="header-inner">
            <a class="brand" href="{{ route('home') }}" aria-label="Aevum Labs home">
                <span class="brand-mark" aria-hidden="true">A</span>
                <span class="brand-name">Aevum <span>Labs</span></span>
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="Open navigation">
                <span></span><span></span>
            </button>

            <nav class="primary-nav" id="primary-navigation" aria-label="Main navigation">
                <a href="{{ route('home') }}#services">Services</a>
                <a href="{{ route('modules.index') }}">AI &amp; Terminal</a>
                <a href="{{ route('home') }}#architecture">Architecture</a>
                <a href="{{ route('home') }}#managed-operations">Managed Operations</a>
                <a href="{{ route('home') }}#company">Company</a>
                <a href="{{ route('home') }}#pricing">Pricing / Models</a>
            </nav>

            <div class="header-actions">
                <button class="button button-primary button-small" type="button" data-open-audit>Book Audit</button>
                <a class="button button-outline button-small portal-link" href="{{ route('home') }}#client-portal">Client Portal</a>
            </div>
        </div>
        <div class="status-strip">
            <span class="status-dot" aria-hidden="true"></span>
            <span><strong>[LIVE]</strong> Systems Nominal <span class="status-separator">•</span> 99.9% Uptime</span>
        </div>
    </header>

    <main id="main-content">
        {{ $slot }}
    </main>

    <footer class="site-footer">
        <div class="footer-main">
            <div class="footer-brand">
                <a class="brand" href="{{ route('home') }}">
                    <span class="brand-mark" aria-hidden="true">A</span>
                    <span class="brand-name">Aevum <span>Labs</span></span>
                </a>
                <p class="footer-slogan">Autonomous Systems.<br>Managed Operations.</p>
                <p class="footer-copy">We build and operate the technology that helps ambitious teams do their best work.</p>
            </div>
            <div>
                <h2 class="footer-heading">Solutions &amp; Services</h2>
                <ul class="footer-links">
                    <li><a href="{{ route('solutions.show', 'web-saas') }}">Web &amp; SaaS</a></li>
                    <li><a href="{{ route('solutions.show', 'ai-workflows') }}">AI &amp; Workflows</a></li>
                    <li><a href="{{ route('solutions.show', 'enterprise-erp') }}">Enterprise Systems</a></li>
                    <li><a href="{{ route('solutions.show', 'managed-operations') }}">Managed Operations</a></li>
                </ul>
            </div>
            <div>
                <h2 class="footer-heading">Tech Stack &amp; Integrations</h2>
                <p class="footer-copy">Laravel · PHP · React · Python · MySQL · PostgreSQL · OpenAI · AWS</p>
                <ul class="footer-links">
                    <li><a href="{{ route('modules.index') }}">AI &amp; terminal</a></li>
                    <li><a href="{{ route('home') }}#architecture">How we architect</a></li>
                    <li><a href="{{ route('home') }}#audit-request">Discuss an integration</a></li>
                </ul>
            </div>
            <div>
                <h2 class="footer-heading">Legal &amp; Compliance</h2>
                <p class="footer-copy">Security-minded engineering, scoped access, and privacy-conscious handling of project information.</p>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}#company">Company</a></li>
                    <li><a href="{{ route('home') }}#audit-request">Contact &amp; data requests</a></li>
                    <li><a href="{{ route('home') }}#client-portal">Client access</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© {{ now()->year }} Aevum Labs. All rights reserved.</span>
            <div class="social-links" aria-label="Social and documentation links">
                <a href="https://github.com/" target="_blank" rel="noopener noreferrer">GitHub <span aria-hidden="true">↗</span></a>
                <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">LinkedIn <span aria-hidden="true">↗</span></a>
                <a href="{{ route('modules.index') }}">Documentation <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </footer>

    <dialog class="audit-dialog" id="audit-modal" aria-labelledby="audit-modal-title">
        <div class="dialog-content">
            <button class="dialog-close" type="button" aria-label="Close dialog" data-close-audit>×</button>
            <span class="eyebrow">A useful first conversation</span>
            <h2 id="audit-modal-title">Start with a technical audit.</h2>
            <p>Tell us what you are building, where the bottlenecks are, and what success looks like. We’ll use that context to shape a practical next step.</p>
            <a class="button button-primary" href="{{ route('home') }}#audit-request" data-close-audit>Request your audit <span aria-hidden="true">→</span></a>
        </div>
    </dialog>
</body>
</html>
