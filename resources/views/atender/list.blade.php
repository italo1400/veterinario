@extends('template')
@section('body')

<div class="container mt-5">
    <div class="row mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Animal</th>
                    <th scope="col">Dono</th>
                    <th scope="col">Diagnóstico</th>
                    <th scope="col">Pedido Exames</th>
                    <th scope="col">Resultado</th>
                    <th scope="col">Atendido Em:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $atendimentos as $atendimento )
                <tr>
                    <th scope="row">{{$atendimento->id}}</th>
                    <td>{{$atendimento->consulta->animal->nome}}</td>
                    <td>{{$atendimento->consulta->animal->dono->nome}}</td>
                    <td>{{$atendimento->diagnostico}}</td>
                    <td>{{$atendimento->pedido_exames}}</td>
                    <td>{{$atendimento->resultado_exames}}</td>
                    <td>{{date('d/m/Y', strtotime($atendimento->created_at))}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection