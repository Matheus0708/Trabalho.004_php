<?php
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
{
  header('location: telaLogin.php');
}
   session_start();
   $_SESSION['dominio'] = 'www.trabalho4.com.br';
   $_SESSION['usuario'] = $dados['usuario'];
   $_SESSION['nome'] = $dados['nome']; 
   var_dump($_SESSION['dominio']);
   var_dump($_SESSION['usuario']);
   var_dump($_SESSION['nome']);


?>