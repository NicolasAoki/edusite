<?php
include_once 'model/dao/Dao.php';

class EpController {
  private $Dao;
  function __construct() {
  }

  public function getInfo($params) {
    $this->Dao = new Dao();
    $where = null;
    $values = null;
    if (count($params)) {
      $where = 'WHERE ';
      $values = array();
      $i = 0;
      foreach ($params as $key => $value) {
        $i++;
        if (count($value)) {
          $j = 0;
          foreach ($value as $key_2 => $value_2) {
            $where .= ($j == 0) ? $key." IN ( " : " ";
            $j++;
            $where .= ($j == count($value)) ? "?)" : "?, " ;
            array_push($values, $value_2);
          }
        }
        $where .= ($i == count($params)) ? " " : "  AND " ;
      }
    }
    return $this->Dao->getInfo('abbreviation,loc_identification, feature.start, feature.end, strand, feature.sequence, feature_name,feature.bit_score,feature_rf,feature.e_value,feature.feature_id,feature.organism_id,feature.publication_id,feature.type_type_id,feature.analysis_id,publication.title', $where, $values);
  }
  public function getDetalhes($params) {
    $this->Dao = new Dao();
    $where = " WHERE feature.feature_id = ? and feature.organism_id = ? and feature.publication_id = ? and feature.type_type_id = ? and feature.analysis_id = ?";
    $values= [
      $params["feature_id"],
      $params["organism_id"],
      $params["publication_id"],
      $params["type_type_id"],
      $params["analysis_id"],
    ]; 
    return $this->Dao->getInfo('*', $where, $values);
  }
}

?>
