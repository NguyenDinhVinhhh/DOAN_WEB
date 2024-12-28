<?php
require_once __DIR__ . '/../models/nhanvien.php';
class adminController
{
    function loginadmin()
    {
        $NVmodel = new nhanvien();
        $NVlist = $NVmodel->getAll();
        session_start();
        $srr='';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = htmlspecialchars($_POST['username']);
            $matkhau = $_POST['MK'];
            foreach ($NVlist as $NV) {
                if ($username === $NV['HotenNV'] && $matkhau === $NV['Matkhau']) {
                    $_SESSION['Hoten'] = $username;
                    $_SESSION['loginadmin'] = true ;
                    header("Location: views/admin.php");
                    exit();
                }
            }
            $srr= "Incorrect username or password!";
        }
        require_once 'loginadmin.php';
    }
    public function  LogOut()
    {
        session_start();
        $_SESSION['username'] = null;
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }
        session_destroy();
        header('Location: /DO_An_WEB%20(2)/admin.php?action=loginadmin');
        exit();
    }
    
}
