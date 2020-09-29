@extends('layout')

@section('cabecalho')
    Informações
@endsection

@section('conteudo')
<form method="post" action="/albuns/{{$albumId}}/dados">
    @csrf
    <div>
        <label class="mr-2" for="data">Data: </label>
        <input type="date" class="form-control" id="data" name="data">
        <br>
        <label class="mr-2" for="descricao">Descrição: </label><br>
        <textarea id="descricao" name="descricao" rows="3" cols="75"></textarea><br>
        <label class="mr-2" for="genero">Genero: </label>
        <input type="text" class="form-control" id="genero" name="genero">
        <br>
        <label class="mr-2" for="avaliacao">Avaliação: </label>
        <input type="text" class="form-control" id="avaliacao" name="avaliacao">
        <br>
        <label class="mr-2" for="comentario">Comentário: </label><br>
        <textarea id="comentario" name="comentario" rows="5" cols="75"></textarea>
    </div>
    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
@endsection
