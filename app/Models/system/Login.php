<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $connection = 'sigtram';
    protected $table = 'sistema.p_lgin';
    protected $primaryKey = 'cdgo_lgin';
    public $timestamps = false;
}
