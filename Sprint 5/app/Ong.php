<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
  protected $table = "ongs";
  protected $primaryKey = "id";
  protected $guarded = [];

  protected $fillable = [
    "nome", "cnpj", "data_de_inicio", "finalidade_ong", "logo", "sobre_ong", "cep", "logradouro", "numero", "complemento", "bairro", "cidade", "uf", "telefone", "celular", "site_ong", "email", "senha", "nome_responsavel", "cpf_responsavel", "funcao_responsavel", "celular_responsavel", "email_responsavel"
  ];
}
