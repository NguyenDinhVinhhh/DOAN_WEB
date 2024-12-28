<?php
require_once __DIR__ . '/../models/khunggio.php';
class khunggioController
{
    public function index()
    {
        $banmodel = new khunggio();
        $banlist = $banmodel->getallBan();
        require_once __DIR__ . '../../views/khunggio/khunggio_view.php';
    }
    public function deleteBan($maban)
    {
        $banmodel = new khunggio();
        $banmodel->delete($maban);
        header("Location: ../khunggio/index.php");
        exit();
    }
    public function addBan()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tenkhunggio = $_POST['TenKhungGio'];
            $banmobel = new khunggio();
            $banmobel->add($tenkhunggio);
            header("Location: ../khunggio/index.php");
            exit();
        }
        include '../khunggio/add_khunggio.php';
    }
    public function editBan($maban)
    {
        $ma = $maban;
        $banmobel = new  khunggio();
        $banlist = $banmobel->getallBan();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tenkhunggio = $_POST['TenKhungGio'];
            $banmobel = new khunggio();
            $banmobel->edit($maban, $tenkhunggio);
            header("Location: ../khunggio/index.php");
            exit();
        }
        include '../Ban/edit_khunggio.php';
    }
}
