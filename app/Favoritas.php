<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favoritas extends Model
{
    protected $fillable = ['id_quadra', 'id_user'];

    public function user()
    {
        return  $this->belongsTo(User::class);
    }


    public function quadra()
    {
        return $this->hasMany(Quadra::class);
    }
}
