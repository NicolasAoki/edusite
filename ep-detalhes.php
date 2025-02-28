<?php
require './controller/epcontroller.php';
$epcontroller = new EpController();


$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET': {
      try{
        $hgtVisibility = $_GET['hgt_selected'];
        $array = [
          'feature_id' => $_GET['feature_id'],
          'organism_id' => $_GET['organism_id'],
          'publication_id' => $_GET['publication_id'],
          'type_type_id' => $_GET['type_type_id'],
          'analysis_id' => $_GET['analysis_id'],
          'start' => $_GET['start'],
          'end' => $_GET['end'],
          'loc_identification' => $_GET['loc_identification']
        ];
        $hgt = [
          'start' => $_GET['start'],
          'end' => $_GET['start'],
          'organism_id' => $_GET['organism_id']
        ];
        header('Content-Type: text/html');
        $resultSQL = $epcontroller->getDetalhes($array);
        $hgtSQL = $epcontroller->getHGT($hgt);
        include("result.php");
      }catch (Exception $e){
        echo "$e";
      }
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
