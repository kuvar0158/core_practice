<?php

$curlSession = curl_init();
curl_setopt($curlSession, CURLOPT_URL, 'https://data-asg.goldprice.org/dbXRates/USD');
curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, 0);
$output = curl_exec($curlSession);
$jsonData = json_decode($output);
var_dump($jsonData);
$item =  $jsonData->items;
$date =  $jsonData->date;
$gold_price = $item[0]->xauPrice;
echo "Gold price on ".$date." is ".$gold_price;
curl_close($curlSession);

?>