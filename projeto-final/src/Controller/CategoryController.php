<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbstractController
{
    //metodo para listar as categorias
    public function listAction(): void
   {
        //Abertura da conexão
        $con = Connection::getConnection();

        $query = 'SELECT * FROM tb_category;';

        //preparacao e execucao da query
        $result = $con->prepare($query);
        $result->execute();

        // renderizar arquivo category/list
        parent::render('category/list', $result);
   }

   //Metodo para criacao de uma nova categoria
   public function addAction(): void
   {
        if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];

            $query = "INSERT INTO tb_category (name, description) VALUES ('{$name}', '{$description}');";

            $con = Connection::getConnection();

            $result = $con->prepare($query);
            $result->execute();
        }
        parent::render('category/add');
   }
}