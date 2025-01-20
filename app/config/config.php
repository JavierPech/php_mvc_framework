<?php

//HOW TO GET APP ROOT
//echo __FILE__;//1st try
//echo dirname(__FILE__);//2nd try
//echo dirname(dirname(__FILE__));//3rd try CORRECT

//DB PARAMS
//ADJUST TO YOUR PROJECT
//define("DB_HOST", "localhost");
//define("DB_USER", "__YOUR_USER__");
//define("DB_PASS", "__YOUR_PASS__");
//define("DB_NAME", "__YOUR_DB__");

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "mvc");

//APP ROOT
define ('APPROOT', dirname(dirname(__FILE__)));
//URL ROOT EX:
define ('URLROOT', "http://localhost/php_mvc_framework");
//define ('URLROOT', "__YOUR_URL__");
//SITE NAME
define ("SITENAME", "__YOUR_SITE_NAME__");

