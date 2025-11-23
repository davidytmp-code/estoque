<?php
include("config.php");

switch ($_REQUEST['acao']) {

    case 'cadastrar':
        $sql = "INSERT INTO produto (
                nome_produto,
                descricao_produto,
                preco,
                estoque_atual,
                id_categoria
            ) VALUES (
                '".$_POST['nome_produto']."',
                '".$_POST['descricao_produto']."',
                '".$_POST['preco']."',
                '".$_POST['estoque_atual']."',
                '".$_POST['id_categoria']."'
        )";


        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-produto.php';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar! Erro: ".$conn->error."');</script>";
            print "<script>location.href='?page=listar-produto.php';</script>";
        }
        break;



    case 'editar':
        $sql = "UPDATE produto SET
                    nome_produto='".$_POST['nome_produto']."',
                    descricao_produto='".$_POST['descricao_produto']."',
                    preco='".$_POST['preco']."',
                    estoque_atual='".$_POST['estoque_atual']."'
                    id_categoria='".$_POST['id_categoria']."'

                WHERE id_produto=".$_POST["id_produto"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar-produto.php';</script>";
        } else {
            print "<script>alert('Não foi possível editar!');</script>";
            print "<script>location.href='?page=listar-produto.php';</script>";
        }
        break;



    case 'excluir':

        $id = $_REQUEST['id_produto'];

        $sql_vendas = "DELETE FROM venda WHERE produto_id_produto = $id";
        $conn->query($sql_vendas);

        $sql_func = "DELETE FROM produto WHERE id_produto = $id";
        $res_func = $conn->query($sql_func);

        if ($res_func == true) {
            print "<script>alert('Excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-produto.php';</script>";
        } else {
            print "<script>alert('Não foi possível excluir!');</script>";
            print "<script>location.href='?page=listar-produto.php';</script>";
        }
        break;
}
?>
