<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresenciaController extends Controller
{
    public function showPresencia(){
       
      
        return view('presencia_internacional');
      }
}
