<?php 
require_once '../../controllers/khunggioController.php';
$controllers= new khunggioController();
$action=$_GET['action'] ?? null;
$maban=$_GET['MaBan'] ?? null;
session_start();
$kt=$_SESSION['loginadmin'];
if($kt==true){
switch($action)
{
    case 'add':
        $controllers->addBan();
        break;
     case 'delete':
        if($maban!=null)
         $controllers->deleteBan($maban);
         break;
     case 'edit':
        if($maban!=null)
        $controllers->editBan($maban);
         break;
    default:
    $controllers->index();
    break;
}
}
?>
