<?php
require_once __DIR__ . '/../models/nhanvien.php';

class nhanvienController
{
    public function index()
    {
        session_start();
        $nhanvien=$_SESSION['Hoten'];
        $nhanvienModel = new nhanvien();
        $nhanvienList = $nhanvienModel->getAll();
            if ( $nhanvien=='admin'){
                require_once __DIR__ . '../../views/NhanVien/NhanVien_view.php';
        }
        else{
        header("Location:  /DO_An_WEB%20(2)/views/admin.php");
        exit();
        }
    }

    public function addNhanVien()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            var_dump($_POST);
            $diachi = $_POST['Diachi'] ?? '';
            $hoten = $_POST['Hoten'] ?? '';
            $matkhau = $_POST['Matkhau'] ?? '';
            $ngaysinh = $_POST['Ngaysinh'] ?? '';
            $sdt = $_POST['Sdt'] ?? '';


            $nhanvienModel = new NhanVien();
            $nhanvienModel->add($diachi, $hoten, $matkhau, $ngaysinh, $sdt);

            // Chuyển hướng về trang chính sau khi thêm thành công
            header("Location: ../NhanVien/index.php");
            exit();
        }
        include '../NhanVien/add_NhanVien.php';
    }



    public function deleteNhanVien($MaNV)
    {
        $nhanvienModel = new nhanvien();
        $nhanvienModel->delete($MaNV);

        header("Location: ../NhanVien/index.php");
        exit();
    }

    public function edit($MaNV): void
    {
        $NVModel = new nhanvien();
        $nhanvienList = $NVModel->getAll();
        $nhanvienmodel = new nhanvien();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $diachi = $_POST['Diachi'];
            $hoten = $_POST['Hoten'];
            $matkhau = $_POST['Matkhau'];
            $ngaysinh = $_POST['Ngaysinh'];
            $sdt = $_POST['Sdt'];

            $nhanvienmodel->update($MaNV, $diachi, $hoten, $matkhau, $ngaysinh, $sdt);

            header("Location: ../NhanVien/index.php");
            exit();
        }
        require_once '../NhanVien/edit_NhanVien.php';
    }
}
