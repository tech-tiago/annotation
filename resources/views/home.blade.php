<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Style CSS -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    </head>
    <body>
        <header>
            <div class="head_left"> 
                <img src="{{asset('imgs/logo.png')}}" alt="Annotation" title="Annotation" />
            </div>
            <div class="head_right">
                <button>Crir conta</button>
                <button>Login</button>
            </div>
        </header>
    </body>
</html>