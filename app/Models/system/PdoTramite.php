<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

class PdoTramite extends Model
{
    protected $connection = 'sigtram';
    protected $table = 'sistema.p_dto_trmtes';
    protected $primaryKey = 'cdgo_dto_trmte';
    public $timestamps = false;
}
