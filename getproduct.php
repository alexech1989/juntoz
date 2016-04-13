<?php

include './modules/Juntoz.php';

function get_product_by_sku(){
    
    $juntoz = new Juntoz();
  
    $resp=json_decode($juntoz->conectar(),true);

    $che = curl_init('http://api-public.juntoz-staging.com/merchants/14/products/45269864');
    curl_setopt($che, CURLOPT_CUSTOMREQUEST, 'GET');
    $var_authorization="Bearer ".$resp["access_token"];
    curl_setopt($che, CURLOPT_HTTPHEADER, array(
                    'Authorization: '.$var_authorization,
                    'Content-Type: application/json'
                )
            );
    $respuesta2 = curl_exec ($che);
    $error2 = curl_error($che);
    curl_close ($che);
    return $respuesta2;
}
 echo get_product_by_sku();
?>
