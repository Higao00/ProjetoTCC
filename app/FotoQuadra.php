<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoQuadra extends Model
{
    protected $fillable = ['id', 'quadra_id', 'path_foto', 'status'];
}
