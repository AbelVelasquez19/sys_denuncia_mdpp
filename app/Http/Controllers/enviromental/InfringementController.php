<?php

namespace App\Http\Controllers\enviromental;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfringementController extends Controller
{
    public function index(){
        return view('pages.infringement');
    }
}
