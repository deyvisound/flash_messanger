
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">        
        <link href="{{ asset('css/materialize.css') }}" rel="stylesheet" type="text/css">        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"> 

    </head>
    <body>

        <!-- Flash Messages-->
        @include('_include.messages')

        @yield('content')

        <footer class="page-footer">          
          <div class="footer-copyright">
            <div class="container">
            © 2020 Deyvison Estevam
            <a class="grey-text text-lighten-4 right" target="blank" href="https://deyvisound.github.io/portfolio/">Sobre Mim</a>
            </div>
          </div>
        </footer>
    </body>

    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>

    <!-- Flash Dialogs-->
    @include('_include.toast')

</html>
