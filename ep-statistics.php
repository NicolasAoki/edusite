<?php
require './controller/epcontroller.php';
$epcontroller = new EpController();


$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET': {
    try{
      $resultTableHgt = $epcontroller->getHgtGroupBy();
      $regionsInfo = $epcontroller->getRegions();
      $strain = array("2603V/R","NEM316","A909","GD201008-001","SA20-06","CNCTC_10/84","138P",
      "138spar","GBS1-NY","GBS2-NM","GBS6","NGBS061","NGBS572","GBS85147","SS1","HN016",
      "YM001","GX064","GX026","H002","SG-M1","GBS_ST-1","2-22","09mas018883","ILRI005","ILRI112","COH1");
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
