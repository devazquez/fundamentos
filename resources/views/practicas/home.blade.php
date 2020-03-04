@extends('layouts.app')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container home-inscripcion">

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Diseño de Interfaces 2020-2</h1>
        <p>Página Web del curso de Diseño de Interfaces en el cliclo escolar 2020-2 en la Facultad de Ciencias de la UNAM</p>
        <p> En esta sección se encuentran los ejemplos y ejercicios de las prácticas de CSS y Bootstrap <a class="btn btn-primary btn-lg" href="#" role="button"> &raquo;</a></p>
    </div>
</div>
    
    <div class="row justify-content-center">
        
        <div class="col-md-12">
        
            <div class="card">
                <div class="card-header">
                    <h3 class="title m-b-md flex-center">
                        Prácticas de CSS
                    </h3>                
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a class="navbar-brand" href="{{ route('practicas.view', 1 )}}">Práctica 1</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="navbar-brand" href="{{ route('practicas.view', 2 )}}">Práctica 2</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="navbar-brand" href="{{ route('practicas.view', 3 )}}">Práctica 3</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="navbar-brand" href="{{ route('practicas.view', 4 )}}">Práctica 4</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="navbar-brand" href="{{ route('practicas.view', 5 )}}">Práctica 5</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                        <ul class="list-group">
                                <li class="list-group-item">
                                    <a class="navbar-brand" href="{{ route('practicas.view', 6 )}}">Práctica 6</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="navbar-brand" href="{{ route('practicas.view', 7 )}}">Práctica 7</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="navbar-brand" href="{{ route('practicas.view', 8 )}}">Práctica 8</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="navbar-brand" href="{{ route('practicas.view', 9 )}}">Práctica 9</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="navbar-brand" href="{{ route('practicas.view', 10 )}}">Práctica 10</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
