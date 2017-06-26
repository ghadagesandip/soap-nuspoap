<?php
require_once 'functions.php';
require_once 'lib/nusoap.php';

$server = new nusoap_server();

$server->configureWSDL('soap3', 'urn:soap3');


$server->register(
    "price",
    array("name"=>"xsd:string"),
    array("returns"=>"xsd:integer")
);

$server->register('login',
    array('username' => 'xsd:string', 'password'=>'xsd:string'),  //parameters
    array('return' => 'xsd:string'),  //output
    'urn:server',   //namespace
    'urn:server#login',  //soapaction
    'rpc', // style
    'encoded', // use
    'Check user login');  //description



//$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//$server->service($HTTP_RAW_POST_DATA);
@$server->service(file_get_contents("php://input"));
$this->server->methodreturnisliteralxml = true;

?>