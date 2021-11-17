<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Os atributos que podem ser atribuídos em massa.

    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'date',
        'genre',
    ];

   // Oculta atributos de JSON

    protected $hidden = [
        'password',
        'remember_token',
    ];

   // Os atributos que devem ser lançados.

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
