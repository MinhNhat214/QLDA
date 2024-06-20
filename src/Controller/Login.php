<?php
class Login extends Router
{
    public function Home()
    {
        // $_SESSION['guest_count'] = $_POST['guest_count'];
        if ($this->isPost()) {
            echo 'login'.$_POST['room_number'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            // echo $email . '<br>';
            // echo $password . '<br>';
            // exit();
            $customerModel = $this->Model('CustomerModel');
            $user = $customerModel->checkUser($email, $password);
            var_dump ($user);


            // exit();
            if ($user) {
                // Đăng nhập thành công, lưu thông tin người dùng vào session
                echo 'Dang nhap thanh cong';
                $_SESSION['customer_id'] = $user['customer_id'];
                $_SESSION['full_name'] = $user['full_name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['phone'] = $user['phone'];
                
                $_SESSION['login_status'] = 1;

                header('Location: Booking');
            } else {
                // Đăng nhập thất bại
                $_SESSION['login_status'] = 0;
                echo 'Đăng nhập thất bại';
                header('Location: Login');
            }
        } else {
            $login_status = 0; // Khi trang lần đầu được load mà không có POST request
        }
        $login_status = isset($_SESSION['login_status']) ? $_SESSION['login_status'] : 0;

        echo $this->View('layout_master', [
            'page' => 'Login',
            'login_status' => $login_status
        ]);
    }
}
