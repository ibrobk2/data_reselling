<?php
if(isset($_POST['btn-data'])){
    $network = $_POST['network'];
    $phone = $_POST['phone'];
    $plan = $_POST['plan'];
    $port = true;

$curl = curl_init();

$data = json_encode(["network"=>$network,
    "mobile_number"=>$phone,
    "plan"=>$plan,
    "Ported_number"=>true,
    // "payment_medium" => "payment_medium"// NOTE: This field/parameter is optional, It is mainly for those that wants to use Data wallet.... Mediums are \'MAIN WALLET\' or \'MTN SME DATA BALANCE\' or \'MTN CG DATA BALANCE\' or \'AIRTEL CG DATA BALANCE\'
]);

curl_setopt_array($curl, array(
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_URL => 'https://www.gladtidingsdata.com/api/data/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
    'Authorization: Token 52042eba3f89944b8e5f0985d5025918a7c87e82',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

}
