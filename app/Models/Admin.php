<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guard = 'admin';


    protected $primaryKey = 'CPF';

    protected $fillable = [
        'name',
        'CPF',
        'cellPhone',
        'email',
        'password'
    ];

    public $incrementing = false; // auto incremento desabilitado
    protected $casts = ['CPF' => 'string']; // cast
}
