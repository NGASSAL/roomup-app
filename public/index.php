<?php
define('ROOT_PATH', dirname(__DIR__));

require_once ROOT_PATH . '/src/Core/Router.php';
require_once ROOT_PATH . '/src/Core/Controller.php';
require_once ROOT_PATH . '/src/Core/Database.php';
require_once ROOT_PATH . '/src/Controllers/HomeController.php';
require_once ROOT_PATH . '/src/Controllers/TenantController.php';
require_once ROOT_PATH . '/src/Models/TenantModel.php';

$router = new Core\Router();

$router->get('/',        [HomeController::class,   'index']);
$router->get('/tenants', [TenantController::class, 'index']);
$router->get('/health',  [HomeController::class,   'health']);

$router->dispatch($_SERVER['REQUEST_URI']);
