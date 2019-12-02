<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoOrcamento extends Model
{
    protected $table = "pedidos_orcamento";
    protected $primaryKey = "id";
    protected $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        "descricao", "quantidade", "id_user_contratante", "id_user_ong", "id_profissional", "id_servico"
    ];
}
