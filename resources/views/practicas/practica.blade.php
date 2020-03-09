@extends('layouts.app')

@section('content')
<div class="container home-inscripcion">
    <div class="jumbotron">
        <div class="container">
            <h3 class="display-4">Práctica {{ $practica }} </h3>
            <p>Página Web del curso de Diseño de Interfaces en el cliclo escolar 2020-2 en la Facultad de Ciencias de la UNAM</p>
        </div>
    </div>
    @foreach ($ejercicios as $ejercicio)    
    <div class="card">
        <div class="card-header">
            <h3 class="title m-b-md flex-center">
                Ejercicio {{$ejercicio}}
            </h3>                
        </div>
            
        <div class="card-body">
            <div class="row practica{{$practica}} ejercicio{{$ejercicio}}" >
                @include("practicas.practica$practica.ejercicio$ejercicio")
            </div>
        </div>
    </div> 
    <br>
    @endforeach
</div>
@endsection