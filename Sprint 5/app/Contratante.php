<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratante extends Model
{
    protected $table = "contratantes";
    protected $primaryKey = "id";
    protected $guarded = [];

    protected $fillable = [
        "nome", "cpf", "data_de_nascimento", "cep", "logradouro", "numero", "complemento", "bairro", "cidade", "uf", "telefone", "celular", "email", "senha"
    ];
}
