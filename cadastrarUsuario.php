<?php
       session_start();
       if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
       {
         header('location: telaLogin.php');
       }
        include ('database/database.php');
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {            
            $nome = $_POST['nome'];
            $usuario = $_POST['usuario'];
            $email = $_POST['email'];
            $chave = $_POST['chave'];
            $senha = $_POST['senha'];
           
            $sql = "INSERT INTO usuario (nome,usuario,email,chave,senha) VALUES ('$nome', '$usuario', '$email', '$chave', '$senha')";
                       
            if (mysqli_query($con, $sql)) {
                echo "Usuário cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar usuário: " . mysqli_error($con);
            }
           
            mysqli_close($con);
            header('Location: telaLogin.php');
        }
           
?>