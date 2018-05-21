<?php
include_once 'model/dao/Dao.php';

class EpController {
  private $Dao;
  function __construct() {
  }

  public function getInfo($params) {
    $this->Dao = new Dao();
    $where = " WHERE ";
    $values = null;
/*    foreach ($params as $itemSelected => $itensMarcados) {
      if(count($itensMarcados)){
        if($itemSelected === "feature.feature_name"){
          $where . = " AND " . $itemSelected . " LIKE " . $itensMarcados;
        }else if($itemSelected === "feature.start"){
          $where . = " AND " . $itemSelected . " >= " . $itensMarcados;
        }else if($itemSelected === "feature.end"){
          $where . = " AND " . $itemSelected . " <= " . $itensMarcados;
        }else if($itemSelected === "localization.loc_identification"){
          $where . = " AND localization.loc_identification like " . $itemSelected;
        }
      }
    return $this->Dao->getInfo('organism.abbreviation,localization.loc_identification, feature.start, feature.end, feature.strand, feature.sequence, feature_name,feature.bit_score,feature_rf,feature.e_value,feature.feature_id,feature.organism_id,feature.publication_id,feature.type_type_id,feature.analysis_id', $where, $values);
    }*/
    if (count($params)) {
      $where = 'WHERE ';
      $values = array();
      $i = 0;
      foreach ($params as $key => $value) {
        $i++;
        if (count($value)) {
          $j = 0;
          if ($key === "feature.feature_name") {
              $where .= $key." like '".$value ."'";
          }
          else if ($key === "feature.start"){
              $where .= $key." >= ".$value ;
          }
          else if ($key === "feature.end"){
              $where .= $key." <= ".$value ;
          }
          else {
            foreach ($value as $key_2 => $value_2) {
              $where .= ($j == 0) ? $key." IN ( " : " ";
              $j++;
              $where .= ($j == count($value)) ? "?)" : "?, " ;
              array_push($values, $value_2);
            }
          }
        }
        $where .= ($i == count($params)) ? " " : "  AND " ;
      }
    }
    return $this->Dao->getInfo('organism.abbreviation,localization.loc_identification, feature.start, feature.end, feature.strand, feature.sequence, feature_name,feature.bit_score,feature_rf,feature.e_value,feature.feature_id,feature.organism_id,feature.publication_id,feature.type_type_id,feature.analysis_id', $where, $values);
  }
  public function getDetalhes($params) {
    $this->Dao = new Dao();
    $where = " WHERE feature.feature_id = ? and feature.organism_id = ? and feature.publication_id = ? and feature.type_type_id = ? and feature.analysis_id = ? and feature.start = ? and feature.end = ? and localization.loc_identification = ?";
    $values= [
      $params["feature_id"],
      $params["organism_id"],
      $params["publication_id"],
      $params["type_type_id"],
      $params["analysis_id"],
      $params["start"],
      $params["end"],
      $params["loc_identification"]
    ];
    return $this->Dao->getInfo('feature.start,feature.feature_function,feature.end,feature.e_value,feature.feature_RF,
                                organism.abbreviation,localization.loc_identification,localization.start,localization.end,
                                feature.strand, feature.sequence, feature_name,feature.bit_score,feature_rf,
                                organism.*', $where, $values);
  }
  public function getHGT($params) {
    $this->Dao = new Dao();
    $where = " WHERE hgt.start <= ? and hgt.end >= ? and organism_id = ?";
    $values= [
      $params["start"],
      $params["end"],
      $params["organism_id"]
    ];
    return $this->Dao->getTableHGT('hgt.*',$where,$values);
  }
  public function getOrganisms(){
    $this->Dao = new Dao();
    return $this->Dao->getTableOrganism();
  }
  public function getFeatures(){
    $this->Dao = new Dao();
    return $this->Dao->getTableFeatures();
  }
  public function getRegions(){
    $this->Dao = new Dao();
    return $this->Dao->countRegions();
  }
  public function getHgtGroupBy(){
    $this->Dao = new Dao();
    return $this->Dao->hgtGroup();
  }
}

?>
