<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
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
