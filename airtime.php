<?php
if(isset($_POST['buy-airtime'])){
    $network = $_POST['network'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];
    $port = true;

$curl = curl_init();

$data = json_encode(["network"=>$network,
    "amount"=>$amount,
    "mobile_number"=>$phone,
    // "plan"=>$plan,
    "Ported_number"=>true,
    "airtime_type"=>"VTU",
    // "payment_medium" => "payment_medium"// NOTE: This field/parameter is optional, It is mainly for those that wants to use Data wallet.... Mediums are \'MAIN WALLET\' or \'MTN SME DATA BALANCE\' or \'MTN CG DATA BALANCE\' or \'AIRTEL CG DATA BALANCE\'
]);

curl_setopt_array($curl, array(
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_URL => 'https://www.gladtidingsdata.com/api/topup/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
    'Authorization: Token xxxxxxx',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

}
