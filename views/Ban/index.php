<?php
require_once '../../controllers/banController.php';

$controller = new banController();

$action = $_GET['action'] ?? 'index';
$MaLoai = $_GET['MaLoai'] ?? null;

switch ($action) {
   
    case 'delete':
    if ($MaLoai) {
        $controller->deleteLoaiMon( $MaLoai);
    }
    break;
    case 'edit':
        if ($MaLoai) {
            $controller->edit($MaLoai);
        }
        break;
        case 'add':
            $controller->addLoaiMon();
            break;
    default:
        $controller->index();
        break;
}
?>
