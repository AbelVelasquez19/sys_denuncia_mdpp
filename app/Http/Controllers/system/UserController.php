<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\system\User;

class UserController extends Controller
{
    public function getUser(Request $request){
        $typeDoc = $request->params['typeDoc'];
        $numDoc = $request->params['numDoc'];
        $numRuc = $request->params['numRuc'];
        try {
            if($typeDoc==1){
                $user = User::join('sistema.h_usrios_ntral','h_usrios_ntral.cdgo_usrios','=','p_usrios.cdgo_usrios')
                            ->select('h_usrios_ntral.ap_pate',
                                     'h_usrios_ntral.ap_mate',
                                     'h_usrios_ntral.no_usrio',
                                     'p_usrios.de_dire',
                                     'p_usrios.nu_docu',
                                     'p_usrios.nu_tele',
                                     'p_usrios.de_mail'
                            )
                            ->where('nu_docu',$numDoc)
                            ->get();
                if(count($user)>0){
                    return response()->json([
                        'status'=>true,
                        'type'=>'DNI',
                        'data'=>$user
                    ]);
                }else{
                    return response()->json([
                        'status'=>false,
                        'type'=>'',
                        'data'=>''
                    ]);
                }
            }
            if($typeDoc==2){
                $user = User::select('no_crto','nu_docu','nu_tele','de_mail','de_dire')->where('nu_docu',$numRuc)->get();
                if(count($user)>0){
                    return response()->json([
                        'status'=>true,
                        'type'=>'RUC',
                        'data'=>$user
                    ]);
                }else{
                    return response()->json([
                        'status'=>false,
                        'type'=>'',
                        'data'=>''
                    ]);
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
