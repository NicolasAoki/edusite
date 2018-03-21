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
    "FROM loc_feature ".
    "JOIN feature ON feature.feature_id = loc_feature.id_feature ".
    "JOIN localization ON localization.loc_id = loc_feature.id_loc ".
    "JOIN organism ON feature.organism_id = organism.organism_id ".
    " $where";

		$horario = $this->selectDB($sql,$params,null);
		return $horario;
  }
  public function getDetails ($fields="*",$where="", $params=null) {
		// throw new Exception("Erro.", 1);
		if(strlen($where)>0) $where = " ".$where;
		// $sql = "SELECT $fields FROM feature $where";
    $sql = "SELECT $fields ".
    "FROM loc_feature ".
    "JOIN feature ON feature.feature_id = loc_feature.id_feature ".
    "JOIN localization ON localization.loc_id = loc_feature.id_loc ".
    "JOIN organism ON feature.organism_id = organism.organism_id ".
    " $where";

		$horario = $this->selectDB($sql,$params,null);
		return $horario;
	}

}
?>
