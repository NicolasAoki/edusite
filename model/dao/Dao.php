<?php
include_once 'ConexaoFactory.php';
class Dao extends database {

  public function __construct () {
  }

  private function __clone () {
  }

  public function __destruct () {
    foreach ($this as $key => $value) {
      unset($this->$key);
    }
    foreach(array_keys(get_defined_vars()) as $var) {
      unset(${"$var"});
    }
    unset($var);
  }

	public function getInfo ($fields="*",$where="", $params=null) {
		// throw new Exception("Erro.", 1);
		if(strlen($where)>0) $where = " ".$where;
		// $sql = "SELECT $fields FROM feature $where";
    $sql = "SELECT $fields ".
    "FROM feature ".
    " INNER JOIN localization ON localization.loc_id = feature.feature_id ".
    " INNER JOIN organism ON feature.organism_id = organism.organism_id ".
    " INNER JOIN publication ON feature.publication_id = publication.publication_id ".
   /* " INNER JOIN hgt ON hgt.organism_id = organism.organism_id ".*/
    " $where";
		$horario = $this->selectDB($sql,$params,null);
		return $horario;
  }
  public function getTableHGT($fields="*",$where="", $params=null){
    if(strlen($where)>0) $where = " ".$where;
    $sql = "SELECT $fields ".
    "FROM hgt ".
    " $where";
    $horario = $this->selectDB($sql,$params,null);
    return $horario;
  }
  public function getTableOrganism(){
    $sql = "SELECT organism.abbreviation FROM organism";
    $horario = $this->selectDB($sql,null);
    return $horario;
  }
  public function getTableFeatures(){
    $sql = "SELECT distinct feature.feature_name FROM feature";
    $horario = $this->selectDB($sql,null);
    return $horario;
  }
  public function countRegions(){
    $organismos = $this->getTableOrganism();
    $regionsAnnotation = array();
    foreach ($organismos as $key => $value) {
      //Conta todas regioes Exclusive de cada organismo
      $sqlExclusive = "SELECT COUNT(localization.loc_identification) as EXCLUSIVE FROM localization ".
      "WHERE localization.host_gene like '" . $value['abbreviation'] . "' and localization.loc_identification ".
      "like 'EXCLUSIVE'";
      //Conta todas regioes Core de cada organismo
      $sqlCore = "SELECT COUNT(localization.loc_identification) as CORE FROM localization ".
      "WHERE localization.host_gene like '" . $value['abbreviation'] . "' and localization.loc_identification ".
      "like 'CORE'";
      //Conta todas regioes Shared de cada organismo
      $sqlShared = "SELECT COUNT(localization.loc_identification) as SHARED FROM localization ".
      "WHERE localization.host_gene like '" . $value['abbreviation'] . "' and localization.loc_identification ".
      "like 'SHARED'";
      $shared = $this->selectDB($sqlShared,null);
      $exclusive = $this->selectDB($sqlExclusive,null);
      $core = $this->selectDB($sqlCore,null);
      //Push no array contendo as informacoes de cada genoma
      $regionsAnnotation[$value['abbreviation']] = array(
          'CORE' => $core[0]['CORE'],
          'EXCLUSIVE' => $exclusive[0]['EXCLUSIVE'],
          'SHARED' => $shared[0]['SHARED']
      );
    }
    return $regionsAnnotation;
  }
  public function hgtGroup(){
    $sql = "SELECT abbreviation,COUNT(abbreviation) as Count FROM hgt join organism where hgt.organism_id = organism.organism_id group by abbreviation;";
    $horario = $this->selectDB($sql,null);
    return $horario;
  }
}
?>
