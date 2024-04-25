<?php

namespace App\Models\inspeccion;

use Illuminate\Database\Eloquent\Model;

class Inspeccion extends Model
{
    protected $connection = 'sigtram';
    protected $table = 'denuncias.p_dnncias_inspeccion';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
