<?php
require 'lib/nusoap.php';

$client = new nusoap_client('http://localhost/soap3/service.php?wsdl','wsdl');

$name = "xyz";
//calling our first simple entry point
$result1=$client->call('price', array('name'=>$name));
print_r($result1);

//
//$response = $client->call("login",array("username"=>"sandip", "ghadge"));
//if(empty($response)){
//    echo 'data not available';
//}else{
//    print_r($response);
//}


?>