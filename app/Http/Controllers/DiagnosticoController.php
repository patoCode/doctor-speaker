<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
    public function index(){
        return view('pacientes.diagnostico');
    }
    public function create(){
        return view('pacientes.menu-areas');
    }
    public function consulta($area){
        switch($area){
            case 'cabeza':                
                $dolores = array('0' => 1,'dolor2'=>2 );
                return view('pacientes.formularios.cabeza')->with('dolores', $dolores);
        }
    }
    public function store(Request $req)
    {

    }
}
