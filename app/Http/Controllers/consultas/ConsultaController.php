<?php

namespace App\Http\Controllers\consultas;

use App\Http\Controllers\Controller;
use App\Models\system\PdoTramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    public function consultaExpediente(Request $request){
        return view('pages.consultaExpediente');
    }

    public function listaAnno(){
        try {
            $resultado = PdoTramite::join('sistema.a_anios', 'p_dto_trmtes.cdgo_anio', '=', 'a_anios.cdgo_anio')
            ->select('p_dto_trmtes.cdgo_anio', 'a_anios.de_anio')
            ->groupBy('p_dto_trmtes.cdgo_anio', 'a_anios.de_anio')
            ->orderBy('a_anios.de_anio', 'desc')
            ->get();
            return $resultado;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function listaMovimientoExpediente(Request $request){
        $tipoExpediente= $request->input('tipoExpediente');
        $annoExpediente= $request->input('annoExpediente');
        $numeroExpediente= $request->input('numeroExpediente');
        try {
            $sql1 = PdoTramite::select('cdgo_dto_trmte','nu_expe_todo')->where('nu_expe_todo',$numeroExpediente)
                                ->where('cdgo_anio',$annoExpediente)
                                ->where('cdgo_tpo_trmte',$tipoExpediente)->first();
            if($sql1){
                $sqlSeguimiento = DB::connection('sigtram')->select("
                    select aa.de_area,rtd.cdgo_dto_trmte,aet.de_estdo_trmte,rtd.fe_rcbdo_trmte,pu.no_crto as user,aa.nu_tele,rtd.de_obse  
                    from sistema.r_trmtes_dcmntos rtd
                    inner join sistema.p_crgos pc on rtd.cdgo_crgo_en = pc.cdgo_crgo 
                    inner join sistema.a_areas aa on pc.cdgo_area = aa.cdgo_area 
                    inner join sistema.a_estdos_trmtes aet on rtd.cdgo_estdo_trmte = aet.cdgo_estdo_trmte 
                    inner join sistema.p_lgin pl on rtd.cdgo_lgin = pl.cdgo_lgin 
                    inner join sistema.p_usrios pu on pl.cdgo_usrios = pu.cdgo_usrios
                    where rtd.cdgo_dto_trmte='".$sql1->cdgo_dto_trmte."'order by cdgo_trmte_dcmnto desc;
                ");
    
                return response()->json([
                    'status'=>true,
                    'expediente'=>$sql1->nu_expe_todo,
                    'detalle'=> $sqlSeguimiento
                ]);
            }else{
                return response()->json([
                    'status'=>false,
                    'expediente'=>'',
                    'detalle'=> ''
                ]);
            }                          
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
