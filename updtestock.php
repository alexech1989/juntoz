<?php

include './modules/Juntoz.php';

function update_stock_item(){
    
    $juntoz = new Juntoz();

    $resp=json_decode($juntoz->conectar(),true);
    $che = curl_init('https://api-public.juntoz.com/inventory/stock');
    curl_setopt($che, CURLOPT_CUSTOMREQUEST, 'PUT');
    $var_authorization="Bearer ".$resp["access_token"];
    curl_setopt($che, CURLOPT_HTTPHEADER, array(
                    'Authorization: '.$var_authorization,
                    'Content-Type: application/json'
                )
            );
    $data_item='[
        {
            "Sku": "96587586",
            "Quantity": 48,
            "RetailPrice": null
        }
    ]';
    curl_setopt($che, CURLOPT_POSTFIELDS, $data_item);
    $respuesta2 = curl_exec ($che);
    $error2 = curl_error($che);
    //echo $error2;
    curl_close ($che);
    return $respuesta2;
}
 echo update_stock_item();
?>