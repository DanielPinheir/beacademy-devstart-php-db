<h1>Editar Categoria</h1>

<form action="" method="POST">
    <label for="name">Nome</label>
    <input value="<?php echo $data['name'] ?>" id="name" name="name" type="text" class="form-control mb-3">

    <label for="name">Descrição</label>
    <textarea id="description" name="description" class="form-control mb-3"><?php echo $data['description'] ?></textarea>

    <button class="btn btn-primary">Atualizar</button>
</form>