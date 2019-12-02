<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelAcesso extends Model
{
    protected $table = "niveis_acesso";
    protected $primaryKey = "id";
    protected $guarded = [];

    protected $fillable = [
        "nome"
    ];
}
