<?php
require './controller/epcontroller.php';
$epcontroller = new EpController();


$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET': {
    try{
      $array = [
        'feature_id' => $_GET['feature_id'],
        'organism_id' => $_GET['organism_id'],
        'publication_id' => $_GET['publication_id'],
        'type_type_id' => $_GET['type_type_id'],
        'analysis_id' => $_GET['analysis_id'],
        'start' => $_GET['start'],
        'end' => $_GET['end']
      ];
      header('Content-Type: text/html');
      $resultSQL = $epcontroller->getDetalhes($array);
      include("result.php");
    }catch (Exception $e){
      echo "$e";
    }

  }
  case 'POST': {
/*     $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    header('Content-Type: application/json');
    echo json_encode($epcontroller->getInfo($data)); */
    break;
  }
  default: {
    exit();
    break;
  }
}

?>
