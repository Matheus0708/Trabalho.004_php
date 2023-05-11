<?php 
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
{
  header('location: telaLogin.php');
}
include("layout/topo.php"); ?>

<form method="post" action="salvar_produto.php">
  <div class="form-group">
    <label>Nome do produto</label>
    <input type="text" name="nome" class="form-control" placeholder="Calça Jeans">
  </div>

  <div class="form-group">
    <label>Preço</label>
    <input type="text" name="preco" class="form-control" placeholder="50.89">
  </div>

  <div class="form-group">
    <label>Quantidade de estoque</label>
    <input type="text" name="quantidade" class="form-control" placeholder="10">
  </div>  

  <div class="form-group">
    <label>Peso em Kg</label>
    <input type="text" name="peso" class="form-control" placeholder="0.8">
  </div>  

  <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php include("layout/baixo.php"); ?>
