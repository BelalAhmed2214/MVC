<?php
namespace MVC\core;
class app
{
    private $controller="home";
    private $method="index";
    private $params=[];
    
    public function __construct()
    {
        $this->url();
        $this->render();
    }
    /*
    Use of this function is to:
    1-Convert queryString into an Array explode()
    *$Url['controller','method',[parameters]]
    2-Fill the value of Controller and method and parameters
    */ 
    private function url()
    {
        //check that there is query string entered in url or not
        if (!empty($_SERVER['QUERY_STRING']))
        {
            //explode()---> convert string into array
            $url=explode("/",$_SERVER['QUERY_STRING']);
            //filled the value of controller with the first element of array
            $this->controller=isset($url[0])?$url[0]."controller":"homecontroller";
            //filled the value of method with the second element of array
            $this->method=isset($url[1])?$url[1]:"index";
            //unset()----> Delete the first two element in the array (controller,method)
            unset($url[0],$url[1]);
            //array_values()---->Make the array index begins from zeroBased again
            $this->params=array_values($url);
            // echo "<pre>";
            // print_r($this->params);
        }
        else
        {
            $this->controller = 'homecontroller';
            $this->method = 'index';
        }

    }
    //Use of this function---> to Get the controller or method that have the sameName in controllers file
    private function render()
    {
        //write the namespace of file [class] you want to check if it have the sameName or not
        $controller="MVC\controllers\\".$this->controller; //after filled it in url function, $this->controller='homecontroller'
        if (class_exists($controller))
            //Create object from class to be able to interact with it because you couldn't be able to interact with class
        {    
            $controller = new $controller;
            /*
                method_exists()--->takes two parameters:
                1-name of class
                2-method that include inside that class
            */
            if(method_exists($controller,$this->method))
                {
                    //this function call the method that exist in the other class
                    call_user_func_array([$controller,$this->method],$this->params);
                }
            else
                {
                    echo "Method not Exist";
                }        
        }
       else
       {
        echo "Class not exist";
       }
    }
}
?>