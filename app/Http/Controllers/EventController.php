<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "Mateus";
        $idade = 29;

        $arr = [10, 20, 30, 40, 50];
        $nomes = ["Metheus", "Maria", "João", "Saulo"];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => 'programador',
                'arr' => $arr,
                'nomes' => $nomes
            ]
        );
    }

    public function create(){
        return view('events.create');
    }
}
