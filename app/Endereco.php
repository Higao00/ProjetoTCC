<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['id', 'cep', 'rua', 'bairro', 'numero', 'complemento', 'cidade', 'estado'];
}