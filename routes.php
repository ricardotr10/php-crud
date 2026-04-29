<?php
include("controllers/UserController.php");

$controller = new UserController();

$action = $_GET['action'] ?? 'index';

switch ($action) {

    case 'create':
        include("views/create.php");
        break;

    case 'store':
        $controller->store($_POST);
        header("Location: ?action=index");
        break;

    case 'edit':
        $user = $controller->find($_GET['id']);
        include("views/edit.php");
        break;

    case 'update':
        $controller->update($_GET['id'], $_POST);
        header("Location: ?action=index");
        break;

    case 'delete':
        $controller->delete($_GET['id']);
        header("Location: ?action=index");
        break;

    default:
        $users = $controller->index();
        include("views/index.php");
}