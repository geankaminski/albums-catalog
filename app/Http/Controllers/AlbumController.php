<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Http\Requests\AlbumFormRequest;

class AlbumController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $albuns = Album::query()
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');
        return view('albuns.listar', [
            'albuns' => $albuns,
            'mensagem' => $mensagem
        ]);
    }

    public function store(AlbumFormRequest $request)
    {
        # DB::beginTransaction();
        Album::create($request->all());
        # DB::commit();
        $request->session()
            ->flash(
                'mensagem',
                "Álbum $request->nome criado com sucesso!"
            );
        return redirect()->route('listar_album');
    }

    public function create(Request $request)
    {
        return view('albuns.adicionar');
    }

    public function edit($id)
    {
        $album = Album::find($id);
        return view('albuns.editar', [
            'album' => $album
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $album = Album::find($id);
        $album->delete();
        $request->session()
            ->flash(
                'mensagem',
                "Álbum $album->nome removido com sucesso!"
            );
        return redirect()->route('listar_album');
    }

    public function update(Request $request, $id)
    {
        $album = Album::find($id);
        $album->nome = $request->nome;
        $album->plataforma = $request->plataforma;
        $album->save();
        $request->session()
            ->flash(
                'mensagem',
                "Álbum $album->nome atualizado com sucesso!"
            );
        return redirect()->route('listar_album');
    }
}
