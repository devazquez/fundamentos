<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticasController extends Controller
{
    private $ejercicios;
    private $practicas;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->ejercicios = array(
           '1' => array('2' =>'funcionamiento_css', '4' =>'funcionamiento_css2', '7'=>'css_medios'),
           '2' => array('2'=>'selector_universal', '5'=>'selector_descendente', '7'=>'selector_clase2'),
           '3' => array('1'=>'medidas2', '3'=>'anchura','5'=>'margin','9'=>'margin-padding', '13'=>'border','14'=>'Proyecto'),
           '4' => array('7'=>'postear', '14'=>'absolute','21'=>'foat', '22'=>'postear2'),

        );
        $this->practicas = array(
            '1'=> 'Funcionamiento del CSS',
            '2'=> 'Selectores CSS',
            '3'=> 'Modelo de Caja',
            '4'=> 'Posicionamientos'
        ); 
    }
    /**
     * Despliega la sección de prácticas.
     */
    public function index(){
        $practicas = $this->practicas;
        
        return view('practicas.home', compact('practicas'));
    }

    /**
     * Despliega una práctica en particular
     */
    public function view($practica){
        if(empty($this->practicas[$practica]))
            return response()->view('errors.404', [], 404);
        
        $ejercicios = $this->ejercicios[$practica];
        $nombrePractica = $this->practicas[$practica];
        //dd($ejercicios);
        return view('practicas.practica', compact('nombrePractica', 'practica', 'ejercicios') );
    }
}
