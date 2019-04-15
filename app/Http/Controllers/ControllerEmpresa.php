<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEmpresa extends Controller
{
    public function index()
    {
        return 'HOME PAGE DA EMPRESA';
    }

    public function contato()
    {
        return view('contato');
    }

    public function sobre()
    {
        $dado = "blogDaniel@gut.com";
        $telefone = '38 3223-0000';

        //Chamando a view e passando um dado
        //with('nome variavel', valor)
        return view('sobre')->with('email', $dado)
        ->with('telefone', $telefone);

        //Outra forma passar dado pra uma view
        //return view('sobre')->withEmail($dado);
    }
}
