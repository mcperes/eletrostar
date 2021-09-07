<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model 
{

    protected $table = 'produtos';
    public $timestamps = true;
    protected $primaryKey = 'id_produto';
    protected $fillable = [
        'referencia','descricao','valor','id_unidade'
    ];
}