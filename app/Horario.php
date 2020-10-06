<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = ['id', 'id_quadra', 'hora_inicio', 'hora_fim', 'data_inicio', 'data_fim'];
}
