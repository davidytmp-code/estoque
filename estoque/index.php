<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Estoque</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" index.php="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categoria
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-categoria.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-categoria.php">Listar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-produto.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-produto.php">Listar</a></li>
          </ul>
        </li>


        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <?php
                  //include das páginas
                    switch (@$_REQUEST['page']){
                        //categoria
                        case 'cadastrar-categoria.php':
                            include('cadastrar-categoria.php');
                            break;
                        case 'listar-categoria.php':
                            include('listar-categoria.php');
                            break;
                        case 'editar-categoria.php':
                            include('editar-categoria.php');
                            break;
                        case 'salvar-categoria.php':
                            include('salvar-categoria.php');
                            break;


                        //produto
                        case 'cadastrar-produto.php':
                            include('cadastrar-produto.php');
                            break;
                        case 'listar-produto.php':
                            include('listar-produto.php');
                            break;
                        case 'editar-produto.php':
                            include('editar-produto.php');
                            break;
                        case 'salvar-produto.php':
                            include('salvar-produto.php');
                            break;


                        default:
                            print "<h1>Bem vindo ao controle de estoque</h1>";
                    }
                ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>