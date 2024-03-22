<?php

namespace App\Http\Controllers\enviromental;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\system\User;
class EnviromentalController extends Controller
{
    public function addEnviromental(Request $request){
        if($request->user["idTypeEnviromental"]==2){
            if($request->user["typePers"]==1){
                $result = User::where('nu_docu',$request->user["numDoc"])->first();
                return $result;
                if($result){
                    echo '1';
                }else{
                    echo '2';
                }
                $user = new User();
            }
        }else{
            $idAnonim = 0;
        }
    }
}
