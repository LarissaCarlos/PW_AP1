<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- css e js -->
    <script src="assets/js/script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <header class="p-3 bg-dark text-white text-center">
        <h1>
             Página de PW
        </h1>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 p-4">
                <h2> Menu </h2>
                    <li class="nav-item">
                        <a  id="home" class="nav-link" href="?controller=site&action=home">Home</a>
                    </li>
                    <li class="nav-item">
                         <a  id="about" class="nav-link" href="?controller=site&action=about">Sobre</a>
                    </li>
                    <li class="nav-item">
                         <a id="product" class="nav-link" href="?controller=site&action=products">Produtos e Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a id="contact" class="nav-link" href="?controller=site&action=contact">Contato</a>
                    </li>
                  </ul>

                  <h4>Clientes</h4>
                    <li class="nav-item">
                        <a   class="nav-link" href="?controller=client&action=register">Cadastro</a>
                    </li>
                </ul>  
            </nav>
    
            <section class="col-md-9 p-4">