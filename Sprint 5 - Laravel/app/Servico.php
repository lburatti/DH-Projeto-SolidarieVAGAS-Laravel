<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = "servicos";
    protected $primaryKey = "id";
    protected $guarded = [];

    protected $fillable = [
        "nome", "descricao", "id_grupo_servicos"
    ];
}
