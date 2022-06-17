<?php

declare(strict_types=1);

namespace App\Controller;

//abstract=>classe não vai poder ser instanciada
abstract class AbstractController
{   
    //dirname => pega a minha localização e volta uma pasta 
    //evita ter que digitar o endereco inteiro
    public function render(string $viewName, $data = \null): void
    {
        include dirname(__DIR__) . '/View/_partials/head.php';
        include dirname(__DIR__) . "/View/{$viewName}.php";
        include dirname(__DIR__) . '/View/_partials/footer.php';
    }

    public function renderMessage(string $message): void
    {
        include dirname(__DIR__) . '/View/_partials/head.php';
        include dirname(__DIR__) . '/View/_partials/message.php';
        include dirname(__DIR__) . '/View/_partials/footer.php';
    }
}

