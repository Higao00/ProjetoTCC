<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacoes extends Model
{
    // MAKE MODAL AVALIACAO
    protected $fillable = ['id_quadra', 'id_user', 'avaliacao'];
}
