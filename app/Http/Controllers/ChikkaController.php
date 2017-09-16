<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChikkaController extends Controller
{
  public function SendWorker($ContanctNumber){
      $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => 639473901745,
        "shortcode" => "2929002952",
        "message_id" => "12345678901234567890123456789012",
        "message" => urlencode("MR. Predo is requesting you to work as a Carpenter, Reply 'Yes' to confirm"),
        "client_id" => "391f2b1d66254e71b0db75e26eecdbb484b7b13ab9ac1cfe8dee48ed2464c978",
        "secret_key" => "f7bed46468f25c25aeaaf301367a526899f841e1fdfe8f2045c521f319a4c85a"
    );

    $query_string = "";
    foreach($arr_post_body as $key => $frow)
    {
        $query_string .= '&'.$key.'='.$frow;
    }

    $URL = "https://post.chikka.com/smsapi/request";

    $curl_handler = curl_init();
    curl_setopt($curl_handler, CURLOPT_URL, $URL);
    curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
    curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
    curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handler);
    curl_close($curl_handler);

    return $response;
  }

  public function sendAmbassador($ContanctNumber){
      $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => 639298007899,
        "shortcode" => "2929002952",
        "message_id" => "12345678901234567890123456789012",
        "message" => urlencode("MR. JUAN is being requested as a Carpenter by MR. PEDRO"),
        "client_id" => "391f2b1d66254e71b0db75e26eecdbb484b7b13ab9ac1cfe8dee48ed2464c978",
        "secret_key" => "f7bed46468f25c25aeaaf301367a526899f841e1fdfe8f2045c521f319a4c85a"
    );

    $query_string = "";
    foreach($arr_post_body as $key => $frow)
    {
        $query_string .= '&'.$key.'='.$frow;
    }

    $URL = "https://post.chikka.com/smsapi/request";

    $curl_handler = curl_init();
    curl_setopt($curl_handler, CURLOPT_URL, $URL);
    curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
    curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
    curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handler);
    curl_close($curl_handler);

    return $response;
  }
  public function sendSMS(){
    echo $this->SendWorker(639473901745);
    echo $this->sendAmbassador(639298007899);

  }
}
