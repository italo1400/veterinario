@extends('template')
@section('body')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar</h5>
                    <p class="card-text">Função para cadastrar pessoas e seus pets antes de agendar consultas</p>
                    <a href="/cadastro" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Consultas</h5>
                    <p class="card-text">Função para agendar consultas e verificar agendamentos</p>
                    <a href="/consulta" class="btn btn-primary">Consulta Agenda</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Atendimentos</h5>
                    <p class="card-text">Função para agendamentos disponíveis para realizar atendimento</p>
                    <a href="/atender" class="btn btn-primary">Ver Atendimentos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection