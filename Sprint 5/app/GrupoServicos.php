<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoServicos extends Model
{
    protected $table = "grupos_servicos";
    protected $primaryKey = "id";
    protected $guarded = [];

    protected $fillable = [
        "nome", "id_servico"
    ];
}
