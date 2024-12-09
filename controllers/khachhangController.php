<?php
require_once __DIR__ . '/../models/khachhang.php';

class khachhangController
{
    public function index()
    {
        
        $khachhangModel = new khachhang();
        $khachhanglist = $khachhangModel->getAll();
         require_once __DIR__ . '../../views/KhachHang/KhachHang_view.php';
    }

    public function addKhachHang()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $hoten = $_POST['Hoten'] ?? '';
            $email = $_POST['Email'] ?? '';
            $sdt = $_POST['Sdt'] ?? '';
            $khachhangModel = new khachhang();
            $khachhangModel->add($email, $hoten, $sdt);
            header("Location: ../KhachHang/index.php");
            exit();
        }
        include '../KhachHang/add_KhachHang.php';
    }



    public function deleteKhachHang($Makh)
    {
        $khachhangModel = new khachhang();
        $khachhangModel->delete($Makh);
        header("Location: ../KhachHang/index.php");
        exit();
    }

    public function edit($Makh): void
    {
        $KHModel = new khachhang();
        $khachhangList = $KHModel->getAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['Email'];
            $hoten = $_POST['Hoten'];
            $sdt = $_POST['Sdt'];
            $KHModel->update($Makh, $email,$hoten,$sdt);

            header("Location: ../KhachHang/index.php");
            exit();
        }
        require_once '../KhachHang/edit_KhachHang.php';
    }
}
