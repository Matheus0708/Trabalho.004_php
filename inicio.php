<?php
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
{
  header('location: telaLogin.php');
}
include("layout/topo.php");
include("database/database.php");

    $sql = "SELECT * FROM produto";

    $result = $con->query($sql);
    
?>
<h1>Cadastro de produtos</h1>

<a href="novo_produto.php" class="btn btn-primary">Novo produto</a>

<br>
<br>
<table class="table table-bordered table-dark">
    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Preço</td>
        <td>Quantidade</td>
        <td>Peso</td>
    </thead>
    <tbody>
        <?php            
            while($row = $result->fetch_assoc())
            {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['preco'] . "</td>
                        <td>" . $row['quantidade'] . "</td>
                        <td>" . $row['peso'] . "</td>
                        <td>
                            <a href='/trabalho04/alterar_produto.php?id=" . $row['id'] . "'> 
                                ✏️ 
                            </a>
                            
                            <a href='/trabalho04/excluir_produto.php?id=" . $row['id'] . "'>
                                🗑️
                            </a>
                        </td>
                     </tr>
                ";
            }        
        ?>
    </tbody>
</table>

<?php
    $con->close();
    include("layout/baixo.php");
?>
