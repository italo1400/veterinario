<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Pessoa;

class AnimaisController extends Controller
{
    public function create(Request $request)
    {
        Animal::create([
            'nome' => $request->nome,
            'apelido' => $request->apelido,
            'raca' => $request->raca,
            'especie' => $request->especie,
            'peso' => $request->peso,
            'cor' => $request->cor,
            'data_nascimento' => $request->data_nascimento,
            'pessoa_id' => $request->pessoa_id
        ]);
        return redirect('/cadastro');
    }

    public function detail($id)
    {
        $animal = Animal::find($id);
        $pessoas = Pessoa::all();
        return view('cadastro.animal',['animal' => $animal, 'pessoas' => $pessoas]);
    }

    public function edit(Request $request,$id)
    {
        $animal = Animal::find($id);
        $animal->update(['nome' => $request->nome,
            'apelido' => $request->apelido,
            'raca' => $request->raca,
            'especie' => $request->especie,
            'peso' => $request->peso,
            'cor' => $request->cor,
            'data_nascimento' => $request->data_nascimento,
            'pessoa_id' => $request->pessoa_id
        ]);

        return redirect('/cadastro');
    }
}
