<?php

class Home extends Controller{
    public function __construct(){
        //MODELS CAN BE CALLED HERE
    }
    
    public function index(){
        
        $data = [
            "title" => "Welcome",
        ];
        
        $this->view("home/index", $data);
    }
    
}
