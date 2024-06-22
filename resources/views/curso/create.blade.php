@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <div class="container mt-5">
        <h1>Criar Registros</h1>
        <hr>
        <form action="{{ route('curso-store') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class='form-control'placeholder="Digite seu nome" required>
                </div> 
                <br>
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" class='form-control'placeholder="Digite sua cidade" required>
                </div> 
                <br>
                <div class="form-group">
                    <label for="nascimento">Nascimento:</label>
                    <input type="number" name="nascimento" class='form-control'placeholder="Digite seu ano de nascimento" required>
                </div> 
                <br>
                <div class="form-group">
                    <label for="altura">Altura:</label>
                    <input type="number" name="altura" class='form-control'placeholder="Digite sua altura" required>
                </div> 
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class='btn btn-primary'>
                    <a href="{{ route('curso-index') }}" class='btn btn-danger'>Voltar</a>
                </div> 
            </div>
        </form>
    </div>
    
@endsection