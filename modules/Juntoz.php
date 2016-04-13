<?php
/**
 * Description of Juntoz
 *
 * @author EDSON
 */

require_once("./entities/Constantes.php");

class Juntoz {
    //put your code here
    
    public function conectar(){
        
        $client_id = Constantes::getClientID();
        $client_secret = Constantes::getClientSecret();
        
        $ch = curl_init('http://api.juntoz-staging.com/oauth/token');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json'
            )
        );
        
        $body = array('grant_type' => 'client_credentials',
        'client_id' => $client_id,
        'client_secret' => $client_secret);
        curl_setopt ($ch, CURLOPT_POSTFIELDS,  http_build_query($body));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $respuesta = curl_exec ($ch);
        $error = curl_error($ch);
        curl_close ($ch);
        return  $respuesta;
    }
}
