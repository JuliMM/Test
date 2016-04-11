<?php
$couch_dsn = "http://localhost:5984/";
$couch_db = "songs";
require_once "./lib/couch.php";
require_once "./lib/couchClient.php";
require_once "./lib/couchDocument.php";
$client = new couchClient($couch_dsn,$couch_db);
$resp = $couch->send("GET", "/_all_dbs"); 
 var_dump($resp); // string(17) "["test_suite_db"]" 
 $misDatosJSON = json_decode($_POST["miJSON"]);
   
   //con esto podría mostrar todos los datos del JSON recibido
  print_r($misDatosJSON);
?>
