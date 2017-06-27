<?php
require 'lib/nusoap.php';

$client = new nusoap_client('http://localhost/soap3/service.php?wsdl','wsdl');


$response = $client->call("login",array("username"=>"sandip", "ghadge"));
if(empty($response)){
    echo 'data not available';
}else{
    print_r($response);
}


?>