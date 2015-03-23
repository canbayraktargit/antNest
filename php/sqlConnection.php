<?php
// needs errorHandle.php
class SqlConnection {
    private $credentials;
    private $dbh;
    private $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    public $isConnected = false;
    private $lastStatement;
    
    public function __construct(){
        try {
            $this->setCredentials();
            $this->connect();
        } catch(Exception $ex){
            ErrorHandleFile::sendError("SqlConnection->construct", $ex->getMessage());
        }
    }
    private function setCredentials(){
        try {
            $this->credentials = json_decode(file_get_contents("./json/credentials.json"), true);
        } catch(Exception $ex) {
            ErrorHandleFile::sendError("SqlConnection->setCredentials", $ex->getMessage());
        }
    }
    private function connect(){
        try {
            $this->dbh  = new PDO($this->credentials->dsn, $this->credentials->username, $this->credentials->passwd, $this->options);
            $this->isConnected = true;
        } catch(Exception $ex) {
            ErrorHandleFile::sendError("SqlConnection->connect", $ex->getMessage());
        }
    }
    public function prepare($statement){
        try {
            $this->lastStatement = $this->dbh->prepare($statement);
        } catch(Exception $ex) {
            ErrorHandleFile::sendError("SqlConnection->prepare", $ex->getMessage());
        }
    }
    public function exec($param){
        try {
            if($param != null){
                $this->lastStatement->execute($param);
            } else {
                $this->lastStatement->execute();
            }
        } catch(Exception $ex) {
            ErrorHandleFile::sendError("SqlConnection->exec", $ex->getMessage());
        }
    }
    public function execQuery($query){
        try {
            $this->prepare($query);
            $this->exec();
            return $this->fetchAll();
        } catch(Exception $ex) {
            ErrorHandleFile::sendError("SqlConnection->execQuery", $ex->getMessage());
        }
    }
    public function execStatement($statement, $param){
        try {
            $this->prepare($statement);
            $this->exec($param);
            return $this->fetchAll();
        } catch(Exception $ex) {
            ErrorHandleFile::sendError("SqlConnection->execStatement", $ex->getMessage());
        }
    }
    public function fetchAll(){
        try {
            return $this->lastStatement->fetchAll();
        } catch(Exception $ex) {
            ErrorHandleFile::sendError("SqlConnection->fechAll", $ex->getMessage());
        }
    }
    public function insertObjectToTable($table, $object){
        try {
            $string1 = "insert into `".$table."` (";
            $string2 = ") values (";
            foreach(array_keys($object) as $key){
                $string1 .= "`".$key."`, ";
                $string2 .= ":".$key.", ";
            }
            $prepString = substr($string1, 0, strlen($string1)-2).substr($string2, 0, strlen($string2)-2).");";
            return $this->execStatement($prepString, $object);
        } catch(Exception  $ex) {
            ErrorHandleFile::sendError("SqlConnection->insertObject", $ex->getMessage());
        }
    }
}
?>