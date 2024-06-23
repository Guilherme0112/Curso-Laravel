@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <h1>Usuarios</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('curso-create') }}" class="btn btn-success">Registrar pessoas</a>
            </div>
        </div>
        <table  class="table mt-3">
            <thead>
                <tr>
                    <th scape='col'>#</th>
                    <th scape='col'>Nome:</th>
                    <th scape='col'>Cidade:</th>
                    <th scape='col'>Nascimento:</th>
                    <th scape='col'>Altura:</th>
                    <th scape='col'>Açoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->id }}</td>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->cidade }}</td>
                    <td>{{ $pessoa->nascimento }}</td>
                    <td>{{ $pessoa->altura }}</td>
                    <td class="d-flex">
                        <a href="{{ route('curso-edit', ['id'=>$pessoa->id]) }}" class="btn btn-primary me-2">Editar</a>
                        <form action="{{ route('curso-destroy', ['id'=>$pessoa->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection