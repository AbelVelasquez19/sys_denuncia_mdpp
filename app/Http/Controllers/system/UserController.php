<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\system\User;

class UserController extends Controller
{
    public function getUser(){
        $user = User::paginate(10);
        return $user;
    }
}
