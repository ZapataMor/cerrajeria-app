@extends('layouts.locksmith')

@section('title', 'Cerrajería Keypress | Cerrajero a domicilio en Santa Marta')
@section('meta_description', 'Cerrajero a domicilio en Santa Marta: aperturas, cerraduras, duplicado de llaves y emergencias las 24 horas.')

@section('content')
<section class="hero">
    <div class="site-container hero__inner">
        <img class="hero__logo" src="{{ asset('images/keyPress/logo.png') }}" alt="Cerrajería Keypress">
        <div class="pill"><x-locksmith.icon name="pin"/> Servicio a domicilio · Santa Marta</div>
        <h1>Cerrajería a domicilio en Santa Marta</h1>
        <p class="hero__lead">Aperturas, cambio de cerraduras, duplicado de llaves y emergencias 24/7. Llegamos hasta donde usted esté.</p>
        <div class="hero__notice">
            <span><x-locksmith.icon name="pin"/></span>
            <strong>Sin local físico: el cerrajero se desplaza hasta su ubicación.</strong>
        </div>
        <div class="button-group">
            <a class="button button--primary button--large" href="tel:+573015736407"><x-locksmith.icon name="phone"/> Llamar ahora</a>
            <a class="button button--whatsapp button--large" href="https://wa.me/573015736407?text=Hola%20William%2C%20necesito%20un%20cerrajero%20a%20domicilio%20en%20Santa%20Marta." target="_blank" rel="noopener"><x-locksmith.icon name="whatsapp"/> WhatsApp</a>
        </div>
        <p class="availability">Atención 24 horas · Respuesta inmediata</p>
    </div>
</section>

<section class="trust-strip">
    <div class="site-container card-grid card-grid--four">
        @foreach($trustItems as $item)
            <article class="glass-card feature-card">
                <span class="feature-card__icon"><x-locksmith.icon :name="$item['icon']"/></span>
                <div>
                    <h2>{{ $item['title'] }}</h2>
                    <p>{{ $item['description'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>

<section class="section section--spacious">
    <div class="site-container">
        <div class="glass-panel about-panel">
            <div class="portrait-placeholder" role="img" aria-label="Espacio reservado para la fotografía de William">
                <div class="portrait-placeholder__mark"><x-locksmith.icon name="badge"/></div>
                <span>William</span>
                <small>Cerrajero profesional</small>
            </div>
            <div class="about-panel__content">
                <p class="eyebrow">Sobre el cerrajero</p>
                <h2 class="section-title">William, su cerrajero de confianza</h2>
                <p class="section-copy">Cerrajero profesional con más de 15 años de experiencia atendiendo hogares, negocios y vehículos en Santa Marta. Trabajo limpio, puntual y garantizado, con la discreción y seriedad que su seguridad merece.</p>
                <div class="tag-list">
                    <span><x-locksmith.icon name="badge"/> +15 años de experiencia</span>
                    <span><x-locksmith.icon name="check"/> +3.500 servicios</span>
                    <span><x-locksmith.icon name="clock"/> Respuesta &lt; 30 min</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="site-container">
        <div class="section-heading">
            <p class="eyebrow">Servicios</p>
            <h2 class="section-title">Soluciones para cada cerradura</h2>
            <p class="section-copy">Atendemos emergencias y trabajos programados en todo Santa Marta.</p>
        </div>
        <div class="card-grid card-grid--four section-grid">
            @foreach($featuredServices as $service)
                <article class="glass-card feature-card">
                    <span class="feature-card__icon"><x-locksmith.icon :name="$service['icon']"/></span>
                    <div>
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['description'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="centered-action">
            <a class="button button--outline" href="{{ route('services') }}">Ver todos los servicios <x-locksmith.icon name="arrow"/></a>
        </div>
    </div>
</section>

<section class="section section--spacious">
    <div class="site-container">
        <div class="glass-panel coverage-panel">
            <div>
                <p class="eyebrow">Zona de cobertura</p>
                <h2 class="section-title">Atendemos en toda Santa Marta</h2>
                <p class="section-copy">Nos desplazamos a cualquier lugar de Santa Marta y sus alrededores, sin importar el sector. Usted nos indica la dirección y vamos hasta allá.</p>
                <div class="coverage-badge"><x-locksmith.icon name="pin"/> Servicio a domicilio en toda la ciudad</div>
            </div>
            <div class="neighborhoods">
                @foreach($neighborhoods as $neighborhood)
                    <span>{{ $neighborhood }}</span>
                @endforeach
                <strong>y toda la ciudad</strong>
            </div>
        </div>
    </div>
</section>

<section class="section testimonials">
    <div class="site-container">
        <div class="section-heading">
            <p class="eyebrow">Testimonios</p>
            <h2 class="section-title">Lo que dicen nuestros clientes</h2>
        </div>
        <div class="card-grid card-grid--three section-grid">
            @foreach($testimonials as $testimonial)
                <article class="glass-card testimonial-card">
                    <div class="stars" aria-label="5 de 5 estrellas">
                        @for($i = 0; $i < 5; $i++) <x-locksmith.icon name="star"/> @endfor
                    </div>
                    <blockquote>“{{ $testimonial['quote'] }}”</blockquote>
                    <footer>
                        <strong>{{ $testimonial['author'] }}</strong>
                        <span>{{ $testimonial['location'] }}</span>
                    </footer>
                </article>
            @endforeach
        </div>
    </div>
</section>

@include('locksmith.partials.contact-card')
@endsection
