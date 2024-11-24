@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Produtos</h1>

    <a href="/produtos/create" class="btn btn-primary">Adicionar Produto</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto['id'] }}</td>
                <td>{{ $produto['nome'] }}</td>
                <td>{{ $produto['categoria'] }}</td>
                <td>{{ $produto['preço'] }}</td>
                <td>
                    <a href="/produtos/{{ $produto['id'] }}/edit" class="btn btn-sm btn-warning">Editar</a>
                    <form action="/produtos/{{ $produto['id'] }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
