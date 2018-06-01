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
    " INNER JOIN localization ".
    " INNER JOIN organism  ".
/*    " INNER JOIN publication ON feature.publication_id = publication.publication_id ".*/
   /* " INNER JOIN hgt ON hgt.organism_id = organism.organism_id ".*/
    " $where";
    #echo $sql;
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
      "WHERE localization.organism_id = " . $key . "  and localization.loc_identification ".
      "like 'EXCLUSIVE'";
      //Conta todas regioes Core de cada organismo
      $sqlCore = "SELECT COUNT(localization.loc_identification) as CORE FROM localization ".
      "WHERE localization.organism_id = " . $key . " and localization.loc_identification ".
      "like 'CORE'";
      //Conta todas regioes Shared de cada organismo
      $sqlShared = "SELECT COUNT(localization.loc_identification) as SHARED FROM localization ".
      "WHERE localization.organism_id = " . $key . " and localization.loc_identification ".
      "like 'SHARED'";
      $rnaCount = "SELECT COUNT(organism_id) as RNA FROM streptornadb.feature where organism_id= " . $key . " ";
      $shared = $this->selectDB($sqlShared,null);
      $exclusive = $this->selectDB($sqlExclusive,null);
      $core = $this->selectDB($sqlCore,null);
      $rnaC = $this->selectDB($rnaCount,null);
      //Push no array contendo as informacoes de cada genoma
      $regionsAnnotation[$key] = array(
          'CORE' => $core[0]['CORE'],
          'EXCLUSIVE' => $exclusive[0]['EXCLUSIVE'],
          'SHARED' => $shared[0]['SHARED'],
          'rnaCount' => $rnaC[0]['RNA']
      );
    }
    return $regionsAnnotation;
  }
  public function hgtGroup(){
    $sql = "SELECT abbreviation,COUNT(abbreviation) as Count FROM hgt join organism where hgt.organism_id = organism.organism_id group by abbreviation;";
    $horario = $this->selectDB($sql,null);
    return $horario;
  }
  public function getManyOrganisms($where){
    $sql = "SELECT * FROM feature inner join organism inner join localization " . $where;
    $horario = $this->selectDB($sql,null);
    return $horario;
  }
  public function getCountncRna(){
    $sql = "SELECT COUNT(f.feature_name) as ncrnaCount FROM feature as f INNER JOIN organism as o where f.organism_id = o.organism_id group by o.abbreviation";
    $horario = $this->selectDB($sql,null);
    return $horario;
  }
}
?>
