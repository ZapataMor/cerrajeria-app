<header class="site-header" data-site-header>
    <div class="site-header__inner">
        <a class="brand-link" href="{{ route('home') }}" aria-label="Cerrajería Keypress, ir a inicio">
            <img src="{{ asset('images/keyPress/logo.png') }}" alt="Cerrajería Keypress">
        </a>

        <div class="desktop-navigation">
            <nav class="nav-links" aria-label="Navegación principal">
                <a class="nav-link {{ request()->routeIs('home') ? 'is-active' : '' }}" href="{{ route('home') }}" @if(request()->routeIs('home')) aria-current="page" @endif>Inicio</a>
                <a class="nav-link {{ request()->routeIs('services') ? 'is-active' : '' }}" href="{{ route('services') }}" @if(request()->routeIs('services')) aria-current="page" @endif>Servicios</a>
                <a class="nav-link {{ request()->routeIs('products') ? 'is-active' : '' }}" href="{{ route('products') }}" @if(request()->routeIs('products')) aria-current="page" @endif>Productos</a>
            </nav>

            <div class="header-actions">
                <a class="button button--header-call" href="tel:+573015736407">
                    <x-locksmith.icon name="phone"/> Llamar
                </a>
                <a class="button button--header-whatsapp" href="https://wa.me/573015736407?text=Hola%20William%2C%20necesito%20un%20cerrajero%20a%20domicilio%20en%20Santa%20Marta." target="_blank" rel="noopener">
                    <x-locksmith.icon name="whatsapp"/> WhatsApp
                </a>
            </div>
        </div>

        <div class="mobile-navigation-actions">
            <a class="icon-button icon-button--call" href="tel:+573015736407" aria-label="Llamar">
                <x-locksmith.icon name="phone"/>
            </a>
            <a class="icon-button icon-button--whatsapp" href="https://wa.me/573015736407?text=Hola%20William%2C%20necesito%20un%20cerrajero%20a%20domicilio%20en%20Santa%20Marta." target="_blank" rel="noopener" aria-label="Escribir por WhatsApp">
                <x-locksmith.icon name="whatsapp"/>
            </a>
            <button class="icon-button" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="mobile-menu" data-menu-toggle>
                <x-locksmith.icon name="menu" data-menu-icon-open/>
                <x-locksmith.icon name="close" data-menu-icon-close hidden/>
            </button>
        </div>
    </div>
</header>

<div class="menu-overlay" data-menu-overlay hidden></div>
<nav class="mobile-menu" id="mobile-menu" aria-label="Navegación móvil" data-mobile-menu hidden>
    <a class="mobile-menu__link" href="{{ route('home') }}">
        <span>Inicio</span>
        @if(request()->routeIs('home')) <x-locksmith.icon name="check"/> @endif
    </a>
    <a class="mobile-menu__link" href="{{ route('services') }}">
        <span>Servicios</span>
        @if(request()->routeIs('services')) <x-locksmith.icon name="check"/> @endif
    </a>
    <a class="mobile-menu__link" href="{{ route('products') }}">
        <span>Productos</span>
        @if(request()->routeIs('products')) <x-locksmith.icon name="check"/> @endif
    </a>
    <div class="mobile-menu__divider"></div>
    <a class="mobile-menu__contact" href="tel:+573015736407"><x-locksmith.icon name="phone"/> Llamar ahora</a>
    <a class="mobile-menu__contact mobile-menu__contact--whatsapp" href="https://wa.me/573015736407?text=Hola%20William%2C%20necesito%20un%20cerrajero%20a%20domicilio%20en%20Santa%20Marta." target="_blank" rel="noopener"><x-locksmith.icon name="whatsapp"/> Escribir por WhatsApp</a>
</nav>
