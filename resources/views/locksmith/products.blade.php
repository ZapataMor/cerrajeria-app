@extends('layouts.locksmith')

@section('title', 'Productos de cerrajería | Cerrajería Keypress')
@section('meta_description', 'Cerraduras, candados, llaves, controles, manijas y cerrojos con instalación a domicilio en Santa Marta.')

@section('content')
<header class="page-hero">
    <div class="site-container">
        <p class="eyebrow">Productos</p>
        <h1>Catálogo de productos</h1>
        <p>Cerraduras, candados y accesorios que suministramos e instalamos a domicilio. Las imágenes son de referencia.</p>
    </div>
</header>

<section class="section section--page-grid">
    <div class="site-container">
        <div class="card-grid card-grid--products">
            @foreach($products as $product)
                <article class="glass-card product-card">
                    <div class="product-card__visual">
                        <span><x-locksmith.icon :name="$product['icon']"/></span>
                        <small>{{ $product['title'] }}</small>
                    </div>
                    <div class="product-card__content">
                        <h2>{{ $product['title'] }}</h2>
                        <p>{{ $product['description'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="glass-panel callout-panel">
            <h2>¿Busca un producto en especial?</h2>
            <div class="location-notice location-notice--compact"><x-locksmith.icon name="pin"/> Lo llevamos e instalamos a domicilio en Santa Marta — sin local físico.</div>
            <div class="button-group">
                <a class="button button--primary button--large" href="tel:+573015736407"><x-locksmith.icon name="phone"/> Llamar ahora</a>
                <a class="button button--whatsapp button--large" href="https://wa.me/573015736407?text=Hola%20William%2C%20quiero%20consultar%20por%20un%20producto." target="_blank" rel="noopener"><x-locksmith.icon name="whatsapp"/> Consultar por WhatsApp</a>
            </div>
        </div>
    </div>
</section>
@endsection
