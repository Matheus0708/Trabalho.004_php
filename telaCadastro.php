<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <h1>Tela de cadastro</h1>
    <form method="POST" action="cadastrarUsuario.php">
    <div class="col-md-4">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome"><br>
        <label class="form-label">Usuario</label>
        <input type="text" class="form-control" name="usuario"><br>
        <label class="form-label">E-mail</label>
        <input type="text" class="form-control" name="email"><br>
        <label class="form-label">Chave</label>
        <input type="text" class="form-control" name="chave"><br>
        <label class="form-label">Senha</label>
        <input type="password" class="form-control" name="senha"><br>              
        <button type="submit" class="btn btn-success" value="cadastrar">Cadastrar</button> 
        <a class='btn btn-secondary' href='telaLogin.php'>Tela de login</a>    
              
    </div>     
       
    </form>

</body>
</html>