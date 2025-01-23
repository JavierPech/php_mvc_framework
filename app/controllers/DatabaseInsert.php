<?php

class DatabaseInsert extends Controller{
    
    public function __construct(){
        $this->dbconn = new Database();
    }
    
    public function index(){
        $data = [
            "title" => "Database Insert Sample",
            "subtitle" => "Change method in url to DatabaseInsert/insert for testing"
        ];
        $this->view("database_insert/index", $data);
    }
    
    public function insert(){
        
        $newProduct = "Pickles";
        $newQty = "3";
        $newImg = "pickes.jpg";
        $msg = "";
        if($this->insertProduct($newProduct, $newQty, $newImg))
            $msg = "Product Inserted";
        else
            $msg = "Failed to insert product";
        
        $data = [
            "title" => "Database Insert Sample",
            "subtitle" => "Inserting the following records: $newProduct, $newQty, $newImg. <br> $msg"
        ];
        $this->view("database_insert/insert", $data);
    }
    
    public function insertProduct($product, $qty, $img){
        $this->dbconn->query("INSERT INTO products (product, qty, img) VALUES (:product, :qty, :img)");
        $this->dbconn->bind(":product", $product);
        $this->dbconn->bind(":qty", $qty);
        $this->dbconn->bind(":img", $img);
        //print_r($this->dbconn->excecute());
        return $this->dbconn->excecute();
    }
    
}