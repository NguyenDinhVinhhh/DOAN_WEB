<?php
require_once '../../controllers/monanController.php';
$controllers =  new MonanController();
$action = $_GET['action'] ?? null;
$MaMA = $_GET['MaMA'] ?? null;
switch ($action) {
    case 'add':
        $controllers->add();
        break;
    case 'delete':
        if ($MaMA != null)
            $controllers->delete($MaMA);
        break;
    case 'edit':
        if ($MaMA != null)
            $controllers->edit($MaMA);
        break;
    default:
        $controllers->index();
        break;
}
