<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'name', 'email', 'password'
        // 'name', 'email', 'password', 'id_ong', 'id_contratante', 'nivel_acesso'
        "nivel_acesso", "name", "cpf_cnpj", "data_de_nascimento", "data_de_inicio", "finalidade_ong", "logo", "sobre_ong", "cep", "logradouro", "numero", "complemento", "bairro", "cidade", "uf", "telefone", "celular", "site_ong", "email", "password", "nome_responsavel", "cpf_responsavel", "funcao_responsavel", "celular_responsavel", "email_responsavel"
    ];

    public function getLogoImageAttribute($logo) {
        return $this->logo == null ? asset('img/null.jpg') : asset($this->logo);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
