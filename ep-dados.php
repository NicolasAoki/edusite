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
    echo json_encode($epcontroller->getInfo($data));
    break;
  }
  default: {
    exit();
    break;
  }
}

?>
