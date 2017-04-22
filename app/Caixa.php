<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
    protected $fillable = [
        'tipo', 'descricao', 'preco', 'data',
    ];
}
