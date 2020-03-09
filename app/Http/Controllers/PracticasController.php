<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticasController extends Controller
{
    private $ejercicios;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->ejercicios = array(
           '1' => array('1','2'),
           '2' => array('1','2','3')
        );
        
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
        $ejercicios = $this->ejercicios[$practica];
        //dd($ejercicios);
        return view('practicas.practica', compact('practica', 'ejercicios') );
    }
}
