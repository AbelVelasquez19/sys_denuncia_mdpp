<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function notificacionEventoFuncionario(Request $request){
        $numeroCelular = $request->input('numeroCelular');
        $administrado = $request->input('administrado');
        $dias = $request->input('dias');
        $asunto = $request->input('asunto');
        $fechaRegistro = $request->input('fechaRegistro');
        $fechaInicio = $request->input('fechaInicio');
        $estado = $request->input('estado');
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.facebook.com/v19.0/107514592428270/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "messaging_product": "whatsapp",
                "recipient_type": "individual",
                "to": "'.$numeroCelular.'",
                "type": "template",
                "template": {
                    "name": "notificacion_evento_funcionario",
                    "language": {
                        "code": "es_MX",
                        "policy": "deterministic"
                    },
                    "components": [
                        {
                            "type": "body",
                            "parameters": [
                                {
                                    "type": "text", 
                                    "text": "'.$administrado.'"
                                },
                                {
                                    "type": "text", 
                                    "text": "'.$dias.'"
                                },
                                {
                                    "type": "text", 
                                    "text": "'.$asunto.'"
                                },
                                {
                                    "type": "text", 
                                    "text": "'.$fechaInicio.'"
                                },
                                {
                                    "type": "text", 
                                    "text": "'.$fechaRegistro.'"
                                },
                                {
                                    "type": "text", 
                                    "text": "'.$estado.'"
                                }
                            ]
                        }
                    ]
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer EAAMZCH1Vx020BO0O1nwg2kAYIZCeZCIz2hPlAZCuqikkPDu5Oc5OlLjnXLOBMiUUQpkkfxedzwVrYp381KyvWz9WMUei7WLe2ZBk1izM5lMidWPArjjG77rIjxpHkNuS78gdxUjDldwH0WFxZApi3sbFTbgT3XoyP6AbbV3Ek5Xs4sm6sP3ZCOsWblt0ijx6zTqoQXZC8gtlGhdbrZADi'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
    public function notificacionEventoAdministrado(Request $request){
        $numeroCelular = $request->input('numeroCelular');
        $administrado = $request->input('administrado');
        $asunto = $request->input('asunto');
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://graph.facebook.com/v19.0/107514592428270/messages',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "messaging_product": "whatsapp",
            "recipient_type": "individual",
            "to": "'.$numeroCelular.'",
            "type": "template",
            "template": {
                "name": "notificacion_evento_administrado",
                "language": {
                    "code": "es_MX",
                    "policy": "deterministic"
                },
                "components": [
                    {
                        "type": "body",
                        "parameters": [
                            {
                                "type": "text", 
                                "text": "'.$administrado.'"
                            },
                            {
                                "type": "text", 
                                "text": "'.$asunto.'"
                            }
                        ]
                    }
                ]
            }
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer EAAMZCH1Vx020BO0O1nwg2kAYIZCeZCIz2hPlAZCuqikkPDu5Oc5OlLjnXLOBMiUUQpkkfxedzwVrYp381KyvWz9WMUei7WLe2ZBk1izM5lMidWPArjjG77rIjxpHkNuS78gdxUjDldwH0WFxZApi3sbFTbgT3XoyP6AbbV3Ek5Xs4sm6sP3ZCOsWblt0ijx6zTqoQXZC8gtlGhdbrZADi'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response; 
    }
    public function notificacionEventoFirmaPendiente(Request $request){
        $numeroCelular = $request->input('numeroCelular');
        $funcionario = $request->input('funcionario');
        $asunto = $request->input('asunto');
        $fecha = $request->input('fecha');
        $hora = $request->input('hora');
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://graph.facebook.com/v19.0/107514592428270/messages',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "messaging_product": "whatsapp",
            "recipient_type": "individual",
            "to": "'.$numeroCelular.'",
            "type": "template",
            "template": {
                "name": "notificacion_firma_pendiente",
                "language": {
                    "code": "es_MX",
                    "policy": "deterministic"
                },
                "components": [
                    {
                        "type": "body",
                        "parameters": [
                            {
                                "type": "text", 
                                "text": "'.$funcionario.'"
                            },
                            {
                                "type": "text", 
                                "text": "'.$asunto.'"
                            },
                            {
                                "type": "text", 
                                "text": "'.$fecha.'"
                            },
                            {
                                "type": "text", 
                                "text": "'.$hora.'"
                            }
                        ]
                    }
                ]
            }
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer EAAMZCH1Vx020BO0O1nwg2kAYIZCeZCIz2hPlAZCuqikkPDu5Oc5OlLjnXLOBMiUUQpkkfxedzwVrYp381KyvWz9WMUei7WLe2ZBk1izM5lMidWPArjjG77rIjxpHkNuS78gdxUjDldwH0WFxZApi3sbFTbgT3XoyP6AbbV3Ek5Xs4sm6sP3ZCOsWblt0ijx6zTqoQXZC8gtlGhdbrZADi'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return  $response;
    }
    public function ejec_pide_sunat_api(Request $request){
        $tipo = $request->input('tipo');
        $documento = $request->input('documento');
        $DATA = [];
        $STATUS=0;
        switch ($tipo) {
            case 'DNI':
                    $CREDENCIALES=array(
                        1=>array('usuario'=>'70068099','clave' => '70068099') ,
                        2=>array('usuario'=>'46156461','clave' => '46156461') ,
                        3=>array('usuario'=>'72966141','clave' => '72966141') ,
                        4=>array('usuario'=>'62126949','clave' => '62126949') ,
                        5=>array('usuario'=>'40064319','clave' => '40064319') ,
                        6=>array('usuario'=>'73758325','clave' => '73758325') ,
                        7=>array('usuario'=>'72495583','clave' => '72495583') ,
                        8=>array('usuario'=>'09945007','clave' => '09945007') 
                    );
                    $INT=1;
                    $DATOS_PERSONA = '';
                    
                    do {
                        $URL = "https://ws5.pide.gob.pe/Rest/Reniec/Consultar?nuDniConsulta=".$documento."&nuDniUsuario=".$CREDENCIALES[$INT]['usuario']."&nuRucUsuario=20131366702&password=".$CREDENCIALES[$INT]['clave']."&out=json";
                        $CONSULTA       = file_get_contents($URL);
                        $CONSULTA_DNI   = json_decode($CONSULTA);
                        $CO_RESULTADO = $CONSULTA_DNI->consultarResponse->return->coResultado;
                        $DE_RESULTADO=$CONSULTA_DNI->consultarResponse->return->deResultado;
                        if(!isset($CONSULTA_DNI->consultarResponse->return->datosPersona)){
                            $INT++;
                        }else{
                            $DATOS_PERSONA=$CONSULTA_DNI->consultarResponse->return->datosPersona;
                            $STATUS=1;
                            $INT=0;
                        }
                    } while ($INT=0);
                    
                    $DATA['CO_RESULTADO'] = $CO_RESULTADO;
                    $DATA['DE_RESULTADO'] = $DE_RESULTADO;
                    $DATA['DOCUMENTO'] = $documento;
                    $DATA['APE_PATERNO'] = !empty($DATOS_PERSONA->apPrimer) ? $DATOS_PERSONA->apPrimer : '';
                    $DATA['APE_MATERNO'] = !empty($DATOS_PERSONA->apSegundo) ? $DATOS_PERSONA->apSegundo: '';
                    $DATA['NOMBRE_COMPLETO'] = !empty($DATOS_PERSONA->prenombres) ? $DATOS_PERSONA->prenombres : '';
                    $DATA['DIRECCION'] = !empty($DATOS_PERSONA->direccion) ? $DATOS_PERSONA->direccion : '';
                    $DATA['UBIGEO'] = !empty($DATOS_PERSONA->ubigeo) ? $DATOS_PERSONA->ubigeo : '';
                    $DATA['FOTO'] = !empty($DATOS_PERSONA->foto) ? 'data:image/gif;base64,'.$DATOS_PERSONA->foto : '';
                    $DATA['ESTADO_CIVIL'] = !empty($DATOS_PERSONA->estadoCivil) ? $DATOS_PERSONA->estadoCivil : '';
                    
                break;
            
            case 'RUC':
                try {
                    $url="https://ws3.pide.gob.pe/Rest/Sunat/DatosPrincipales?numruc=".$documento;
                    $ch = curl_init($url);
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_HTTPGET, true);    
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                    $rpta = curl_exec($ch);
                    curl_close($ch);
    
                    $rpta = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $rpta);
                    $xml = simplexml_load_string($rpta); 
                    //var_export($xml);
                    //var_export($xml->soapenvBody->multiRef);
                    $desc_tipovia = $xml->soapenvBody->multiRef->desc_tipvia;
                    $desc_nombvia = $xml->soapenvBody->multiRef->ddp_nomvia; 
                    $desc_tipozona = $xml->soapenvBody->multiRef->desc_tipzon; 
                    $desc_nomzona =  $xml->soapenvBody->multiRef->ddp_nomzon;
                    $numero = $xml->soapenvBody->multiRef->ddp_numer1; 
                    $departamento = $xml->soapenvBody->multiRef->desc_dep; 
                    $provincia = $xml->soapenvBody->multiRef->desc_prov;
                    $distrito = $xml->soapenvBody->multiRef->desc_dist; 
                    $razonsocial = $xml->soapenvBody->multiRef->ddp_nombre;
    
                    $tipovia = empty($desc_tipovia)?'':trim($desc_tipovia).' ';
                    $nombvia = empty($desc_nombvia)?'':trim($desc_nombvia).' ';
                    $tipozona = empty($desc_tipozona)?'':trim($desc_tipozona).' ';
                    $nomzona =  empty($desc_nomzona)?'':trim($desc_nomzona).' ';
                    $referencia = $xml->soapenvBody->multiRef->ddp_refer1;  
                    $referencia = ($referencia=='-')?'':'('.$referencia.')';
        
                    $domicilio = $tipovia.' '.$nombvia;
                    $numero = (trim($numero)=='-')?'':$numero; 
                    $interior = $xml->soapenvBody->multiRef->ddp_inter1;
                    $lote = $xml->soapenvBody->multiRef->ddp_lllttt;
                    $denominacion = $tipozona.' '.$nomzona.' '.$referencia;
                    $ubig = $departamento.'/'.$provincia.'/'.$distrito;
                    
                    if(!empty($razonsocial)){
                        $STATUS=1;
                    }
                    
                    //$razonsocial = implode($razonsocial, ",");
                    $DATA['CO_RESULTADO'] = '0000';
                    $DATA['DE_RESULTADO'] = !empty($razonsocial)?'Consulta realizada correctamente':'No se encontro resultado';
                    $DATA['DOCUMENTO'] = $documento;
                    $DATA['NOMBRE_COMPLETO']= trim($razonsocial);
                    $DATA['DIRECCION']  = trim($domicilio).' '.trim($numero).' '.trim($denominacion);
                    $DATA['UBIGEO']     = trim($ubig);
                    $DATA['APE_PATERNO']= '';
                    $DATA['APE_MATERNO']= '';
                    $DATA['FOTO']       = '';
                    $DATA['ESTADO_CIVIL']= '';
    
                } catch (Exception $exc) {
                }
                break;
        }
        return json_encode(['STATUS' => $STATUS,'DATA' => $DATA]);
    }
}
