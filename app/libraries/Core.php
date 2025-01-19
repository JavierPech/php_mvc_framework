<?php

/*
 * App Core Class
 * Manages URL & loads core controller
 * URL FORMAT - /controller/method/params
 */

define('__ENTRYPOINT', "Pages");
class Core{
    //DEFAULT ENTRY POINT
    protected $currentController = "Pages";
    protected $currentMethod = "index";
    protected $params = [];
    
    public function __construct(){
        //print_r($this->getUrl());
        $url = $this->getUrl();
        
        //LOOK IN CONTROLLERS
        //WE USE ucwords because all files start with capital letters
        //PATH FROM index.php
        if(file_exists("../app/controllers/" . ucwords($url[0]) . ".php")){
            //IF EXISTS, SET AS CONTROLLER
            $this->currentController = ucwords($url[0]);
            //REMOVE 0 INDEX(CONTROLLER) TO CLEAN
            unset($url[0]);
        }
        
        
        //REQUIRE THECONTROLLER
        require_once '../app/controllers/'. $this->currentController . ".php";
        
        //INSTANTIATE CURRENT CONTROLLER CLASS
        $this->currentController = new $this->currentController;
        
        //CHECK FOR SECOND PART OF URL
        if(isset($url[1])){
            //CHECK TO SEE IF METHOD EXITSTS IN CONTROLLER
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                //REMOVE 1 INDEX(CONTROLLER) TO CLEAN ARRAY SO THAT ONLY
                //PARAMETERS ARE PASSED
                unset($url[1]);
            }
        }
        
        // HANDLE PARAMETERS HERE AFTER INDEX 1
        $this->params = $url ? array_values($url) : [];
        
        //CALL A CALLBACK WITH ARRAY OF PARAMS
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        //THIS WILL CALL A SPECIFIC PHP FILE(currentController) AND A 
        //SPECIFIC PHP FUNCTION (currentMethod) AND PASS SOME
        //PARAMENTERS(params). THE PASSED VARIABLES ARE AT THE START
        //OF THE CLASS
        
        //NOTE, REMEMBER TO ALWAYS DEFINE A DEFAULT METHOD
        //INCLUDED IN THE CLASS VARIABLE currentMethod.
        
    }
    
    public function getUrl(){
        //THIS FUNCTION DECOMPOSES URL
        //REFERENCE TO THE FORMAT AT THE TOP
        
        if(isset($_GET['url'])){
            //REMOVES WHITESPACES
            $url = rtrim($_GET['url'], "/");
            
            //SANITIZE VARIABLES SO IT DOESNT HAVE ANY CHARACTERS THAT A URL
            //SHOULD NOT HAVE
            $url = filter_var($url, FILTER_SANITIZE_URL);
            
            //DECOMPOSES URL IN THE FOLLOWING MANNER
            //INDEX 0: CONTROLLER
            //INDEX 1: METHOD
            //INDEX 2...: VARIABLES
            $url_arr = explode('/', $url);
            
            return $url_arr;
        }
        
        //RETURN MAIN ENTRY POINT 
        return [__ENTRYPOINT];
        
    }
}