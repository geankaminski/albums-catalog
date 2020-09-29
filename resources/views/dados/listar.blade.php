@extends('layout')

@section('cabecalho')
    Informações
@endsection

@section('conteudo')
<a href="/albuns/{{$albumId}}/dados/create" class="btn btn-dark mb-2">Criar Novo</a>
        <ul class="list-group">
           @foreach($dados as $dado)
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item list-group-item-info">{{ $dado->data }}</li>
                            <li class="list-group-item list-group-item-primary">{{ $dado->descricao }}</li>
                            <li class="list-group-item list-group-item-secondary">{{ $dado->genero }}</li>
                            <li class="list-group-item list-group-item-warning">{{ $dado->avaliacao }}</li>
                            <li class="list-group-item list-group-item-secondary">{{ $dado->comentario }}</li>
                        </ul>
                    </div>
                    <span class="d-flex align-items-center">
                    <form method="post" action="/albuns/{{$albumId}}/dados/{{$dado->Id}}"
                        onsubmit="return confirm('Tem certeza que deseja remover o dado?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm mr-2">Excluir</button>
                        </form>
                    <a href="/albuns/{{$albumId}}/dados/{{$dado->Id}}" class="btn
                        btn-warning btn-sm mr-2">Editar</a>
                    </span>
                </li>
            @endforeach
        </ul>
@endsection
