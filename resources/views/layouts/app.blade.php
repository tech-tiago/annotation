<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notte</title>

        <!-- Style CSS -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    </head>
    <body>
        @include('components.header')

        @yield('content', 'Nenhum conteúdo renderizado!')
    </body>
</html>