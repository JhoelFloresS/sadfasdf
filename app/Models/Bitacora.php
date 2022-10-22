<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;
    protected $table = 'bitacoras';
    protected $fillable = [
        'accion',
        'fecha',
        'ip_maquina',
        'users_id',
        'tenants_id',
    ];
}
