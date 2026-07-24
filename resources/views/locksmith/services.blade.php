@extends('layouts.locksmith')

@section('title', 'Servicios de cerrajería | Cerrajería Keypress')
@section('meta_description', 'Aperturas, cambio de cerraduras, llaves codificadas, cajas fuertes y emergencias de cerrajería a domicilio en Santa Marta.')

@section('content')
<header class="page-hero">
    <div class="site-container">
        <p class="eyebrow">Servicios</p>
        <h1>Todo lo que hacemos por usted</h1>
        <p>Servicio profesional a domicilio en Santa Marta. Llegamos con las herramientas para resolver en el sitio, sin que usted tenga que desplazarse.</p>
    </div>
</header>

<section class="section section--page-grid">
    <div class="site-container">
        <div class="card-grid card-grid--services">
            @foreach($services as $service)
                <article class="glass-card service-card">
                    <span class="feature-card__icon"><x-locksmith.icon :name="$service['icon']"/></span>
                    <h2>{{ $service['title'] }}</h2>
                    <p>{{ $service['description'] }}</p>
                </article>
            @endforeach
        </div>

        <div class="glass-panel callout-panel">
            <h2>¿Tiene una emergencia?</h2>
            <div class="location-notice location-notice--compact"><x-locksmith.icon name="pin"/> Servicio 100% a domicilio en Santa Marta — sin local físico.</div>
            <div class="button-group">
                <a class="button button--primary button--large" href="tel:+573015736407"><x-locksmith.icon name="phone"/> Llamar ahora</a>
                <a class="button button--whatsapp button--large" href="https://wa.me/573015736407?text=Hola%20William%2C%20necesito%20un%20cerrajero%20a%20domicilio%20en%20Santa%20Marta." target="_blank" rel="noopener"><x-locksmith.icon name="whatsapp"/> WhatsApp</a>
            </div>
        </div>
    </div>
</section>
@endsection
