<?php
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
{
  header('location: telaLogin.php');
}
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $peso = $_POST['peso'];
    $preco = $_POST['preco'];

    $sql = "
UPDATE produto
    SET nome='{$nome}',
        quantidade = {$quantidade},
        preco = {$preco},
        peso = {$peso}
WHERE id={$id}
    ";
    
    include("database/database.php");
    $con->query($sql);

    header("location: inicio.php");
?>