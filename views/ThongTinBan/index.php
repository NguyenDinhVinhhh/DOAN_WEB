<?php
require_once '../../controllers/ThongTinDatBanController.php';
$controller = new ThongTinDatBanController();
$action = $_GET['action'] ?? null;
$Makh = $_GET['Makh'] ?? null;
$ttdb = $_POST['MaTTDB'] ?? null;
$makh = $_POST['Makh'] ?? null;
$duyet = $_POST['duyet'] ?? null;
$MaTTDB = $_GET['MaTTDB'] ?? null;
$NgayDat = $_GET['NgayDat'] ?? null;
$MaKhunggio = $_GET['MaKhunggio'] ?? null;
$mahoadon = $_GET['MaHD'] ?? null;
switch ($action) {
    case 'chitiethoadon':
        $controller->Chitiethoadon($Makh, $MaTTDB);
        break;
    case 'deletethongtindatban':
        $controller->deletethongtindatban($Makh, $MaTTDB);
        break;
    case 'Chonban':
        $controller->addbanan($MaKhunggio, $NgayDat, $MaTTDB);
        break;
    case 'xemban':
        $controller->xemban($MaTTDB);
        break;
    case 'inhoadon':
        $controller->inhoadon($MaTTDB);
        break;
}
switch ($duyet) {
    case 'DuyetTTDB':
        $controller->DuyetTTDB($ttdb);
        break;
}
if ($action == null && $duyet == null) {
    $controller->index();
}

