@extends('template')
@section('body')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar Cliente</h5>
                    <form class="row g-3" action="{{route('editar_pessoa',['id' => $pessoa->id])}}" method="POST">
                        @csrf
                        <div class="col-auto">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente" value="{{$pessoa->nome}}" required>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" value="{{$pessoa->cpf}}" required>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection