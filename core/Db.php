<?php


class Db {
    protected static $servername = 'localhost';
    protected static $username = 'root';
    protected static $password = '';
    protected static $db_name = 'clientaccess';

    protected static function connectDB(){
        $conn = mysqli_connect(self::$servername,self::$username,self::$password,self::$db_name);
        if(mysqli_connect_error()){
            echo "error db";
        }else{
            return $conn;
        }
        
    }
    protected function getDbName(){
        return $this->db_name;
    }
    protected function setDbName($db){
        $this->db_name = $db;
    }

    protected static function queryText($conn,$sql){
        return mysqli_query($conn,$sql);
    }

    protected static function count_Row($conn,$sql){
        $result = self::queryText($conn,$sql);
        $res = mysqli_num_rows($result);
        return $res;
    }

    protected static function convert_To_Array($conn,$sql){
        $data = self::queryText($conn,$sql);
        $res = mysqli_fetch_array($data);
        return $res;
    }
}
