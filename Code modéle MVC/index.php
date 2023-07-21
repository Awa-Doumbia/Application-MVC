<?php
require_once 'app/controllers/ArticleController.php';
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controllerName = $_GET['controller'];
    $actionName = $_GET['action'];

    require_once "app/controllers/$controllerName.php";

    $controller = new $controllerName();
    $controller->$actionName($_GET['category']);
} else { 
    $controller = new ArticleController();
    $controller->showByCategory(0);
}
?>
