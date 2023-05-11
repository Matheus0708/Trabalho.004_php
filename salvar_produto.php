<?php
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
{
  header('location: telaLogin.php');
}
    include("database\database.php");
    
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $peso = $_POST['peso'];

    $sql = "SELECT * FROM produto WHERE nome='${nome}'";
    
    $resultado = $con->query($sql)->fetch_assoc();
    if($resultado) 
    {
        echo "Ja existe";
    }
    else
    {
        $sql = "INSERT INTO produto 
        (nome, preco, quantidade, peso)
        VALUES
        ( '{$nome}', {$preco}, {$quantidade}, {$peso} )";

        $con->query($sql); //executar o insert no banco
        $con->close(); //fechar conexão

        header("location: inicio.php");
    }


    
?>
<script>
    setTimeout(200000, window.location.reload)
</script>