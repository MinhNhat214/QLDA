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


}
