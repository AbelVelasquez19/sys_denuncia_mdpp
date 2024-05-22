<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

class TramiteDocumento extends Model
{
    protected $connection = 'sigtram';
    protected $table = 'sistema.r_trmtes_dcmntos';
    protected $primaryKey = 'cdgo_trmte_dcmnto';
    public $timestamps = false;
}
