<?php
require './controller/epcontroller.php';
$epcontroller = new EpController();


$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET': {
    header('Content-Type: application/json');
    echo json_encode($epcontroller->getInfo(
      array(
        // 'feature.feature_id' => 1230,
        // 'feature.feature_name' => "TPP",
        'organism.abbreviation' => array(
          "AE009948",
          "AE0099sdfs8"
        ),
        'localization.loc_identification' => array(
          "EXCLUSIVE",
          "EXCLVE"
        )
      )
    ));
    // echo json_encode($epcontroller->getInfo(null));
    exit();
    break;
  }
  case 'POST': {
    // echo "i m here";
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    header('Content-Type: application/json');
    // echo $data['organism.abbreviation'];
    // echo($data['localization.loc_identification'][0]);
    // foreach ($data as $key => $value) {
    //   echo "$key : $value";
    // }
    // echo json_encode($epcontroller->getInfo($data));
    // echo json_encode($epcontroller->getInfo(
    //   array(
    //     // 'feature.feature_id' => 1230,
    //     // 'feature.feature_name' => "TPP",
    //     'organism.abbreviation' => $data['organism.abbreviation'],
    //     'localization.loc_identification' => $data['localization.loc_identification']
    //   )
    // ));
    // $valores =       array(
    //         // 'feature.feature_id' => 1230,
    //         // 'feature.feature_name' => "TPP",
    //         'organism.abbreviation' => array(
    //           "AE009948",
    //           "AE0099sdfs8"
    //         ),
    //         'localization.loc_identification' => array(
    //           "EXCLUSIVE",
    //           "EXCLVE"
    //         )
    //       );
    // echo $valores['organism.abbreviation'][0];

    echo json_encode($epcontroller->getInfo($data));
    break;
  }
  default: {
    exit();
    break;
  }
}

?>
