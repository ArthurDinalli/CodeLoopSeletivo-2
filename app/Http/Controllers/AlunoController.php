<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{

    public function index($id = null){
        if($id ==null){
            return Aluno::orderBy('id', 'asc')->get();
        }
        else{
            return $this->show($id);
        }
    }
    public function filtro (Request $req) {
        $alunos = Aluno::where("nome", "like", "%".$req->input('nome')."%")->get();
        return $alunos;
    }
    
    
    public function store(Request $req){
        $novo = null;
        if($req->exists('id')){
            $novo = Aluno::find( $req->input('id') );
        }else{
            $novo = new Aluno;
        }
    
        $novo->nome = $req->input('nome');
        $novo->nasc = $req->input('nasc');
        $novo->serie = $req->input('serie');

        $novo->cep = $req->input('cep');
        $novo->rua = $req->input('rua');
        $novo->numero_endereco = $req->input('numero_endereco');
        $novo->complemento = $req->input('complemento');
        $novo->bairro = $req->input('bairro');
        $novo->cidade = $req->input('cidade');
        $novo->estado = $req->input('estado');

        $novo->nome_mae = $req->input('nome_mae');
        $novo->cpf = $req->input('cpf');
        $novo->venc = $req->input('venc');

        $novo->save();

        return $novo;
    }

    public function show($id){
        return Aluno::find($id);        
    }


    public function update(AlunoRequest $req, $id){
        $edit = Aluno::find($id);

        $edit->nome = $req->input('nome');
        $edit->nasc = $req->input('nasc');
        $edit->serie = $req->input('serie');

        $edit->cep = $req->input('cep');
        $edit->rua = $req->input('rua');
        $edit->numero_endereco = $req->input('numero_endereco');
        $edit->complemento = $req->input('complemento');
        $edit->bairro = $req->input('bairro');
        $edit->cidade = $req->input('cidade');
        $edit->estado = $req->input('estado');

        $edit->nome_mae = $req->input('nome_mae');
        $edit->cpf = $req->input('cpf');
        $edit->venc = $req->input('venc');

        $edit->save();

        return 'Aluno com id '.$edit->id.' editado.';
    }


    public function destroy(Request $req, $id){
        $edit = Aluno::find($id);
        $edit->delete();

        return response()->json([
            'message' => 'Aluno com id '.$edit->id.' removido.',
        ]);
    }
}