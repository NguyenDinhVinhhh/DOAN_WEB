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
                    header("Location: views/admin.php");
                    exit();
                }
            }
            $srr= "Incorrect username or password!";
        }
        require_once 'loginadmin.php';
    }
    
}
