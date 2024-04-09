<?php

namespace App\Http\Controllers\enviromental;

use App\Http\Controllers\Controller;
use App\Models\enviromental\enviromental;
use Illuminate\Http\Request;
use App\Models\system\User;
use App\Models\system\NaturalPerson;
use App\Models\system\LegalPerson;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class EnviromentalController extends Controller
{
    public function addEnviromental(Request $request){
        try {
            /* DB::beginTransaction(); */
            if($request->input("user_idTypeEnviromental")==2){
                if($request->input("user_typePers")==1){ //natural
                    $result = User::where('nu_docu',$request->input("user_numDoc"))->first();
                    if($result){
                        $cod_user =  $result->cdgo_usrios;
                        $user = User::find($cod_user);
                    }else{
                        $user = new User();
                    }
                        $user->no_crto = $request->input("user_name").' '.$request->input("user_lastName").' '.$request->input("user_mothersLastName");
                        $user->nu_docu = $request->input("user_numDoc");
                        $user->nu_tele = $request->input("user_cellPhone");
                        $user->de_mail = $request->input("user_gmail");
                        $user->de_dire = $request->input("user_address");
                        $user->save();
                        $cod_user =  $user->cdgo_usrios;
    
                        $resLegal = NaturalPerson::where('cdgo_usrios',$cod_user)->first();
                        if($resLegal){
                            $personNatura = NaturalPerson::find($cod_user);
                        }else{
                            $personNatura = new NaturalPerson();
                        }
                        $personNatura->cdgo_usrios = $cod_user;
                        $personNatura->cdgo_estdo_cvil = 1;
                        $personNatura->cdgo_dcmntos_iden =$request->input("user_typeDoc");
                        $personNatura->ap_pate =$request->input("user_lastName");
                        $personNatura->ap_mate = $request->input("user_mothersLastName");
                        $personNatura->no_usrio = $request->input("user_name");
                        $personNatura->ts_usua_modi = date('Y-m-d H:i:s');
                        $personNatura->save();
                    
                }
                if($request->input("user_typePers")==2){ //juridica
                    $result = User::where('nu_docu',$request->input("user_numRuc"))->first();
                    if($result){
                        $cod_user =  $result->cdgo_usrios;
                        $user = User::find($cod_user);
                    }else{
                        $user = new User();
                    }
                        $user->no_crto = $request->input("user_razonSocial");
                        $user->nu_docu = $request->input("user_numRuc");
                        $user->nu_tele = $request->input("user_cellPhone");
                        $user->de_mail = $request->input("user_gmail");
                        $user->de_dire = $request->input("user_address");
                        $user->save();
                        $cod_user =  $user->cdgo_usrios;
    
                        $resLegal = LegalPerson::where('cdgo_usrios',$cod_user)->first();
                        if($resLegal){
                            $personLegal = LegalPerson::find($cod_user);
                        }else{
                            $personLegal = new LegalPerson();
                        }
                        $personLegal->cdgo_usrios = $cod_user;
                        $personLegal->rz_soci = $request->input("user_razonSocial");
                        $personLegal->ts_usua_modi = date('Y-m-d H:i:s');
                        $personLegal->save();
                    
                }
            }else{
                $cod_user = 0;
            }

            if($request->input("enviromental_idTypeEnviromental")==2){
                if($request->input("enviromental_typePers")==1){ //natural
                    $result = User::where('nu_docu',$request->input("enviromental_numDoc"))->first();
                    if($result){
                        $cod_user_envirometantal =  $result->cdgo_usrios;
                        $user = User::find($cod_user_envirometantal);
                    }else{
                        $user = new User();
                    }
                        $user->no_crto = $request->input("enviromental_name").' '.$request->input("enviromental_lastName").' '.$request->input("enviromental_mothersLastName");
                        $user->nu_docu = $request->input("enviromental_numDoc");
                        $user->nu_tele = $request->input("enviromental_cellPhone");
                        $user->de_mail = $request->input("enviromental_gmail");
                        $user->de_dire = $request->input("enviromental_address");
                        $user->save();
                        $cod_user_envirometantal =  $user->cdgo_usrios;

                        $resLegal = NaturalPerson::where('cdgo_usrios',$cod_user_envirometantal)->first();
                        if($resLegal){
                            $personNatura = NaturalPerson::find($cod_user_envirometantal);
                        }else{
                            $personNatura = new NaturalPerson();
                        }
                            $personNatura->cdgo_usrios = $cod_user_envirometantal;
                            $personNatura->cdgo_estdo_cvil = 1;
                            $personNatura->cdgo_dcmntos_iden =$request->input("enviromental_typeDoc");
                            $personNatura->ap_pate =$request->input("enviromental_lastName");
                            $personNatura->ap_mate = $request->input("enviromental_mothersLastName");
                            $personNatura->no_usrio = $request->input("enviromental_name");
                            $personNatura->ts_usua_modi = date('Y-m-d H:i:s');
                            $personNatura->save();
                    
                }
                if($request->input("enviromental_typePers")==2){ //juridica
                    $result = User::where('nu_docu',$request->input("enviromental_numRuc"))->first();  
                    if($result){
                        $cod_user_envirometantal =  $result->cdgo_usrios;
                        $user = User::find($cod_user_envirometantal);
                    }else{
                        $user = new User();
                    }
                        $user->no_crto = $request->input("enviromental_razonSocial");
                        $user->nu_docu = $request->input("enviromental_numRuc");
                        $user->nu_tele = $request->input("enviromental_cellPhone");
                        $user->de_mail = $request->input("enviromental_gmail");
                        $user->de_dire = $request->input("enviromental_address");
                        $user->save();
                        $cod_user_envirometantal =  $user->cdgo_usrios;

                        $resLegal = LegalPerson::where('cdgo_usrios',$cod_user_envirometantal)->first();
                        if($resLegal){
                            $personLegal = LegalPerson::find($cod_user_envirometantal);
                        }else{
                            $personLegal = new LegalPerson();
                        }
                        $personLegal->cdgo_usrios = $cod_user_envirometantal;
                        $personLegal->rz_soci = $request->input("enviromental_razonSocial");
                        $personLegal->ts_usua_modi = date('Y-m-d H:i:s');
                        $personLegal->save();
                }
            }else{
                $cod_user_envirometantal = 0;
            }

            /* $year = date('Y');
            $result = DB::connection('sigtram')->select("SELECT COALESCE((SELECT MAX(CAST(numero AS INT)) + 1 FROM denuncias.p_dnncias_a WHERE annio = '$year'), 1) AS num_max"); */

            $enviromental = new enviromental();
            $enviromental->tipo_denun_denunciante=$request->input('user_idTypeEnviromental');
            $enviromental->tipo_persona_denunciante=$request->input('user_typePers');
            $enviromental->tipo_documento_denunciante=$request->input('user_typeDoc');
            $enviromental->cod_usuario_denunciante=$cod_user;
            $enviromental->tipo_denun_denunciando=$request->input('enviromental_idTypeEnviromental');
            $enviromental->tipo_persona_denunciando=$request->input('enviromental_typePers');
            $enviromental->tipo_documento_denunciando=$request->input('enviromental_typeDoc');
            $enviromental->cod_usuario_denunciado=$cod_user_envirometantal;
            $enviromental->denun_previa=$request->input('user_denun_previa');
            $enviromental->resp_previa=$request->input('user_resp_previa');
            $enviromental->obt_resp=$request->input('user_obt_resp');
            $enviromental->resp_obt_resp=$request->input('user_resp_obt_resp');
            $enviromental->ubicacion=$request->input('enviromental_addres_ubi');
            $enviromental->referencia=$request->input('enviromental_references');
            $enviromental->descripcion=$request->input('enviromental_description');
            /* $enviromental->numero = $result[0]->num_max;
            $enviromental->annio=$year; */
            $enviromental->latitud=$request->input('enviromental_latitud');
            $enviromental->longitud=$request->input('enviromental_longitud');
            $enviromental->save();
            $enviromental_id = $enviromental->id;

            if($request->hasFile('enviromental_files')) {
                 $search = enviromental::where('id','=',$enviromental_id)->first();
                 if($search){
                    $file = $request->file('enviromental_files');
                    $newNameFile = 'enviromental-'.$enviromental_id.'.'. $file->getClientOriginalExtension();
                    $pathName = 'enviromental/files/'.date('Y-m-d');
                    $path = $file->storeAs($pathName, $newNameFile, 'public');
                    $pdfUrl = asset(Storage::url($path));
                    $search->archivo = $path;
                    $search->save();
                }
            }

            return response()->json([
                'status'=>true,
                'cod_eviro'=>$enviromental_id,
                'cod_user'=>$cod_user,
                'cod_user_envirometantal'=>$cod_user_envirometantal
            ]);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>true,
                'cod_eviro'=>0,
                'cod_user'=>0,
                'cod_user_envirometantal'=>0
            ]);
            throw $th;
        }
    }
}
