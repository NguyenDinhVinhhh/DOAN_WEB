<?php
require_once '../../controllers/nhanvienController.php';

$controller = new nhanvienController();

$action = $_GET['action'] ?? 'index';
$MaNV = $_GET['MaNV'] ?? null;
switch ($action) {
    case 'add': 
        $controller->addNhanVien();
            break;
    case 'delete':
    if ($MaNV !== null) {
        
        $controller->deleteNhanVien( $MaNV);
    }
    case 'edit':
        if ($MaNV !== null) {
            $controller->edit($MaNV);
        }
        break;
    default:
        $controller->index();
}
?>

