<?php

class DatabaseInsert extends Controller{
    
    public function __construct(){
        $this->dbconn = new Database();
    }
    
    public function index(){
        
        $this->view("database_insert/index");
    }
    
    public function insertRecord(){
        
    }
    
}