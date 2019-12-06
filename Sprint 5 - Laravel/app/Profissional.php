<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = "profissionais";
    protected $primaryKey = "id";
    protected $guarded = [];

    protected $fillable = [
        "nome", "cpf", "rg", "data_de_nascimento", "foto", "tempo_na_ong", "resumo_historia", "cep", "logradouro", "numero", "complemento", "bairro", "cidade", "uf", "telefone", "celular", "email", "id_ong", "id_grupoServicos", "id_servico"
    ];
}
