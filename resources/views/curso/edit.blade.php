@extends('layouts.app')

@section('title', 'Editar Registros')

@section('content')
    <div class="container mt-5">
        <h1>Editar Registros</h1>
        <hr>
        <form action="{{ route('curso-update', ['id'=>$pessoas->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome"  class='form-control' value="{{ $pessoas->nome }}" placeholder="Digite seu nome" required>
                </div> 
                <br>
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" class='form-control' value="{{ $pessoas->cidade }}" placeholder="Digite sua cidade" required>
                </div> 
                <br>
                <div class="form-group">
                    <label for="nascimento">Nascimento:</label>
                    <input type="number" name="nascimento" class='form-control' value="{{ $pessoas->nascimento }}" placeholder="Digite seu ano de nascimento" required>
                </div> 
                <br>
                <div class="form-group">
                    <label for="altura">Altura:</label>
                    <input type="number" name="altura" class='form-control' step='0.010' value="{{ $pessoas->altura }}" placeholder="Digite sua altura" required>
                </div> 
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class='btn btn-primary' value="Atualizar">
                    <a href="{{ route('curso-index') }}" class='btn btn-danger'>Voltar</a>
                </div> 
            </div>
        </form>
    </div>
@endsection