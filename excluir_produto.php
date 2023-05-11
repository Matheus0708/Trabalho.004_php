<?php
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
{
  header('location: telaLogin.php');
}
    $id = $_GET['id'];

    $sql = "
DELETE FROM produto
WHERE id={$id}
";

    include("database/database.php");
    $con->query($sql);

    header("location: inicio.php");
?>