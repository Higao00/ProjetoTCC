<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function isAdmin()
    {
        return $this->permissao == 3; // Coluna permissaão == 2 usuario é ADMIN
    }

    public function getId()
    {
        return $this->id;
    }

    protected $fillable = [
        'name',
        'email',
        'documento',
        'atividade_id',
        'endereco_id',
        'status',
        'permissao',
        'email_verified_at',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
