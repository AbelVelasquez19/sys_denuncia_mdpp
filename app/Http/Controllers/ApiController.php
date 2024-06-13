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
}
