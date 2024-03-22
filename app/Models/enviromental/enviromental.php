<?php

namespace App\Models\enviromental;

use Illuminate\Database\Eloquent\Model;

class enviromental extends Model
{
    protected $connection = 'sigtram';
    protected $table = 'denuncias.p_dnncias_a';
    protected $primaryKey = 'id';
}
