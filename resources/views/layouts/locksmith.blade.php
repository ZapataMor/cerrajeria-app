<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Cerrajería profesional a domicilio en Santa Marta. Emergencias, aperturas, cerraduras y llaves.')">
    <meta name="theme-color" content="#f1f5fa">
    <title>@yield('title', 'Cerrajería Keypress')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="locksmith-site">
    <div class="ambient-background" aria-hidden="true">
        <span class="ambient-background__orb ambient-background__orb--blue"></span>
        <span class="ambient-background__orb ambient-background__orb--navy"></span>
        <span class="ambient-background__orb ambient-background__orb--gold"></span>
    </div>

    @include('locksmith.partials.icon-sprite')
    @include('locksmith.partials.navigation')

    <main class="site-main">
        @yield('content')
        @include('locksmith.partials.footer')
        <div class="mobile-action-spacer" aria-hidden="true"></div>
    </main>

    @include('locksmith.partials.mobile-actions')
</body>
</html>
