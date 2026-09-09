<!DOCTYPE html>
<html>
    <head>
    <title>@yield('title', 'Movie Catalog')</title>
    </head>
    <body>
        @include('partials.nav')
        <hr>
        <main>
        @yield('content')
        </main>
        <hr>
    <footer>
    <p>&copy; {{ date('Y') }} MOVIE CATALOG NI SURNAME </p>
    </footer>
    </body>
</html>
