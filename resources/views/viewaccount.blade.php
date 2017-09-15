<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api-uat.unionbankph.com/hackathon/sb/accounts/100089389084",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "x-ibm-client-id: 2be2fa13-5d38-434d-b1d1-6736bd96bd67",
    "x-ibm-client-secret: nM1dQ2lN8iQ3hL7hT5vS5nJ0vL8iK2xE7xW5vI0kE7xG0cT3fR"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $obj = json_decode($response);
  echo $obj[0]->account_no;
}
