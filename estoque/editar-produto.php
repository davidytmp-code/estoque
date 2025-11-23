<h1>Editar Produto</h1>
<?php
include("config.php");


    $sql ="SELECT * FROM produto WHERE id_produto=".$_REQUEST['id_produto'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-produto.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Produto</label>
        <input type="text" name="nome_produto" class="form-control">
    </div>

<form action="?page=salvar-produto.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Descrição do Produto</label>
        <input type="text" name="descricao_produto" class="form-control">
    </div>

<form action="?page=salvar-produto.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Preço</label>
        <input type="number step="0.01"" name="preco" class="form-control">
    </div>

<form action="?page=salvar-produto.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Estoque atual</label>
        <input type="number" name="estoque_atual" class="form-control">
    </div>

<form action="?page=salvar-produto.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Categoria</label>
 <select name="id_categoria" class="form-control" required>
            <option value="">-- selecione --</option>
            <?php
                include("config.php");
                $sql = "SELECT * FROM categoria ORDER BY nome_categoria";
                $res = $conn->query($sql);

                while($cat = $res->fetch_object()){
                    echo "<option value='{$cat->id_categoria}'>{$cat->nome_categoria}</option>";
                }
            ?>
        </select>    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
</form>
