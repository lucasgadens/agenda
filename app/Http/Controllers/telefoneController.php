<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use Illuminate\Http\Request;

class telefoneController extends Controller
{
    public function trazer_nomes(Type $var = null)
    {
        if  
        return view('telefone', compact('contatos')); 
    }

}

public function new (){
    return view('telefones');
}
