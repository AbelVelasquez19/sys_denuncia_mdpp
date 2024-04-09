<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

class LegalPerson extends Model
{
    protected $connection = 'sigtram';
    protected $table = 'sistema.h_usrios_jrid';
    protected $primaryKey = 'cdgo_usrios';
    public $timestamps = false;
}
