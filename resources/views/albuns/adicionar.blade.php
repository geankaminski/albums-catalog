@extends('layout')

@section('cabecalho')
Adicionar Álbum
@endsection

@section('conteudo')
<form method="post" action="/albuns">
    @csrf
    <div class="input-group d-flex justify-content-between">
        <label class="mr-2" for="nome">Nome: </label>
        <input type="text" class="form-control" id="nome" name="nome">
        <label class="ml-2 mr-2" for="plataforma">Plataforma: </label>
        <select id="plataforma" name="plataforma">
            <option value="spotify">Spotify</option>
            <option value="deezer">Deezer</option>
            <option value="Tidal">Tidal</option>
            <option value="amazon">Amazon Music</option>
            <option value="youtube">Youtube Music</option>
        </select>
    </div>
    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
@endsection
