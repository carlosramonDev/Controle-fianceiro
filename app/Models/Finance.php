<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_expense',
        'value',
        'due_date',
        'situation',
        'recurrence',
        'category',
    ];

    // Oculta atributos de JSON

    protected $hidden = [
        
    ];

   // Os atributos que devem ser lançados.

    protected $casts = [
        
    ];
}