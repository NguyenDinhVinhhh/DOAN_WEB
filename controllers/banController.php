<?php
require_once __DIR__ . '/../models/ban.php';
class BanController
{
    public function index()
    {
        $banmodel = new ban();
        $banlist = $banmodel->getallBan();
        require_once __DIR__ . '../../views/Ban/Ban_view.php';
    }
    public function deleteBan($maban)
    {
        $banmodel = new ban();
        $banmodel->delete($maban);
        header("Location: ../Ban/index.php");
        exit();
    }
    public function addBan()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $vitri = $_POST['ViTri'];
            $mota = $_POST['MoTa'];
            $soluong=$_POST['Soluong'];
            $banmobel = new Ban();
            $banmobel->add($vitri, $mota,$soluong);
            header("Location: ../Ban/index.php");
            exit();
        }
        include '../Ban/add_Ban.php';
    }
    public function editBan($maban)
    {
        $ma = $maban;
        $banmobel = new  Ban();
        $banlist = $banmobel->getallBan();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $vitri = $_POST['ViTri'];
            $mota = $_POST['MoTa'];
            $Soluong=$_POST['Soluong'];
            $banmobel = new Ban();
            $banmobel->edit($maban, $vitri, $mota,$Soluong);
            header("Location: ../Ban/index.php");
            exit();
        }
        include '../Ban/edit_Ban.php';
    }
}
