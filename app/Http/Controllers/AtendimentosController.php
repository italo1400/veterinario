<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\Atendimento;

class AtendimentosController extends Controller
{
    public function detail($id)
    {
        $consulta = Consulta::with('Animal', 'Animal.Dono')->find($id);
        $consultas = Consulta::where(['animal_id' => $consulta->animal_id])->with('Atendimento')->get();
        return view('atender.detail',['consulta' => $consulta, 'consultas' => $consultas]);
    }

    public function create(Request $request, $id)
    {
        Atendimento::create([
            'diagnostico' => $request->diagnostico, 
            'pedido_exames' => $request->pedido_exames, 
            'resultado_exames' => $request->resultado_exames, 
            'consulta_id' => $id
        ]);
        return redirect('/consulta');
    }

    public function list()
    {
        $atendimentos = Atendimento::with('Consulta', 'Consulta.Animal', 'Consulta.Animal.Dono')->get();
        return view('atender.list',['atendimentos' => $atendimentos]);
    }
}
