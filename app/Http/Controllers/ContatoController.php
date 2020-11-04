<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use App\Models\Contatos;
use App\Http\Controllers\Exception;
use RealRashid\SweetAlert\Facades\Alert;
use PDOException;


class ContatoController extends Controller
{
    private $contato;

    public function index(){
        $data = ['data'=> $this->contato];
        return response()->json($data);

    }

    public function show(Contatos $id){
        $data = ['data'=> $id];
        return response()->json($data);
    }

    public function new(){
        return view ('novo_contato');
    }

    public function store(Request $request){
        try{
            $contatoData = $request->all();
            $this->contato->create($contatoData);

            return response()->json(['msg'=>'Contato adicionado com sucesso!!', 201]);
        }catch(Exception $erro){
            //Alert::error('Erro', 'Não foi possivel carregar a página!!');
            echo 'houve um erro';

        }        
    }
}
