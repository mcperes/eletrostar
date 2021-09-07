<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItensPedidos extends Model 
{

    protected $table = 'itensPedidos';
    public $timestamps = true;
    protected $primaryKey = 'id_item';
    protected $fillable = [
        'id_pedido', 'id_produto', 'qtd'
    ];

}