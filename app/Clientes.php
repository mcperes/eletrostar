<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model 
{

    protected $table = 'clientes';
    public $timestamps = true;
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        
       'nome','endereco','cep','bairro','CNPJ','UF','datacad','cidade'
    ];

}