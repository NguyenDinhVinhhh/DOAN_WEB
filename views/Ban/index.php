<?php 
require_once '../../controllers/BanController.php';
$controllers= new banController();
$action=$_GET['action'] ?? null;
$maban=$_GET['MaBan'] ?? null;
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

?>
