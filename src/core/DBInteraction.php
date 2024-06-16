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
        $database = new ConnectDB();
        $this->conn = $database->getConnection();
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
    public function isGet()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            return true;
        }
        return false;
    }
    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true;
        }
        return false;
    }
    public function insert($table, $data)
    {
        $keys = array_keys($data);
        $fields = implode(',', $keys);
        $placeholders = ':' . implode(', :', $keys);

        $sql = 'INSERT INTO ' . $table . ' (' . $fields . ') VALUES (' . $placeholders . ')';
        $insert = $this->query($sql, $data);

        return $insert;
    }

    //Lay 1 hàng dữ liệu
    function oneRaw($sql, $params=[])
    {
        $kq = $this->query($sql, $params, false);
        if (is_object($kq)) {
            // lấy một hàng dữ liệu từ kết quả của một truy vấn SQL
            $dataFetch = $kq->fetch(PDO::FETCH_ASSOC);
        }
        return isset($dataFetch) ? $dataFetch : 'ko thanh cong';
    }
    //Lay nhieu hang du lieu
    public function getRaw($sql,$params=[])
    {
        $dataFetch = [];
        $statement = $this->query($sql, $params, true);
        if ($statement && is_object($statement)) {
            $dataFetch = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $dataFetch;
    }
    

    public function redirect($path = 'index.php'){
        header("Location: $path");
        exit;
    }
}
