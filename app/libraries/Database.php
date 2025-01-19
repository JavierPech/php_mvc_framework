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
}