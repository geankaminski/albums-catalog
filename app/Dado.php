<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    protected $fillable = [
        'descricao',
        'data',
        'genero',
        'avaliacao',
        'comentario'
    ];
    public $timestamps = false;

    public function album(){
        return $this->belongsTo(Album::class);
    }
}
