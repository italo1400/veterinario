@extends('template')
@section('body')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar Cliente</h5>
                    <form class="row g-3" action="{{route('cadastrar_pessoa')}}" method="POST">
                        @csrf
                        <div class="col-auto">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente" required>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar Animais</h5>
                    <form class="row g-3" action="{{route('cadastrar_animal')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-auto">
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Apelido">
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="raca" name="raca" placeholder="Raça" required>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="especie" name="especie" placeholder="Espécie" required>
                            </div>
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-auto">
                                <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso" required>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="cor" name="cor" placeholder="Cor" required>
                            </div>
                            <div class="col-auto">
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data Nascimento" required>
                            </div>
                            <div class="col-auto">
                                <select class="form-select" aria-label="Default select example" name="pessoa_id" required>
                                    <option selected>Dono</option>
                                    @foreach ($pessoas as $pessoa)
                                    <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Apelido</th>
                    <th scope="col">Espécie</th>
                    <th scope="col">Raça</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Dono</th>
                    <th scope="col"> Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $animais as $animal )
                <tr>
                    <th scope="row">{{$animal->id}}</th>
                    <td>{{$animal->nome}}</td>
                    <td>{{$animal->apelido}}</td>
                    <td>{{$animal->especie}}</td>
                    <td>{{$animal->raca}}</td>
                    <td>{{$animal->peso}}</td>
                    <td>{{$animal->cor}}</td>
                    <td>{{$animal->dono->nome}}</td>
                    <td>
                        <a href="{{'/cadastro/animal/' . $animal->id}}" class="btn btn-warning">Editar Animal</a>
                        <a href="{{'/cadastro/pessoa/' . $animal->pessoa_id}}" class="btn btn-warning">Editar Dono</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection