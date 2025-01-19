<?php

//LOAD CONFIG
require_once 'config/config.php';

//AUTOLOAD CORE LIBRARIES
spl_autoload_register(function($className){
    //FILES UNDER LIBRARIES MUST MATCH
    //THE NAME OF THE CLASS i.e. Controller.php & class Controller
    require_once "libraries/$className.php";
    //THIS ALLOWS US TO AUTOMATICALLY INCLUDE NEW LIBRARIES
    //IN CASE NEW ARE APPENDED
});
