<?php

declare(strict_types=1);

//declarando o caminho do arquivo para usar no index
namespace App\Controller;

//herança=> estendendo da classe pai
class IndexController extends AbstractController
{   
    public function indexAction(): void
    {
        // include dirname(__DIR__) . '/View/index/index.php';
        parent::render('index/index');
    }

    public function loginAction(): void
    {
        // include dirname(__DIR__) . '/View/index/login.php';
        parent::render('index/login');
    } 
}
