<?php
include_once 'model/dao/Dao.php';

class EpController {
  private $Dao;
  function __construct() {
  }

  /*
  key value attrs
  */
  public function getInfo($params) {
    $this->Dao = new Dao();
    // $where = 'where type_id = ?';
    $values = array(9);
    $where = null;
    $values = null;
    if (count($params)) {
      $where = 'WHERE ';
      // echo "  wh3r3 equals";
      $values = array();
      $i = 0;
      foreach ($params as $key => $value) {
        $i++;
        // echo "i++ $i";
        if (count($value)) {
          $j = 0;
          // echo "<br/>: ";
          // echo $key;
          // echo count($params[$key]);
          foreach ($value as $key_2 => $value_2) {
            // $where .= ($j == 0) ? $key.".".$key_2." IN ( " : " ";
            $where .= ($j == 0) ? $key." IN ( " : " ";
            $j++;
            // echo " j    ".$j."  count ".count($value)."        ";
            $where .= ($j == count($value)) ? "?)" : "?, " ;
            array_push($values, $value_2);
          }
        }
        $where .= ($i == count($params)) ? " " : "  AND " ;
      }
      // foreach ($values as $key => $value) {
      //   echo "value: $value";
      // }
      // echo $where;
    }
    return $this->Dao->getInfo('abbreviation,loc_identification, feature.start, feature.end, strand, feature.sequence, feature_name,feature.bit_score,feature_rf,feature.e_value', $where, $values);
  }

}

?>
