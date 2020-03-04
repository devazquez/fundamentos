<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        
    }
    /**
     * Despliega la sección de prácticas.
     */
    public function index(){
        return view('practicas.home');
    }

    /**
     * Despliega una práctica en particular
     */
    public function view($practica){
        return view('practicas.practica', compact('practica') );
    }
}
