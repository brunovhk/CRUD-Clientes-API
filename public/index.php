<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\ClienteController;
use App\Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [ClienteController::class, 'home']);

$app->router->get('/cadastrar', 'cadastrar');

$app->router->post('/cadastrar', [ClienteController::class, 'createController']);

$app->router->post('/editar', [ClienteController::class, 'updateController']);

$app->router->post('/excluir', [ClienteController::class, 'deleteController']);

$app->router->post('/pesquisar', [ClienteController::class, 'searchController']);

$app->run();