<x-app-layout>
    <section class="modules-hero section-shell">
        <p class="eyebrow"><span class="eyebrow-line"></span> AI &amp; Terminal / Operations</p>
        <h1>Intelligence that <span class="text-gradient">connects to the work.</span></h1>
        <p>Explore how model inference, integrations, and human operations can work together in a governed business workflow.</p>
    </section>

    <section class="section-shell section-block" id="terminal">
        <div class="section-heading"><div><p class="eyebrow">A representative workflow</p><h2>Live terminal <span class="text-gradient">simulation.</span></h2></div><p>A visual walkthrough of model inference, webhook routing, CRM synchronization, and human review.</p></div>
        <div class="terminal-window">
            <div class="terminal-head"><div class="window-dots"><i></i><i></i><i></i></div><span>aevum-ops / workflow-diagnostics</span><span class="terminal-live"><i></i> SIMULATION</span></div>
            <div class="terminal-body" aria-label="Simulated workflow diagnostics">
                <p><span class="terminal-time">09:41:08</span><span class="terminal-prompt">$</span> aevum workflow inspect --pipeline inbound-lead</p>
                <p><span class="terminal-time">09:41:08</span><span class="terminal-ok">[OK]</span> Runtime ready · policy set: lead-intake-v2</p>
                <p><span class="terminal-time">09:41:09</span><span class="terminal-info">[MODEL]</span> Inference request accepted · context filtered</p>
                <p><span class="terminal-time">09:41:09</span><span class="terminal-info">[MODEL]</span> Qualification result generated · confidence threshold met</p>
                <p><span class="terminal-time">09:41:10</span><span class="terminal-ok">[WEBHOOK]</span> Event lead.qualified routed to CRM connector</p>
                <p><span class="terminal-time">09:41:10</span><span class="terminal-ok">[CRM]</span> Contact sync complete · duplicate check passed</p>
                <p><span class="terminal-time">09:41:11</span><span class="terminal-warn">[OPS]</span> Review task queued for assigned technical operator</p>
                <p class="terminal-final"><span class="terminal-time">09:41:11</span><span class="terminal-prompt">$</span> <span class="terminal-cursor" aria-hidden="true"></span> Workflow simulation complete</p>
            </div>
            <div class="terminal-foot"><span>Each deployment is configured for its environment and access policies.</span><span><i class="status-dot"></i> Pipeline ready</span></div>
        </div>
    </section>

    <section class="ops-section" id="operations">
        <div class="section-shell section-block">
            <div class="section-heading"><div><p class="eyebrow">Human + AI BPO layer</p><h2>Automation with <span class="text-gradient">accountability.</span></h2></div><p>Technical virtual assistants work alongside your automated pipelines to keep operational details from falling through the cracks.</p></div>
            <div class="ops-grid">
                <article class="ops-card">
                    <span class="ops-kicker">01 / HUMAN OPERATIONS</span>
                    <h3>Technical Virtual Assistants</h3>
                    <p>People provide context, consistency, and follow-through for work that benefits from human judgment.</p>
                    <ul><li>Verify lead quality and CRM records</li><li>Maintain data hygiene and follow-up sequences</li><li>Review exceptions and flag workflow gaps</li><li>Document processes and operational handoffs</li></ul>
                </article>
                <div class="ops-connector" aria-hidden="true"><span>↔</span></div>
                <article class="ops-card ops-card-ai">
                    <span class="ops-kicker">02 / AUTOMATED PIPELINES</span>
                    <h3>Connected Systems &amp; AI</h3>
                    <p>Automations perform routine, observable tasks and surface exceptions for review.</p>
                    <ul><li>Route events across CRM, ERP, and web apps</li><li>Classify inbound requests against agreed rules</li><li>Monitor synchronization and report failures</li><li>Keep an auditable history of system actions</li></ul>
                </article>
            </div>
            <div class="ops-flow"><span>Capture</span><b>→</b><span>Automate</span><b>→</b><span>Verify</span><b>→</b><span>Improve</span></div>
        </div>
    </section>

    <section class="section-shell section-block modules-cta">
        <p class="eyebrow">Designed for the way your team works</p>
        <h2>Build the right <span class="text-gradient">operating system.</span></h2>
        <p>Start with a technical audit to identify the best opportunities across your data, workflows, and customer experience.</p>
        <a class="button button-primary" href="{{ route('home') }}#audit-request">Plan your audit <span aria-hidden="true">→</span></a>
    </section>
</x-app-layout>
