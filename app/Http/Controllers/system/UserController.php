<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\system\User;

class UserController extends Controller
{
    public function getUser(Request $request){
        $dni = $request->input('params');
        try {
            $user = User::join('sistema.h_usrios_ntral','h_usrios_ntral.cdgo_usrios','=','p_usrios.cdgo_usrios')
                        ->select('h_usrios_ntral.ap_pate',
                                 'h_usrios_ntral.ap_mate',
                                 'h_usrios_ntral.no_usrio',
                                 'p_usrios.de_dire',
                                 'p_usrios.nu_docu',
                                 'p_usrios.nu_tele',
                                 'p_usrios.de_mail'
                        )
                        ->where('nu_docu',$dni)
                        ->get();
            if(count($user)>0){
                return response()->json([
                    'status'=>true,
                    'data'=>$user
                ]);
            }else{
                return response()->json([
                    'status'=>false,
                    'data'=>''
                ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
