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
     * Muestra la sección de prácticas.
     */
    public function index(){
        return view('practicas.home');
    }
}
