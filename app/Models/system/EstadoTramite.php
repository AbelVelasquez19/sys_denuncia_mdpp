<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

class EstadoTramite extends Model
{
    protected $connection = 'sigtram';
    protected $table = 'sistema.a_estdos_trmtes';
    protected $primaryKey = 'cdgo_estdo_trmte';
    public $timestamps = false;
}
