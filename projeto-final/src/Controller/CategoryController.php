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

    //Metodo para remocao de uma categoria
    public function removeAction(): void
    {
       $con = Connection::getConnection();

       $query = "DELETE FROM tb_category WHERE id = {$_GET['id']};";

       $result = $con->prepare($query)->execute();

       echo "Categoria removida com sucesso!";
    }

    public function updateAction(): void
    {
        $id = $_GET['id'];

        $con = Connection::getConnection();

        if ($_POST) {
            $newName = $_POST['name'];
            $newDescription = $_POST['description'];

            $queryUpdate = "UPDATE tb_category SET name = '{$newName}', description = '{$newDescription}' WHERE id = {$id};";

            $result = $con->prepare($queryUpdate)->execute();

            echo "Categoria atualizada com sucesso!";
        }

        $query = "SELECT * FROM tb_category WHERE id = {$id};";

        $result = $con->prepare($query);
        $result->execute();

        $data = $result->fetch(\PDO::FETCH_ASSOC);

        parent::render('category/edit', $data);
    }
}