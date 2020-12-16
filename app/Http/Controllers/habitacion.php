<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class habitacion extends Controller
{
    public function inicio(){

        $habitaciones = DB::table('habitacion')->get();
         return view('welcome', [
             'habitaciones' => $habitaciones
         ]);
    }
}
