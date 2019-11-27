<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    protected $table = "ongs";
    protected $primaryKey = "id";
    protected $guarded = [];

    protected $fillable = [
		'nome', 'pasteis_id', 'quantidade'
    ];
}
