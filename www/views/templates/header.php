<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha página</title>
    
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!--CSS e JS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script"></script>
</head>

<body>
    <header class="p-5 bg-primary text-white text-center">
        <h1>Minha página</h1>
        <p>Conteudo da página</p>
    </header>

    <section class="row">
        <nav class="col-md-3 p-3">
            <h2>Menu</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a id="home" class="nav-link" href="?controller=site&action=home">Home</a>
                </li>
                <li class="nav-item">
                    <a id="about" class="nav-link" href="?controller=site&action=about">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=site&action=products">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=contact&action=listContacts">Contato</a>
                </li>
                <h2>Clientes</h2>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=client&action=insertClient">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=client&action=listClients">Listar Clientes</a>
                </li>
            </ul>
        </nav>

        <article class="col-md-9 p-3">