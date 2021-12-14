@extends('template')
@section('body')
<div class="container mt-5">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Editar Cadastro Animal</h5>
                    <form class="row g-3" action="{{route('editar_animal',['id' => $animal->id])}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-auto">
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{$animal->nome}}" required>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Apelido" value="{{$animal->apelido}}">
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="raca" name="raca" placeholder="Raça" value="{{$animal->raca}}" required>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="especie" name="especie" placeholder="Espécie" value="{{$animal->especie}}">
                            </div>
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-auto">
                                <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso" value="{{$animal->peso}}" required>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="cor" name="cor" placeholder="Cor" value="{{$animal->cor}}">
                            </div>
                            <div class="col-auto">
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data Nascimento" value="{{$animal->data_nascimento}}" required>
                            </div>
                            <div class="col-auto">
                                <select class="form-select" aria-label="Default select example" name="pessoa_id" required>
                                    @foreach ($pessoas as $pessoa)
                                    @if ( $animal->pessoa_id == $pessoa->id)
                                    <option value="{{$pessoa->id}}" selected>{{$pessoa->nome}}</option>
                                    @else
                                    <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection