<?php

class LoginQuery extends Db{

    public static $id;

    protected function setID($uname){
        self::$username = $uname;
    }
    public static function authResult($uname,$pwd){
        $sql ="SELECT * FROM `access` WHERE uname ='". $uname . "' && pword ='". $pwd ."'";
        $conn = parent::connectDB();
        $result = parent::count_Row($conn,$sql);
        if($result == 1){
            echo 'success';
        }else{
            echo 'Incorrect Username or Password';
        }
    }

}