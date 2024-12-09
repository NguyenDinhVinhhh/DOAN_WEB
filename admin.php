<?php
require_once 'controllers/adminController.php';
$controllers = new adminController();
$action = $_GET['action'] ?? null;
$controllers->loginadmin();
