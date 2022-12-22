<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    </head>
    <body>
        <h1>Laravel 101</h1>
        <a href="/contact-us"><h2>Contactez-nous</h2></a>
        <a href="/about-us"><h2>A Propos</h2></a>
        <a href="/articles"><h2>Articles</h2></a>
        <a href="/create"><h2>Contenu</h2></a>

        @yield('content')
        @yield('titre')
        

    </body>
</html>