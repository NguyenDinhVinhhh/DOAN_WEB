<?php
require_once '../../controllers/khachhangController.php';

$controller = new khachhangController();
$action = $_GET['action'] ?? 'index';
$Makh = $_GET['MaKH'] ?? null;
switch ($action) {
    case 'add': 
        $controller->addKhachHang();
            break;
    case 'delete':
    if ($Makh!== null) {
        $controller->deleteKhachHang( $Makh);
    }
    case 'edit':
        if ($Makh !== null) {
            $controller->edit($Makh);
        }
        break;
    default:
        $controller->index();
}
?>

