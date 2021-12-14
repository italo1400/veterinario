@extends('template')
@section('body')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Agendar Consulta</h5>
                    <form class="row g-3" action="{{route('cadastrar_consulta')}}" method="POST">
                        @csrf
                        <div class="col-auto">
                            <select class="form-select" name="animal_id">
                                <option selected>Selecione Animal</option>
                                @foreach ($animais as $animal)
                                <option value="{{$animal->id}}">{{$animal->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto">
                            <input type="date" class="form-control" id="data" name="data" placeholder="Data">
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" id="sintomas" name="sintomas" placeholder="Sintomas">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>
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
                    <th scope="col">Animal</th>
                    <th scope="col">Dono</th>
                    <th scope="col">Data</th>
                    <th scope="col">Sintomas</th>
                    <th scope="col" width="230px">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $consultas as $consulta )
                <tr>
                    <th scope="row">{{$consulta->id}}</th>
                    <td>{{$consulta->animal->nome}}</td>
                    <td>{{$consulta->animal->dono->nome}}</td>
                    <td>{{date('d/m/Y', strtotime($consulta->data))}}</td>
                    <td>{{$consulta->sintomas}}</td>
                    <td>
                        <div class="row">
                            <div class="col-auto">
                                @if ($consulta->atendimento)
                                <button disabled class="btn btn-sm  btn-outline-dark">Atendido</button>
                                @else
                                <a href="{{'/atender/' . $consulta->id}}" class="btn btn-sm  btn-outline-dark">Atender</a>
                                @endif
                            </div>
                            <div class="col-auto">
                                <form action="{{route('deletar_consulta',$consulta->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" @onclick="event.preventDefault();this.closet('form').submit();" class="btn btn-sm btn-outline-danger" type="button">Encerrar Sessão</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection