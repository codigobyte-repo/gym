<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function index($genero, $lado, $musculo){
        
        return view('body.body', ['genero' => $genero, 'lado' => $lado, 'musculo' => $musculo]);
    }
}
