@extends('template')
@section('body')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$consulta->animal->nome}} ({{$consulta->animal->apelido}})</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$consulta->animal->dono->nome}}</h6>
                    Sintomas:
                    <p class="card-text">{{$consulta->sintomas}}</p>
                    <a href="{{'/cadastro/pessoa/' . $consulta->animal->dono->id}}" class="card-link">Ver Cadastro Dono</a>
                    <a href="{{'/cadastro/animal/' . $consulta->animal->id}}" class="card-link">Ver Cadastro Pet</a>
                </div>
            </div>
        </div>
    </div>
    <hr class="mt-4" />
    <form class="g-3" action="{{route('finalizar_atendimento', ['id' => $consulta->id])}}" method="POST">
        @csrf
        <div class="row mt-4">
            <div class="col">
                <div class="input-group">
                    <span class="input-group-text">Diagnóstico:</span>
                    <textarea class="form-control" name="diagnostico"></textarea>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col">
                <div class="input-group mb-3">
                    <span class="input-group-text">Pedido de Exames:</span>
                    <textarea class="form-control" name="pedido_exames"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <span class="input-group-text">Resultado de Exames:</span>
                    <textarea class="form-control" name="resultado_exames"></textarea>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col text-end">
                <button type="submit" class="btn btn-secondary">Finalizar Atendimento</button>
                <a href="/" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col">
            <div class="comments">
                @foreach ($consultas as $item)
                @if ($item->atendimento)
                <p>
                    <small>Realizado em: {{date('d/m/Y H:i', strtotime($item->created_at))}}</small>
                    <br />
                    Diagnóstico: {{$item->atendimento->diagnostico}}
                    <br />
                    Pedido Exames: {{$item->atendimento->pedido_exames}}
                    <br />
                    Resultado Exames: {{$item->atendimento->resultado_exames}}
                    <br />
                </p>
                @endif

                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection