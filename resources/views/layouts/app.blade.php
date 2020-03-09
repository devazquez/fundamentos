<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <!--<link href="https://bootswatch.com/4/simplex/bootstrap.css" rel="stylesheet">-->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">UID</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('practicas.index') ? 'active' : '' }}" href="{{  route('practicas.index') }}">Prácticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <main role="main">
            <div class="container">
                <!-- Example row of columns -->
                @yield('content')
            </div> <!-- /container -->
        </main>
         
    </div>
    <hr>   
    <footer class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Clase de diseño de interfaces de usuario</h2>
                <p>Profesor 	Selene Marisol Martínez Ramírez	 lunes, miércoles y viernes de 	10am a 11am  en el salón	P104 </p>
                <p>Ayudante 	Darío Emmanuel Vázquez Ceballos	martes y jueves  de	10am a 11am en el Salón 	P104 </p>
                <p>Ayudante Lab. 	Magdiel Juárez Guerrero	 jueves de	16pm a 18pm  en el	Taller de Computación Visual e Innovación Tecnológica </p>
                
            </div>
            <div class="col-md-4">
                <h2>Enlaces de Interés</h2>
                <ul>
                    <li><a href="https://uxdesign.cc/"> UX Collective </a></li>
                    <li><a href="http://patterntap.com/patterntap"> Patterntap </a></li>
                    <li><a href="https://www.w3.org/TR/WCAG21/"> WCAG21 </a></li>
                    <li><a href="https://medium.com/"> Medium </a></li>
                </ul>
                
            </div>
        </div>
        <p>&copy;  innovasoft       Última actualización: 04/03/2020</p>
    </footer>


    <script src="{{asset('js/app.js')}}"></script> 
    <script>
        $(document).ready(function(){
            $(".dropdown-toggle").dropdown();
            $('[data-toggle="popover"]').popover(); 
            
            window.setTimeout(function() {
                $(".alert.alert-block").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
                });
            }, 10500);
        });º
    </script>
    </body>
</html>
