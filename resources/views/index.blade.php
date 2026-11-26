<x-app-layout>
    <section class="hero section-shell">
        <div class="hero-copy">
            <p class="eyebrow"><span class="eyebrow-line"></span> Technology built around your business</p>
            <h1>Custom Websites, Autonomous AI Agents &amp; <span class="text-gradient">Enterprise ERP Architecture.</span></h1>
            <p class="hero-intro">We engineer scalable web platforms, custom AI assistants, and ERP backends—backed by managed technical operations to automate your business.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="#audit-request">Build Your System <span aria-hidden="true">↗</span></a>
                <button class="button button-quiet" type="button" data-open-audit>Schedule Technical Audit <span aria-hidden="true">↗</span></button>
            </div>
            <div class="hero-proof">
                <span class="proof-indicator" aria-hidden="true"></span>
                <span>One technical partner from architecture through ongoing operations</span>
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-orbit orbit-one"></div>
            <div class="hero-orbit orbit-two"></div>
            <div class="hero-core"><span>A</span><small>AEVUM / CORE</small></div>
            <div class="floating-label label-top"><span class="status-dot"></span> SYSTEMS ONLINE</div>
            <div class="floating-label label-bottom"><span>01 — 04</span> Connected service pillars</div>
            <div class="hero-grid" aria-hidden="true"></div>
        </div>
        <div class="hero-scroll"><span></span> Scroll to explore</div>
    </section>

    <section class="stack-band" aria-label="Technologies and platforms">
        <div class="section-shell stack-inner">
            <p class="eyebrow">Built to work with your stack</p>
            <div class="stack-marquee">
                <div class="stack-track">
                    <div class="stack-list"><span>Laravel</span><span>Python</span><span>React</span><span>Follow Up Boss</span><span>MySQL</span><span>OpenAI</span><span>AWS</span></div>
                    <div class="stack-list" aria-hidden="true"><span>Laravel</span><span>Python</span><span>React</span><span>Follow Up Boss</span><span>MySQL</span><span>OpenAI</span><span>AWS</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-shell section-block" id="services">
        <div class="section-heading">
            <div><p class="eyebrow">Four disciplines. One delivery partner.</p><h2>Systems that move <span class="text-gradient">work forward.</span></h2></div>
            <p>From the first customer touchpoint to the workflows behind the scenes, we connect your software, data, and people.</p>
        </div>
        <div class="service-grid">
            <article class="service-card">
                <div class="card-topline"><span>01</span><span class="card-icon" aria-hidden="true">↗</span></div>
                <h3>Modern Web &amp; SaaS Development</h3>
                <p>Custom React and Laravel Blade frontends, high-performance web platforms, and headless CMS architectures built for speed and scale.</p>
                <div class="tech-tags"><span>Laravel</span><span>PHP</span><span>React.js</span><span>Tailwind CSS</span></div>
                <a class="text-link" href="{{ route('solutions.show', 'web-saas') }}">Explore web &amp; SaaS <span aria-hidden="true">→</span></a>
            </article>
            <article class="service-card">
                <div class="card-topline"><span>02</span><span class="card-icon" aria-hidden="true">⌘</span></div>
                <h3>Autonomous AI Assistants &amp; Workflows</h3>
                <p>Custom LLM integrations, Text-to-SQL reporting engines, RAG vector search pipelines, and automated CRM lead-qualification bots.</p>
                <div class="tech-tags"><span>Python</span><span>OpenAI</span><span>RAG</span><span>Vector DBs</span></div>
                <a class="text-link" href="{{ route('solutions.show', 'ai-workflows') }}">Explore AI workflows <span aria-hidden="true">→</span></a>
            </article>
            <article class="service-card">
                <div class="card-topline"><span>03</span><span class="card-icon" aria-hidden="true">▦</span></div>
                <h3>Custom Enterprise ERPs &amp; Core Engines</h3>
                <p>Multi-tenant SaaS architectures, custom ERP and POS business engines, isolated database management, and automated webhook pipelines.</p>
                <div class="tech-tags"><span>MySQL</span><span>PostgreSQL</span><span>Laravel</span><span>REST APIs</span></div>
                <a class="text-link" href="{{ route('solutions.show', 'enterprise-erp') }}">Explore enterprise systems <span aria-hidden="true">→</span></a>
            </article>
            <article class="service-card service-card-featured" id="managed-operations">
                <div class="card-topline"><span>04</span><span class="card-icon" aria-hidden="true">◎</span></div>
                <h3>Managed Technical Operations</h3>
                <p>Technical virtual assistants, supported by Aevum Labs, execute CRM hygiene, monitor data pipelines, and maintain automated follow-up sequences.</p>
                <div class="tech-tags"><span>CRM Automation</span><span>Workflow Ops</span><span>Tech VAs</span></div>
                <a class="text-link" href="{{ route('solutions.show', 'managed-operations') }}">Explore managed operations <span aria-hidden="true">→</span></a>
            </article>
        </div>
    </section>

    <section class="section-shell section-block architecture-section" id="architecture">
        <div class="section-heading">
            <div><p class="eyebrow">Designed as one system</p><h2>From first signal to <span class="text-gradient">human follow-through.</span></h2></div>
            <p>Connect customer-facing experiences to the systems and people responsible for acting on them.</p>
        </div>
        <div class="pipeline">
            <div class="pipeline-step"><span class="step-index">01</span><span class="step-symbol">↗</span><h3>Web Form Submit</h3><p>Capture and validate an inbound request.</p></div>
            <span class="pipeline-arrow" aria-hidden="true">→</span>
            <div class="pipeline-step"><span class="step-index">02</span><span class="step-symbol">✳</span><h3>AI Qualification Agent</h3><p>Enrich context and route the next action.</p></div>
            <span class="pipeline-arrow" aria-hidden="true">→</span>
            <div class="pipeline-step"><span class="step-index">03</span><span class="step-symbol">▤</span><h3>ERP Database</h3><p>Sync operational records through APIs.</p></div>
            <span class="pipeline-arrow" aria-hidden="true">→</span>
            <div class="pipeline-step"><span class="step-index">04</span><span class="step-symbol">◉</span><h3>Technical Operator Alert</h3><p>Bring a person in when judgment matters.</p></div>
        </div>
        <div class="code-panel">
            <div class="code-panel-head"><span class="window-dots"><i></i><i></i><i></i></span><span>event-pipeline / live architecture preview</span><span class="code-status"><i></i> READY</span></div>
            <pre><code><span class="code-muted">// A predictable handoff, from intake to action</span>
{
  <span class="code-key">"event"</span>: <span class="code-string">"lead.created"</span>,
  <span class="code-key">"qualifier"</span>: { <span class="code-key">"mode"</span>: <span class="code-string">"AI + rules"</span>, <span class="code-key">"human_review"</span>: <span class="code-bool">true</span> },
  <span class="code-key">"destination"</span>: <span class="code-string">"erp.contacts.upsert"</span>,
  <span class="code-key">"operations"</span>: <span class="code-string">"notify.assigned_operator"</span>
}</code></pre>
        </div>
    </section>

    <section class="case-section">
        <div class="section-shell section-block">
            <div class="section-heading">
                <div><p class="eyebrow">Outcomes that matter</p><h2>Less friction. <span class="text-gradient">More momentum.</span></h2></div>
                <p>Practical automation creates value when it shortens response times and gives teams better access to information.</p>
            </div>
            <div class="case-grid">
                <article class="case-card">
                    <span class="case-type">REAL ESTATE / CRM AUTOMATION</span>
                    <div class="case-visual case-visual-one" aria-hidden="true"><span>LEAD → ROUTE → RESPOND</span></div>
                    <h3>Every inquiry gets a faster next step.</h3>
                    <p>Automated a web-to-CRM pipeline, reducing lead response times from 15 minutes to under 60 seconds.</p>
                    <div class="case-metric"><strong>&lt;60 sec</strong><span>lead response time</span></div>
                </article>
                <article class="case-card">
                    <span class="case-type">ENTERPRISE / ERP + AI</span>
                    <div class="case-visual case-visual-two" aria-hidden="true"><span>QUESTION → INSIGHT</span></div>
                    <h3>Make operational data easier to use.</h3>
                    <p>A natural-language Text-to-SQL reporting engine helped save 40+ engineering hours monthly.</p>
                    <div class="case-metric"><strong>40+ hrs</strong><span>saved each month</span></div>
                </article>
            </div>
        </div>
    </section>

    <section class="section-shell section-block" id="company">
        <div class="company-panel" id="client-portal">
            <div>
                <p class="eyebrow">Aevum Labs / Company</p>
                <h2>Technology should make the next step <span class="text-gradient">obvious.</span></h2>
                <p>We bring product engineering, applied AI, business systems, and technical operations together—so your tools support the way your team actually works.</p>
            </div>
            <div class="company-aside">
                <span class="status-dot"></span>
                <div><strong>Client portal</strong><p>Existing clients can access their workspace through their dedicated account link. Need access? Contact your project lead or request an introduction.</p></div>
                <a class="text-link" href="#audit-request">Contact Aevum Labs <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <section class="section-shell section-block pricing-section" id="pricing">
        <div class="section-heading">
            <div><p class="eyebrow">Engagement models</p><h2>Right-sized for <span class="text-gradient">what you need.</span></h2></div>
            <p>We scope around your goals, existing systems, and operating needs—not one-size-fits-all tiers.</p>
        </div>
        <div class="model-grid">
            <article class="model-card"><span>01 / DEFINE</span><h3>Technical Audit</h3><p>Map your current state, clarify priorities, and identify the most useful next steps.</p><a class="text-link" href="#audit-request">Start a conversation <span aria-hidden="true">→</span></a></article>
            <article class="model-card model-card-highlight"><span>02 / BUILD</span><h3>Project Delivery</h3><p>Build a web platform, AI workflow, or core system with clear milestones and ownership.</p><a class="text-link" href="#audit-request">Scope a project <span aria-hidden="true">→</span></a></article>
            <article class="model-card"><span>03 / OPERATE</span><h3>Managed Operations</h3><p>Keep workflows, integrations, and data operations healthy as your needs evolve.</p><a class="text-link" href="#audit-request">Discuss ongoing support <span aria-hidden="true">→</span></a></article>
        </div>
    </section>

    <section class="section-shell section-block audit-section" id="audit-request">
        <div class="audit-intro">
            <p class="eyebrow">Tell us what you’re working on</p>
            <h2>Make your next move <span class="text-gradient">with a clear plan.</span></h2>
            <p>Share a little context and our team will follow up about an audit or the right technical partner for your project.</p>
            <div class="audit-note"><span class="status-dot"></span><span>Your details are used to respond to this request. We don’t sell lead information.</span></div>
        </div>
        <form class="audit-form" action="{{ route('audit-requests.store') }}" method="POST">
            @csrf
            @if (session('status'))
                <div class="form-success" role="status">{{ session('status') }}</div>
            @endif
            @if ($errors->any())
                <div class="form-error-summary" role="alert">Please review the highlighted fields and try again.</div>
            @endif
            <div class="form-grid">
                <div class="field">
                    <label for="name">Full name</label>
                    <input id="name" name="name" type="text" autocomplete="name" maxlength="120" value="{{ old('name') }}" required @error('name') aria-invalid="true" aria-describedby="name-error" @enderror>
                    @error('name')<span class="field-error" id="name-error">{{ $message }}</span>@enderror
                </div>
                <div class="field">
                    <label for="email">Business email</label>
                    <input id="email" name="email" type="email" autocomplete="email" maxlength="255" value="{{ old('email') }}" required @error('email') aria-invalid="true" aria-describedby="email-error" @enderror>
                    @error('email')<span class="field-error" id="email-error">{{ $message }}</span>@enderror
                </div>
                <div class="field">
                    <label for="company-name">Company name</label>
                    <input id="company-name" name="company" type="text" autocomplete="organization" maxlength="160" value="{{ old('company') }}" required @error('company') aria-invalid="true" aria-describedby="company-error" @enderror>
                    @error('company')<span class="field-error" id="company-error">{{ $message }}</span>@enderror
                </div>
                <div class="field">
                    <label for="tech-stack">Tech stack</label>
                    <select id="tech-stack" name="tech_stack" required @error('tech_stack') aria-invalid="true" aria-describedby="tech-stack-error" @enderror>
                        <option value="">Select a stack</option>
                        @foreach (['Laravel', 'PHP', 'React', 'Python', 'MySQL', 'PostgreSQL', 'OpenAI', 'AWS', 'Follow Up Boss', 'Other'] as $stack)
                            <option value="{{ $stack }}" @selected(old('tech_stack') === $stack)>{{ $stack }}</option>
                        @endforeach
                    </select>
                    @error('tech_stack')<span class="field-error" id="tech-stack-error">{{ $message }}</span>@enderror
                </div>
                <div class="field">
                    <label for="need">Primary need</label>
                    <select id="need" name="need" required @error('need') aria-invalid="true" aria-describedby="need-error" @enderror>
                        <option value="">What would you like to work on?</option>
                        <option value="web" @selected(old('need') === 'web')>Web &amp; SaaS</option>
                        <option value="ai" @selected(old('need') === 'ai')>AI &amp; workflows</option>
                        <option value="erp" @selected(old('need') === 'erp')>ERP &amp; core systems</option>
                        <option value="managed-ops" @selected(old('need') === 'managed-ops')>Managed operations</option>
                        <option value="full-bundle" @selected(old('need') === 'full-bundle')>Full bundle</option>
                    </select>
                    @error('need')<span class="field-error" id="need-error">{{ $message }}</span>@enderror
                </div>
                <div class="field">
                    <label for="budget">Estimated budget</label>
                    <select id="budget" name="budget" required @error('budget') aria-invalid="true" aria-describedby="budget-error" @enderror>
                        <option value="">Choose a range</option>
                        <option value="under-10k" @selected(old('budget') === 'under-10k')>Under $10,000</option>
                        <option value="10k-25k" @selected(old('budget') === '10k-25k')>$10,000 – $25,000</option>
                        <option value="25k-50k" @selected(old('budget') === '25k-50k')>$25,000 – $50,000</option>
                        <option value="50k-plus" @selected(old('budget') === '50k-plus')>$50,000+</option>
                        <option value="undetermined" @selected(old('budget') === 'undetermined')>Not sure yet</option>
                    </select>
                    @error('budget')<span class="field-error" id="budget-error">{{ $message }}</span>@enderror
                </div>
            </div>
            <button class="button button-primary form-submit" type="submit">Request a technical audit <span aria-hidden="true">→</span></button>
            <p class="form-disclaimer">By submitting, you agree that Aevum Labs may contact you about this request.</p>
        </form>
    </section>
</x-app-layout>
