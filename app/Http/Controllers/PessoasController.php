<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Animal;
class PessoasController extends Controller
{
    public function create(Request $request)
    {
        Pessoa::create(['nome'=>$request->nome,'cpf'=>$request->cpf]);
        return redirect('/cadastro');
    }

    public function list()
    {
        $pessoas = Pessoa::all();
        $animais = Animal::with('dono')->get();

        return view('cadastro.novo',['pessoas'=>$pessoas, 'animais' => $animais]);
    }

    public function detail($id)
    {
        $pessoa = Pessoa::find($id);
        return view('cadastro.pessoa',['pessoa' => $pessoa]);
    }

    public function edit(Request $request,$id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->update([
            'nome' => $request->nome, 'cpf' => $request->cpf
        ]);
        return redirect('/cadastro');
    }
}
