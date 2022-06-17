<h1>Editar Produto</h1>

<?php
    extract($data);
?>

<form action="" method="POST">

    <label for="name">Nome</label>
    <input value="<?php echo $product['name']; ?>" id="name" name="name" type="text" class="form-control mb-3">

    <label for="description">Descrição</label>
    <textarea id="description" name="description" class="form-control mb-3"><?php echo $product['description']; ?></textarea>

    <label for="value">Preço</label>
    <input id="value" name="value" value="<?php echo $product['value']; ?>" type="text" class="form-control mb-3">

    <label for="quantity">Quantidade</label>
    <input id="quantity" value="<?php echo $product['quantity']; ?>" name="quantity" type="text" class="form-control mb-3">

    <label for="photo">Foto</label>
    <input id="photo" name="photo" value="<?php echo $product['photo']; ?>" type="text" class="form-control mb-3">

    <button class="btn btn-primary">Atualizar</button>
</form>