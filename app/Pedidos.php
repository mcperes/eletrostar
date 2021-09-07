<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model 
{

    protected $table = 'pedidos';
    public $timestamps = true;
    protected $primaryKey = 'id_pedido';
    protected $fillable = [
        'data', 'id_cliente', 'total'
    ];

    
}