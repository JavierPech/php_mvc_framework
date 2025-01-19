<?php

/*
 * Base Controller
 * This loads the models and views
 */

class Controller{
    //Load model
    public function model($model){
        //Require model file
        require_once ("../app/models/$model.php");
        
        //Instantiate Model
        return new $model();
    }
    
    //Load View
    public function view($view, $data = []){
        //CHECK VIEW FILE
        if(file_exists("../app/views/$view.php" )){
            require_once("../app/views/$view.php");
        }else{
            //View does not exists;
            die("Unrecognized view");
        }
    }
}