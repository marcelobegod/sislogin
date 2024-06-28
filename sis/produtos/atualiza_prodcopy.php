<?php
    $con = mysqli_connect("localhost", "root", "", "siscrud");
    
    $id        = $_POST["id_prod"];
    $nome             = $_POST["nome_prod"];
    $val          = $_POST["val_prod"];
    $qtde           = $_POST["qtde_prod"];
    $dtval           = $_POST["dt_val_prod"];

    $sql = "UPDATE produto SET ";
    $sql .= "nome_prod = '$nome', ";
    $sql .= "val_prod = '$val', ";
    $sql .= "qtde_prod = '$qtde', ";
    $sql .= "dt_val_prod = '$dtval' ";
    $sql .= "WHERE id_prod = '$id';";

    $resultado = mysqli_query($con, $sql);
    if ($resultado) { // Aqui se deu certo a exclusão.
        echo "Produto Atualizado!<br><hr><br>";
        include "lista_prodcopy.php";
    }else{ // Aqui deu errado a exclusão.
        echo "Erro"; 
    }
?>
