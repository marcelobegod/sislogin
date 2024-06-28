<?php
    $con = mysqli_connect("localhost", "root", "", "siscrud");

    $id        = $_POST["id_prod"];
    $nome             = $_POST["nome_prod"];
    $valor          = $_POST["val_prod"];
    $qtde             = $_POST["qtde_prod"];
    $dtval           = $_POST["dt_val_prod"];

    $sql = "insert into produto values ";
    $sql .= "('0','$nome','$valor','$qtde','$dtval');";
   
    $resultado = mysqli_query($con, $sql);
    if ($resultado) { // Aqui se deu certo a exclusão.
        echo "Produto Cadastrado!<br><hr><br>";
        include "lista_prodcopy.php";
    }else{ // Aqui deu errado a exclusão.
        echo "Erro"; 
    }
?>