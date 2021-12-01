<?php
include 'conexao.php';
$sql = "SELECT cd_epi, nm_epi, ca_epi, ds_epi, qt_fornecida, nm_funcionario FROM epi";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>Entrega de EPI's</title>
  </head>
  <body style="background-color: #295872;">
    <h2 style="text-align: center; color: white;">Lista de EPI's Entregues</h2>
    <div class="table-responsive">
    <table class="table table-hover table-dark " style="margin: 0 auto;width: 95%;">
    <tr>
      <td style="font-weight: bold;">CÓDIGO</td>
      <td style="font-weight: bold;">NOME DO EPI</td>
      <td style="font-weight: bold;">CA - CERTIFICADO DE APROVAÇÃO</td>
      <td style="font-weight: bold;">DESCRIÇÃO</td>
      <td style="font-weight: bold;">QUANTIDADE FORNECIDA</td>
      <td style="font-weight: bold;">FUNCIONÁRIO</td>
      <td style="font-weight: bold;">OPÇÕES</td>
    </tr>
<?php
while($linha = mysqli_fetch_array($resultado)) {
  
    echo "<tr>";
    echo "<td>$linha[cd_epi]</td>";
    echo "<td>$linha[nm_epi]</td>";
    echo "<td>$linha[ca_epi]</td>";
    echo "<td>$linha[ds_epi]</td>";
    echo "<td>$linha[qt_fornecida]</td>";
    echo "<td>$linha[nm_funcionario]</td>";
    echo "<td>";
    echo "<a href='teste.php?id=$linha[cd_epi]'>";
    echo "<img alt='editar' title='Editar' src='editar.png' width='35'>";
    echo "<a href='excluir.php?id=$linha[cd_epi]'>";
    echo "<img alt='Excluir' title='Excluir' src='lixeira.png' width='35'>";
    echo "</a>";
    echo"</td>";
    echo "</tr>";
}
?>
</table>
    </div>
    
<a class="btn btn-outline-light" href="teste.php" role="button" style="margin-left: 40px;margin-top: 15px;">Voltar ao Cadastro</a>

<div class="d-none d-lg-block" style="position: absolute; bottom: 0; text-align: center;">
     © 2021 Desenvolvido por Gabriel Borges. <br>
        gabriel.borges130@outlook.com. 
    </div>
</body>
</html>