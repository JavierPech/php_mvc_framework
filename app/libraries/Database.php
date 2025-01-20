<?php

 /*
  *PDO DATABASE CLASS
  *Connect to DB
  *Create prepared Statements
  *Bind Values
  *Return Rows and Results
  */

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db = DB_NAME;
    
    private $conn;
    private $stmt;
    private $err;
    
    public function __construct(){
        //SET DSN
        $dsn = "mysql:host=" .$this->host. ";dbname=" .$this->db;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            //MAITAIN A PERSISTEN CONNECTION TO ENHANCE PERFORMANCE
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            //THERE ARE 3 MODES
            //ERRMODE_SILENT
            //ERRMODE_WARNING
            //ERRMODE_EXCEPTION
        );
        
        try{
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        }catch(PDOException $e){
            echo "failed";
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
    
    //PREPARED STATEMENT WITH QUERY
    public function query($sql){
        $this->stmt = $this->conn->prepare($sql);
    }
    
    //BIND PARAMS
    public function bind($param, $value, $type = null){
        if(is_null($type)){
            $type = $this->checkType($value);
        }
        
        $this->stmt->bindValue($param, $value, $type);
    }
    
    //EXECUTE PREPARED STATEMENT
    public function excecute(){
        return $this->stmt->execute();
    }
    
    //GET RESULT SET AS ARRAY
    public function resultArray(){
        $this->excecute();
        return $this->stmt->fetchAll();//RETURN AS ASSOCIATIVE ARRAY
        //return $this->stmt->fetchAll(PDO::FETCH_OBJ);//RETURN OBJECT
    }
    
    public function resultSingle(){
        $this->excecute();
        return $this->stmt->fetch();//RETURN AS ASSOCIATIVE ARRAY
        //return $this->stmt->fetch(PDO::FETCH_OBJ);//RETURN OBJECT
    }
    
    public function rowCount(){
        return $this->stmt->rowCount();
    }
    
    private function checkType($value){
        if(is_int($value))
            return PDO::PARAM_INT;
        else if(is_bool($value))
            return PDO::PARAM_BOOL;
        else if(is_null($value))
            return PDO::PARAM_NULL;
        else
            return PDO::PARAM_STR;
    }
}