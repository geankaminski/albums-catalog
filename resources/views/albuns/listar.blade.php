@extends('layout')

@section('cabecalho')
    Álbuns
@endsection

@section('conteudo')
        @if(!empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endif
        <a href="/albuns/create" class="btn btn-dark mb-2">Criar Novo</a>
        <ul class="list-group">
           @foreach($albuns as $album)
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item list-group-item-info">{{ $album->nome }}</li>
                            <li class="list-group-item list-group-item-secondary">{{ $album->plataforma }}</li>
                        </ul>
                    </div>
                    <span class="d-flex align-items-center">
                        <form method="post" action="/albuns/{{$album->id}}"
                        onsubmit="return confirm('Tem certeza que deseja remover {{$album->nome}}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm mr-2">Excluir</button>
                        </form>
                        <a href="albuns/{{$album->id}}/edit" class="btn
                        btn-warning btn-sm mr-2">Editar</a>
                        <a href="albuns/{{$album->id}}/dados" class="btn
                        btn-primary btn-sm">Ver dados</a>
                    </span>
                </li>
            @endforeach
        </ul>
@endsection
