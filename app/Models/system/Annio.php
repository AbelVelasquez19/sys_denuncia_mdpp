<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

class Annio extends Model
{
    protected $connection = 'sigtram';
    protected $table = 'sistema.a_anios';
    protected $primaryKey = 'cdgo_anio';
    public $timestamps = false;
}
