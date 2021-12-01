<?php
include 'conexao.php';

$sql = "DELETE FROM epi WHERE cd_epi = " . $_GET['id'];

mysqli_query($conexao, $sql);

header("location: lista.php");

?>