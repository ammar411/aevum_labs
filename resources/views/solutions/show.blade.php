<x-app-layout>
    <section class="solution-hero section-shell">
        <p class="eyebrow">{{ $service['eyebrow'] }}</p>
        <h1>{{ $service['title'] }}</h1>
        <p class="solution-lede">{{ $service['description'] }}</p>
        <div class="hero-actions">
            <a class="button button-primary" href="{{ route('home') }}#audit-request">Discuss your project <span aria-hidden="true">↗</span></a>
            <a class="button button-quiet" href="{{ route('home') }}#services">All services <span aria-hidden="true">→</span></a>
        </div>
    </section>
    <section class="section-shell section-block solution-details">
        <div class="section-heading"><div><p class="eyebrow">What we deliver</p><h2>Built for your <span class="text-gradient">operating reality.</span></h2></div></div>
        <div class="solution-content">
            <div class="service-card">
                <h3>Capabilities</h3>
                <ul class="capability-list">
                    @foreach ($service['capabilities'] as $capability)
                        <li><span aria-hidden="true">↗</span>{{ $capability }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="service-card solution-tech">
                <p class="eyebrow">Technology foundation</p>
                <h3>{{ $service['technology'] }}</h3>
                <p>We choose implementation details to fit your existing systems, security needs, team, and long-term ownership plans.</p>
                <a class="text-link" href="{{ route('home') }}#audit-request">Talk through your stack <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>
</x-app-layout>
