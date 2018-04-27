<?php
require './controller/epcontroller.php';
$epcontroller = new EpController();


$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET': {
    try{
      $selectValues = $epcontroller->getOrganisms();
      $selectFeatures = $epcontroller->getFeatures();
      include("statistics.php");
    }catch(Exception $e){
      echo "$e";
    }
    break;
  }
  case 'POST': {
    break;
  }
  default: {
    exit();
    break;
  }
}

?>
