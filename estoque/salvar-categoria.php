<?php
include("config.php");

   
   switch ($_REQUEST['acao']){
        case 'cadastrar':
            $sql = "INSERT INTO categoria (nome_categoria) VALUES ('".$_POST['nome_categoria']."')";
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-categoria.php';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar!');</script>";
                print "<script>location.href='?page=listar-categoria.php';</script>";

            }
            break;
            
        case 'editar':
            $id = $_POST["id_categoria"];
            $nome = $_POST["nome_categoria"];

            // Usando prepare para evitar erros de sintaxe e invasões
            $stmt = $conn->prepare("UPDATE categoria SET nome_categoria = ? WHERE id_categoria = ?");
            $stmt->bind_param("si", $nome, $id); // "si" significa String e Integer
            $res = $stmt->execute();

            if($res){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-categoria.php';</script>";
            } else {
                // Se der erro, mostra o erro exato do banco de dados para você debugar
                print "<script>alert('Erro: " . $conn->error . "');</script>";
                print "<script>location.href='?page=listar-categoria.php';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM categoria WHERE id_categoria=".$_REQUEST['id_categoria'];
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-categoria.php';</script>";
            }else{
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='?page=listar-categoria.php';</script>";

            }
            break;
    }