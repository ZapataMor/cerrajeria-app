<footer class="site-footer">
    <div class="site-container site-footer__inner">
        <div class="site-footer__grid">
            <div>
                <a class="footer-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/keyPress/logo.png') }}" alt="Cerrajería Keypress">
                </a>
                <p class="footer-description">Cerrajería profesional a domicilio en Santa Marta y sus alrededores.</p>
                <div class="footer-pill"><x-locksmith.icon name="pin"/> Sin local físico · 100% a domicilio</div>
            </div>
            <div>
                <h2 class="footer-heading">Contacto</h2>
                <div class="footer-links">
                    <a href="tel:+573015736407"><x-locksmith.icon name="phone"/> +57 301 573 6407</a>
                    <a href="https://wa.me/573015736407?text=Hola%20William%2C%20necesito%20un%20cerrajero%20a%20domicilio%20en%20Santa%20Marta." target="_blank" rel="noopener"><x-locksmith.icon name="whatsapp"/> WhatsApp</a>
                    <a href="mailto:contacto@cerrajeriakeypress.com"><x-locksmith.icon name="mail"/> contacto@cerrajeriakeypress.com</a>
                </div>
            </div>
            <div>
                <h2 class="footer-heading">Horario</h2>
                <div class="footer-schedule">
                    <strong><x-locksmith.icon name="clock"/> Emergencias: 24 horas</strong>
                    <span>Todos los días del año</span>
                    <span>Atención general:<br>Lun a Sáb · 7:00 a.m.–8:00 p.m.</span>
                </div>
            </div>
            <div>
                <h2 class="footer-heading">Navegación</h2>
                <div class="footer-navigation">
                    <a href="{{ route('home') }}">Inicio</a>
                    <a href="{{ route('services') }}">Servicios</a>
                    <a href="{{ route('products') }}">Productos</a>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <span>© {{ now()->year }} Cerrajería Keypress · Santa Marta, Colombia</span>
            <span>Servicio a domicilio · Atención 24/7</span>
        </div>
    </div>
</footer>
