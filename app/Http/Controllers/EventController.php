<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller{
    public function index(){
        $nome = 'Breno';
        $idade = 21;

        $arr = [1, 2, 3, 4, 5];

        $nomes = ["Breno", "Pacheco", "Matias", "Eder"];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
