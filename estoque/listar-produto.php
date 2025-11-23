<h1>Listar Produto</h1>
<?php
include("config.php");

$sql = "SELECT * FROM produto";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){
    print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome da produto</th>";
        print "<th>Descrição do produto</th>";
        print "<th>Preço (R$)</th>";
        print "<th>Estoque atual</th>";
        print "<th>Categoria ID</th>";
        print "<th>Ações</th>";
        print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_produto."</td>";  
        print "<td>".$row->nome_produto."</td>";
        print "<td>".$row->descricao_produto."</td>";
        print "<td>".$row->preco."</td>";
        print "<td>".$row->estoque_atual."</td>";
        print "<td>".$row->id_categoria."</td>";


        print "<td>
                <button onclick=\"location.href='?page=editar-produto.php&id_produto=".$row->id_produto."';\" class='btn btn-primery'>Editar</button>        
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-produto.php&acao=excluir&id_produto=".$row->id_produto."';}else{false;}\" class='btn btn-danger'>Excluir</button>        
              </td>";
        print "</tr>";
    }
    print "</table>";
}else{
    print "Não encontrou resultados";
}
?>
