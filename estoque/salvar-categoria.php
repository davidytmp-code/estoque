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
            $sql = "UPDATE categoria SET nome_categoria= '".$_POST['nome_categoria']."'WHERE id_categoria=".$_POST["id_categoria"];
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-categoria.php';</script>";
            }else{
                print "<script>alert('Não foi possível editar!');</script>";
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