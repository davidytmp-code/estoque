<h1>Editar Produto</h1>

<?php
include("config.php");

$sql = "SELECT * FROM produto WHERE id_produto=".$_REQUEST['id_produto'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar-produto.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_produto" value="<?php print $row->id_produto; ?>">

    <div class="mb-3">
        <label>Nome do Produto</label>
        <input type="text" name="nome_produto"
               value="<?php print $row->nome_produto; ?>"
               class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Descrição do Produto</label>
        <input type="text" name="descricao_produto"
               value="<?php print $row->descricao_produto; ?>"
               class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Preço</label>
        <input type="number" step="0.01" name="preco"
               value="<?php print $row->preco; ?>"
               class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Estoque Atual</label>
        <input type="number" name="estoque_atual"
               value="<?php print $row->estoque_atual; ?>"
               class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Categoria</label>
        <select name="id_categoria" class="form-control" required>
            <option value="">-- selecione --</option>
            <?php
                $sql_cat = "SELECT * FROM categoria ORDER BY nome_categoria";
                $res_cat = $conn->query($sql_cat);

                while($cat = $res_cat->fetch_object()){
                    $selected = ($cat->id_categoria == $row->id_categoria) ? "selected" : "";
                    echo "<option value='{$cat->id_categoria}' $selected>{$cat->nome_categoria}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar Alterações</button>
    </div>
</form>
