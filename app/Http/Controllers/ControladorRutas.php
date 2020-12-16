<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControladorRutas extends Controller
{
    public function reservaciones($id){
        //$reservaciones = reservaciones (consulta para machos, no tocar); 
        return view('reservaciones');
    }
    public function cerrar_sesion(){
        Auth::logout();
        return redirect()->action('habitacion@inicio');
    }
}
