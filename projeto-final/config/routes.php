<?php

//importando os controllers
use App\Controller\IndexController;
use App\Controller\CategoryController;
use App\Controller\ProductController;

function createRoute(string $controllerName, string $methodName) {
    return [
        'controller' => $controllerName,
        'method' => $methodName, 
    ];
}

//rotas=> caminho que uma URL acessa apos chamada do usuario
//executando a funcao createRoute criada logo acima
$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),
    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
    '/categorias' => createRoute(CategoryController::class, 'listAction'),
    '/categorias/nova' => createRoute(CategoryController::class, 'addAction'), 
];

return $routes;