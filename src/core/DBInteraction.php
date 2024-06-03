<?php
require_once 'config/ConnectDB.php';
class DBInteraction
{

    private $conn;
    public function __construct()
    {
        $database = new ConnectDB();
        $this->conn = $database->getConnection();
    }

    public function query($sql, $data = [], $check = false)
    {
        $result = false;
        try {
            $statement = $this->conn->prepare($sql);
            if (!empty($data)) {
                $result = $statement->execute($data);
            } else {
                $result = $statement->execute();
            }
        } catch (Exception $exp) {
            echo $exp->getMessage() . '<br>';
            echo 'File: ' . $exp->getFile() . '<br>';
            echo 'Line: ' . $exp->getLine();
            die();
        }
        if ($check) {
            return $statement;
        }
        return $result;
    }

    public function insert($table, $data)
    {
        $key = array_keys($data);
        $value = implode(',', $key);
        $sql = 'INSERT INTO' . $table . '(' . $key . ') VALUES (' . $value . ')';
    }
    //Lay 1 hàng dữ liệu
    function oneRaw($sql)
    {
        $kq = $this -> query($sql, '', true);
        if (is_object($kq)) {
            // lấy một hàng dữ liệu từ kết quả của một truy vấn SQL
            $dataFetch = $kq->fetch(PDO::FETCH_ASSOC);
        }
        return $dataFetch; 
    }
    //Lay nhieu hang du lieu
    public function getRaw($sql)
    {
        $dataFetch = [];
        $statement = $this->query($sql, [], true);
        if ($statement && is_object($statement)) {
            $dataFetch = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $dataFetch;
    }
}
