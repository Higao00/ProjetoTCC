<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
     'nome',
     'email',
     'documento',
     'atividade_id',
     'endereco_id',
     'status',
     'permissao',
     'email_verified_at',
     'senha',
     'remember_token'];
}
