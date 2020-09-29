<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable=['nome', 'plataforma'];
    public $timestamps = false;

    public function dados(){
        return $this->hasMany(Dado::class);
    }
}
