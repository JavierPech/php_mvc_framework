<?php

class DatabaseInsert extends Controller{
    
    public function __construct(){
        $this->dbconn = new Database();
    }
    
    public function index(){
        $data = [
            "title" => "Database Insert"
        ];
        $this->view("database_insert/index", $data);
    }
    
    public function insertRecord(){
        
    }
    
}