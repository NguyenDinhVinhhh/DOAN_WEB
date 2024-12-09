<?php
require_once '../../controllers/ThongTinDatBanController.php';
$controller = new ThongTinDatBanController();
$action = $_GET['action'] ?? null;
$Makh = $_GET['Makh'] ?? null;
$ttdb = $_POST['MaTTDB']?? null;
$makh = $_POST['Makh']?? null;
$duyet=$_POST['duyet']??null;
$soluong = $_POST['Soluongban']?? null;
$MaTTDB = $_GET['MaTTDB']?? null;
switch ($action) {
    case 'chitiethoadon':
        $controller->Chitiethoadon($Makh,$MaTTDB);
        break;
   
}
switch($duyet){
    case 'DuyetTTDB':
        $controller->DuyetTTDB($soluong, $ttdb);
        break;
}
if($action==null && $duyet==null)
{
    $controller->index();
}



