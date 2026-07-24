@props(['name'])

<svg {{ $attributes->class(['site-icon']) }} aria-hidden="true" focusable="false">
    <use href="#ic-{{ $name }}"></use>
</svg>
