<?php
abstract class database {
  /*M�todo construtor do banco de dados*/
  public function __construct() {

  }

  /*M�todo que destroi a conex�o com banco de dados e remove da mem�ria todas as vari�veis setadas*/
  public function __destruct() {
    $this->disconnect();
    foreach ($this as $key => $value) {
      unset($this->$key);
    }
  }

  private static $dbtype   = "mysql";
  private static $host     = "localhost";
  private static $port     = "3306";
  private static $user     = "root";
  private static $password = "root";
  private static $db       = "streptornadb";
  private static $conexao;

  /*Metodos que trazem o conteudo da variavel desejada
  @return   $xxx = conteudo da variavel solicitada*/
  private function getDBType()  {return self::$dbtype;}
  private function getHost()    {return self::$host;}
  private function getPort()    {return self::$port;}
  private function getUser()    {return self::$user;}
  private function getPassword(){return self::$password;}
  private function getDB()      {return self::$db;}

  public function connect(){
    try {
      $this->conexao = new PDO($this->getDBType().":host=".$this->getHost().";port=".$this->getPort().";dbname=".$this->getDB(), $this->getUser(), $this->getPassword());
    } catch (PDOException $i) {
      //se houver exce��o, exibe
      die("Erro: <Strong>" . $i->getMessage() . "</Strong>");
    }

    return ($this->conexao);
  }

  private function disconnect(){
    $this->conexao = null;
  }

  /*Método select que retorna um VO ou um array de objetos*/
  public function selectDB($sql, $params=null, $class=null) {
    $this->connect();
    $query=$this->conexao->prepare($sql);
    $query->execute($params);

    // if(isset($class)) {
    // 	$rs = $query->fetchAll(PDO::FETCH_PROPS_LATE,$class) or die(print_r($query->errorInfo(), true));
    // }else{
    $rs = $query->fetchAll(PDO::FETCH_ASSOC);// or die(print_r($query->errorInfo(), true));
    $this->disconnect();
    // }
    return $rs;
  }

}
?>
