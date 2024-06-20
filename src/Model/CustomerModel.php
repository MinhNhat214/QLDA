<?php
require_once "src/core/DBInteraction.php";
class CustomerModel extends DBInteraction
{
    public function getCustomer()
    {
        $getRaw = $this->getRaw('SELECT * FROM customers');
        if ($getRaw) {
            return $getRaw;
        } else {
            return [];
        }
    }
    public function insertCustomer($table, $data)
    {
        $key = array_keys($data);
        $truong = implode(',', $key);
        $valuetb = ':' . implode(',:', $key);

        $sql = 'INSERT INTO ' . $table . ' (' . $truong . ') VALUES (' . $valuetb . ')';
        $kq = $this->query($sql, $data);
        return $kq;
    }
    public function checkUser($email, $password)
    {
        // Không mã hóa mật khẩu
        $sql = 'SELECT * FROM customers WHERE email = :email AND password = :password';
        $params = [
            'email' => $email,
            'password' => $password // Không mã hóa mật khẩu
        ];

        $user = $this->oneRaw($sql, $params);
        return $user;
    }
    // public function checkUser() {
    //     if (!isset($_SESSION['customer_id'])) {
    //         echo 'No customer ID in session';
    //         return false;
    //     }

    //     $params = ['customer_id' => $_SESSION['customer_id']];
    //     $sql = 'SELECT * FROM customers WHERE customer_id = :customer_id';

    //     echo '<pre>';
    //     echo 'SQL: ' . $sql . "\n";
    //     echo 'Params: ' . print_r($params, true) . "\n";
    //     echo '</pre>';

    //     $oneRaw = $this->oneRaw($sql, $params);

    //     echo '<pre>';
    //     print_r($oneRaw);
    //     echo '</pre>';

    //     return $oneRaw;
    // }



    // public function infCusOnId($params=[]) {
    //     // $params = ['customer_id' => $_SESSION['customer_id']];
    //     $sql = 'SELECT * FROM customers WHERE customer_id = ' .$_SESSION['customer_id'];

    //     // echo '<pre>';
    //     // echo 'SQL: ' . $sql . "\n";
    //     // echo 'Params: ' . print_r($params, true) . "\n";
    //     // echo '</pre>';

    //     $oneRaw = $this->oneRaw($sql, $params);

    //     // echo '<pre>';
    //     // print_r($oneRaw);
    //     // echo '</pre>';
    //     // exit();

    //     if ($oneRaw) {
    //         return $oneRaw;
    //     } else {
    //         return 'false';
    //     }
    // }

}
