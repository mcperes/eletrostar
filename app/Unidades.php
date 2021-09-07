<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model 
{
    protected $table = 'unidades';
    public $timestamps = true;
    protected $primaryKey = 'id_unidade';
    protected $fillable = ['descricao'];
}