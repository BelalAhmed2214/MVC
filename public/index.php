<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROUTE",dirname(__DIR__)).DS;//C:\xampp\htdocs\mvc
define("APP",ROUTE.DS.'app');//C:\xampp\htdocs\mvc\app

define("CORE",APP.DS.'core'.DS);//C:\xampp\htdocs\mvc\app\core
define("CONFIG",APP.DS.'config'.DS);//C:\xampp\htdocs\mvc\app\config
define("CONTROLLERS",APP.DS.'controllers'.DS);//C:\xampp\htdocs\mvc\app\controllers
define("VIEW",APP.DS.'views'.DS);//C:\xampp\htdocs\mvc\app\views
define("MODELS",APP.DS.'models'.DS);//C:\xampp\htdocs\mvc\app\models
//-----------------------------------------------------------------------------
//Config:
define("SERVER","localhost");
define("DATABASE","proone");
define("USERNAME","root");
define("PASSWORD","");
define("DOMAIN_NAME","http://mvc.test/user/index");
define("DATABASE_TYPE","mysql");


//-----------------------------------------------------------------------------
require_once("../vendor/autoload.php");
$app1=new MVC\core\app();

?>