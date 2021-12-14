<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\Animal;

class ConsultasController extends Controller
{
    public function list()
    {
        $consultas = Consulta::with('Animal', 'Animal.Dono', 'Atendimento')->get();
        $animais = Animal::all();

        return view('consulta.list',['consultas'=>$consultas, 'animais'=>$animais]);
    }

    public function create(Request $request)
    {
        Consulta::create([
            'data' => $request->data,
            'sintomas'=>$request->sintomas,
            'animal_id' => $request->animal_id
        ]);
        return redirect('/consulta');
    }

    public function delete($id)
    {
        $consulta = Consulta::find($id);
        $consulta->delete();
        return redirect('/consulta');
    }
}
