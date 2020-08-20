<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quadra extends Model
{
    protected $fillable = ['id', 'titulo', 'endereco_id', 'valor_aluguel', 'owner_id', 'status'];
}
