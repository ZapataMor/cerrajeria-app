const header = document.querySelector('[data-site-header]');
const menuToggle = document.querySelector('[data-menu-toggle]');
const mobileMenu = document.querySelector('[data-mobile-menu]');
const menuOverlay = document.querySelector('[data-menu-overlay]');

if (header) {
    const updateHeader = () => header.classList.toggle('is-scrolled', window.scrollY > 10);

    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });
}

if (menuToggle && mobileMenu && menuOverlay) {
    const openIcon = menuToggle.querySelector('[data-menu-icon-open]');
    const closeIcon = menuToggle.querySelector('[data-menu-icon-close]');

    const setMenuOpen = (open) => {
        menuToggle.setAttribute('aria-expanded', String(open));
        menuToggle.setAttribute('aria-label', open ? 'Cerrar menú' : 'Abrir menú');
        mobileMenu.hidden = !open;
        menuOverlay.hidden = !open;
        openIcon.hidden = open;
        closeIcon.hidden = !open;
        document.body.classList.toggle('menu-is-open', open);
    };

    menuToggle.addEventListener('click', () => {
        setMenuOpen(menuToggle.getAttribute('aria-expanded') !== 'true');
    });

    menuOverlay.addEventListener('click', () => setMenuOpen(false));
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            setMenuOpen(false);
            menuToggle.focus();
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 760) {
            setMenuOpen(false);
        }
    });
}
