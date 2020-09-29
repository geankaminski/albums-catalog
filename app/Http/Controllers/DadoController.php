<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dado;
use App\Album;

class DadoController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(Request $request, $albumId) {
        $dados = Dado::query()
            ->where('album_id',$albumId)
            ->orderByDesc('data')
            ->get();
        $album = Album::find($albumId);
        return view('dados.listar',[
            'dados'=>$dados,
            'albumId'=>$albumId,
            'albumNome'=>$album->nome
        ]);
    }

    public function create($albumId){
        return view('dados.adicionar',[
            'albumId'=>$albumId
        ]);
    }

    public function edit($albumId, $id){
        $dado = Dado::find($id);
        return view('dados.editar',[
            'dado'=>$dado,
            'albumId'=>$albumId
        ]);
    }

    public function store(Request $request, $albumId){
        #DB::beginTransaction();
        $dado=new Dado($request->all());
        $album = Album::find($albumId);
        $album->dados()->save($dado);
        #DB::commit();
        return redirect()->route('listar_dados',[
            'albumId'=>$albumId
        ]);
    }

    public function destroy($id, $albumId){
        $dado=Dado::find($id);
        $dado->delete();
        return redirect()->route('listar_dados',[
            'albumId'=>$albumId
        ]);
    }

    public function update(Request $request, $albumId, $id){
        $dado=Dado::find($id);
        $dado->descricao=$request->descricao;
        $dado->data=$request->data;
        $dado->genero=$request->genero;
        $dado->avaliacao=$request->avaliacao;
        $dado->comentario=$request->comentario;
        $dado->save();
        return redirect()->route('listar_dados',[
            'albumId'=>$albumId
        ]);
    }

}
