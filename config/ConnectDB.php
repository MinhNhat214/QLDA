<?php
class ConnectDB {
    private $host = "localhost";
    private $db_name = "hotel_management";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
    
}

//     try{
//         if(class_exists('PDO')){
//             $dsn = 'mysql:dbname=hotel_management;host=localhost';

//             $options = [
//                 PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
//                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//             ];
//             $conn = new PDO($dsn,'root','',$options);
//         }
//     }
//     catch(Exception $exception){
//         echo $exception->getMessage().'<br>';
//         die();
//     }
// 
