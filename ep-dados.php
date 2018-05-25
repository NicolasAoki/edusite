<?php
require './controller/epcontroller.php';
$epcontroller = new EpController();


$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET': {
    break;
  }
  case 'POST': {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    $hgt_selected = 0;
    header('Content-Type: application/json');
    //se tiver especificacao de regiao(SHARED,CORE,EXCLUSIVE)
    if($data['localization.loc_identification']){
      echo json_encode($epcontroller->getInfo($data));
    }else{ // se somente tiver o organismo sem regiao
      $dado = json_encode($data['organism.abbreviation'][0]);
      echo json_encode($epcontroller->getAllOrganismData($dado));
    }
    break;
  }
  default: {
    exit();
    break;
  }
}

?>
