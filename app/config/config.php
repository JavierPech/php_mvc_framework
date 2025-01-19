<?php

//HOW TO GET APP ROOT
//echo __FILE__;//1st try
//echo dirname(__FILE__);//2nd try
//echo dirname(dirname(__FILE__));//3rd try CORRECT

//DB PARAMJS
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "mvc");//ADJUST TO PROJECT

//APP ROOT
define ('APPROOT', dirname(dirname(__FILE__)));
//URL ROOT 
define ('URLROOT', "http://localhost/mvc_framework");
//SITE NAME
define ("SITENAME", "MVC");

