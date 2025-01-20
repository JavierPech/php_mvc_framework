<?php

class DatabaseSelect extends Controller{
    
    public function __construct(){
        $this->dbconn = new Database();
    }
    
    public function index(){
        $result = $this->getProducts();
        $data = [
            "title" => "Database Select",
            "products" => $result
        ];
        
        $this->view("database_select/index", $data);
    }
    
    public function getProducts(){
        $this->dbconn->query("SELECT * FROM products");
        return ($this->dbconn->resultArray());
    }
}