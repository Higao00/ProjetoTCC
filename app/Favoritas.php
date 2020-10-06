<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favoritas extends Model
{
    protected $fillable = ['id','id_quadra', 'id_user'];
}
