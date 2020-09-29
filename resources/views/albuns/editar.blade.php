@extends('layout')

@section('cabecalho')
    Editar álbum
@endsection

@section('conteudo')
    <form method="post" action="/albuns/{{$album->id}}">
        @csrf
        @method('PUT')
        <div class="input-group d-flex justify-content-between">
        <label class="mr-2" for="nome">Nome: </label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$album->nome}}">
        <label class="ml-2 mr-2" for="plataforma">Plataforma: </label>
        <select id="plataforma" name="plataforma">
            <option value="spotify"{{$album->plataforma == 'spotify'?'selected':''}}>Spotify</option>
            <option value="deezer" {{$album->plataforma == 'deezer'?'selected':''}}>Deezer</option>
            <option value="Tidal" {{$album->plataforma == 'tidal'?'selected':''}}>Tidal</option>
            <option value="amazon" {{$album->plataforma == 'amazon'?'selected':''}}>Amazon Music</option>
            <option value="youtube" {{$album->plataforma == 'youtube'?'selected':''}}>Youtube Music</option>
        </select>
        </div>
        <button class="btn btn-primary mt-2">Editar</button>
    </form>
@endsection
