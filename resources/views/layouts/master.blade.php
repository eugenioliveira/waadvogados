<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wolney Araújo Dias - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header>

    {{--Cabeçalho--}}
    @include('layouts.partials.header')
    {{--Fim Cabeçalho--}}

    {{--Barra de Navegação--}}
    @include('layouts.partials.navbar')
    {{--Fim da barra de navegação--}}

</header>

@yield('content')

{{--Rodapé--}}
@include('layouts.partials.footer')
{{--Fim do rodapé--}}

<script src="{{ asset('js/app.js') }}"></script>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"
        integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB"
        crossorigin="anonymous"></script>
</body>
</html>