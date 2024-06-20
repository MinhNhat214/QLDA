<?php
class Register extends Router
{
    public function Home()
    {
        if ($this->isPost()) {
            $dataInsert = [
                'full_name' => $_POST['full_name'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
                // 'created_at' => date('Y-m-d H:i:s')
            ];

            $customerModel = $this->Model('Customers');
            $insertStatus = $customerModel->insert('customers', $dataInsert);
        } else {
            $insertStatus = null; // Khi trang lần đầu được load mà không có POST request
        }

        echo $this->View('layout_master', [
            'page' => 'Register',
            'insertStatus' => $insertStatus
        ]);
    }
}
