<?php
require 'api.php';


$balance = (new \WebX\Api())->getBalance();

//header('Content-Type: application/json');
echo json_encode($balance);

/*
$info = (new \WebX\Api())->getAccountInfo();
$order = (new \WebX\ImeiOrder())->setId(3)->get();
$currency = (new \WebX\Api())->getCurrency();
//$services = (new \WebX\Api())->getServerServices();
$services = (new \WebX\Api())->getImeiServices();
echo "<pre>";
echo "Balance Info:\n";
print_r($balance);
echo "</pre>";

*/
?>
