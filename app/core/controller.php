<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;

class controller
{
    //function responsible for design only
    public function view($path,$parm)
    {
        extract($parm);
        // echo VIEW.$path;die;
        
        require_once(VIEW.$path.".php");
    
    }
}