<?php
namespace MVC\models;

use MVC\core\model;

class user extends model
{
    public function GetAllUser()
    {
        $data=model::db()->rows("select * FROM user");
        return $data;
    }
    public function Getuser($email,$password)
    {
        $data=model::db()->row("select * FROM user Where `email`='$email' && `password`='$password'");
        return $data;
    }
    public function Insertuser($name,$email,$password)
    {
        //insert
        $data = model::db()->insert('user', ['name' => $name,'email' => $email, 'password' => $password]);
        return $data;
    }
}