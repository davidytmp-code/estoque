<h1>Editar Categoria</h1>
<?php
include("config.php");


    $sql ="SELECT * FROM categoria WHERE id_categoria=".$_REQUEST['id_categoria'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-categoria.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome da categoria</label>
        <input type="text" name="nome_categoria" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
</form>