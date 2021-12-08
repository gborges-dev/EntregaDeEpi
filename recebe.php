<?php

include 'conexao.php';

$nome = $_POST['nome'];
$ca = $_POST['ca'];
$descricao = $_POST['descricao'];
$qtd = $_POST['qtd'];
$funcionario = $_POST['funcionario'];


if ($_POST['id']) {
  $sql = "UPDATE epi SET nm_epi='$nome', ca_epi='$ca',
  ds_epi='$descricao', qt_fornecida='$qtd', nm_funcionario='$funcionario' WHERE cd_epi = " . $_POST['id'];
  } else {
  $sql = "INSERT INTO
  epi (nm_epi, ca_epi, ds_epi, qt_fornecida, nm_funcionario)
  VALUES ('$nome', '$ca', '$descricao', '$qtd', '$funcionario') ";
  }

mysqli_query($conexao, $sql);

header("location: lista.php");
?>
