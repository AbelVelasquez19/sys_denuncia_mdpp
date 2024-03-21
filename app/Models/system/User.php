<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'pgsql';
    protected $table = 'sistema.p_usrios';
    protected $primaryKey = 'cdgo_usrios';
}
