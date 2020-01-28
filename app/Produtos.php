<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['nome', 'tamanho', 'tipo', 'quantidade', 'cor', 'preco'];
}
