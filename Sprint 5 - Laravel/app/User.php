<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";
    protected $primaryKey = "id";
    protected $guarded = [];

    protected $fillable = [
        // 'name', 'email', 'password'
        // 'name', 'email', 'password', 'id_ong', 'id_contratante', 'nivel_acesso'
        "nivel_acesso", "name", "cpf_cnpj", "data_de_nasc_inicio", "cep", "logradouro", "numero", "complemento", "bairro", "cidade", "uf", "telefone", "celular", "email", "password"
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
