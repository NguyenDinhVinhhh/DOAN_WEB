<?php
require_once '../../controllers/monanController.php';
$controllers =  new MonanController();
$action = $_GET['action'] ?? null;
$MaMA = $_GET['MaMA'] ?? null;
$ten = $_GET['Hinhanh'] ?? null;
session_start();
$kt=$_SESSION['loginadmin'];
if($kt==true){
switch ($action) {
    case 'add':
        $controllers->add();
        break;
    case 'delete':
        if ($MaMA != null)
            $controllers->delete($MaMA,$ten);
        break;
    case 'edit':
        if ($MaMA != null)
            $controllers->edit($MaMA);
        break;
    default:
        $controllers->index();
        break;
}
}

