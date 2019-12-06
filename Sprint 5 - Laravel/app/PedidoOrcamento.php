<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoOrcamento extends Model
{
    protected $table = "pedidos_orcamentos";
    protected $primaryKey = "id";
    protected $guarded = [];

    protected $fillable = [
        "descricao", "quantidade"
        // "descricao", "quantidade", "id_user_contratante", "id_user_ong", "id_profissional", "id_servico"
    ];
}
