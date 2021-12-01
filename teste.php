<?php
    include "conexao.php";

    if ($_GET){
        $sql = "SELECT cd_epi, nm_epi, ca_epi, ds_epi, qt_fornecida, nm_funcionario FROM epi WHERE cd_epi = " . $_GET['id'];
        $resultado = mysqli_query($conexao, $sql);
        $epi = mysqli_fetch_array($resultado);
    }
?>

<html>

    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Entrega de EPI</title>
    </head>

    <body style="background-color: #295872;">
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
          <a class="navbar-brand" href="#">EPIdaMY</a>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="teste.php">Cadastro <span class="sr-only">(Página atual)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lista.php">Lista de EPI's</a>
              </li>
           </ul>
         </div>
        </nav>

    </div>
    
    <div style="text-align: center;">
        <form style="border: none;background-color: #295872;" action="recebe.php" method="post" class="form-control">    
       
        <h2 style="text-align: center; margin: 20px;color: white;">Registro de Entrega de EPI</h2>

            <div style="background-color: rgb(56,121,156);border-radius: 15px;padding: 10px; width: 400px;margin: 0 auto;">

            <?php
                if ($_GET) {
                    echo "<label style='color: white;'>Código:</label><br>";
                    echo "<input type='text' readonly='readonly' value='$_GET[id]' name='id'><br><br>";
                }
            ?>

            <label for="exampleInputEmail1" style="text-align: center;color: white;">Nome do EPI:</label><br>
            <input type="text" value="<?php if(isset($epi['nm_epi'])) { echo $epi['nm_epi']; } ?>" name="nome" /><br><br>

            <label for="exampleInputEmail1" style="color: white">CA - Certificado de Aprovação:</label><br>
            <input type="text" value="<?php if(isset($epi['ca_epi'])) { echo $epi['ca_epi']; }  ?>" name="ca" /><br><br>

            <label for="exampleInputEmail1" style="color: white;">Descrição:</label><br>
            <input type="text" value="<?php if(isset($epi['ds_epi'])) { echo $epi['ds_epi']; } ?>" name="descricao" /><br><br>

            <label for="exampleInputEmail1" style="color: white;">Quantidade Fornecida:</label><br>
            <input type="text" value="<?php if(isset($epi['qt_fornecida'])) { echo $epi['qt_fornecida']; } ?>" name="qtd" /><br><br>

            <label for="exampleInputEmail1" style="color: white;">Funcionário Responsável:</label><br>
            <input type="text" value="<?php if(isset($epi['nm_funcionario'])) { echo $epi['nm_funcionario']; } ?>" name="funcionario" /><br><br>

            <input class="btn btn-primary" type="submit" value="Cadastrar">
            </div>         
        </form>
        <div class="d-none d-lg-block" style="position: absolute; bottom: 0;">
     © 2021 Desenvolvido por Gabriel Borges. <br>
        gabriel.borges130@outlook.com. 
    </div>
    </div>
    
    
    </body>

</html>