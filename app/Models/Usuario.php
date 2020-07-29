<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey = 'CPF';

    protected $fillable = [
        'name',
        'CPF',
        'cellPhone',
        'graduation',
        'email',
        'photo',
        'password'
    ];

    public $incrementing = false; // auto incremento desabilitado
    protected $casts = ['CPF' => 'string']; // cast
}
