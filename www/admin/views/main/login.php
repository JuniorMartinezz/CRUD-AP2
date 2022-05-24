<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Exemplo Login</title>
    <!--Bootstrap e CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 p-5">
                <h1 class="text-center">Login no sistema</h1>
                <form class="form" action="?controller=user&action=validateLogin" method="post" name="formulario" id="formulario">
                    <div class="form-group"> 
                        <label for="login">Login</label> 
                        <input class="form-control" type="text" name="login" id="login" placeholder="Digite o usuário..."> 
                    </div>
                    <div class="form-group"> 
                        <label for="password">Senha</label> 
                        <input class="form-control" type="password" name="password" id="password" placeholder="Digite sua senha..."> 
                    </div> 
                    <input class="btn btn-primary mt-2" type="submit" name="enviar" value="Fazer login">
                </form>
            </div>
        </div>
    </div>
</body>

</html>