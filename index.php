<?php
require_once __DIR__ . '/controllers/MahasiswaController.php';

$controller = new MahasiswaController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        echo "Action not found.";
        break;
}
?>
