<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

class NaturalPerson extends Model
{
    protected $connection = 'sigtram';
    protected $table = 'sistema.h_usrios_ntral';
    protected $primaryKey = 'cdgo_usrios';
    public $timestamps = false;
}
