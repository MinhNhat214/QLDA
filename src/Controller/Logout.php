<?php
class Logout extends Router
{
    public function Home()
    {
        if ($this->isGet()) {
            // Xóa hết các biến session
            session_unset();

            // Hủy bỏ phiên làm việc
            session_destroy();

            // Nếu cần, chuyển hướng đến trang đăng nhập hoặc trang chủ
            header("Location: login.html");
            exit();
        }
    }
}
