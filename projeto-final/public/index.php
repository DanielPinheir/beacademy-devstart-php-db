<?php

//será criado apenas um arquivo index.php que orquestrará os outos arquivos

ini_set('display_errors', 1);

//direcionando o caminho do autoload
include '../vendor/autoload.php';

use App\Controller\ErrorController;

// //chamada do elemento
// //namespace mais classe que eu quero pegar
// use App\Connection\Connection;

// $connection = Connection::getConnection();

// //criando a query
// $query = 'SELECT * FROM tb_category;';

// //Preparacao para execucao da query no banco de dados
// $preparacao = $connection->prepare($query); 
// $preparacao-> execute();

// while ($registro = $preparacao->fetch()) {
//     var_dump($registro);
// }

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

//importando as rotas
$routes = include '../config/routes.php';

//criado apenas pra utilizar o notFoundAction() uma unica vez
//saber se a página existe ou não
if (false === isset($routes[$url])) {
    (new ErrorController()) ->notFoundAction();
    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName =$routes[$url]['method'];

//Fazendo a chamada dos metodos controllerName e methodName
(new $controllerName()) ->$methodName();


