<?php
    $con = mysqli_connect("localhost", "root", "", "siscrud");
    
    $id        = $_POST["id_disc"];
    $nome             = $_POST["nome_disc"];
    $sigla          = $_POST["sigla_disc"];
    $ch             = $_POST["ch_disc"];

    $sql = "UPDATE disciplina SET ";
    $sql .= "nome_disc = '$nome', ";
    $sql .= "sigla_disc = '$sigla', ";
    $sql .= "ch_disc = '$ch' ";
    $sql .= "WHERE id_disc = '$id';";


   
    $resultado = mysqli_query($con, $sql);
    if ($resultado) { // Aqui se deu certo a exclusão.
        echo "Disciplina Atualizada!<br><hr><br>";
        include "lista_disccopy.php";
    }else{ // Aqui deu errado a exclusão.
        echo "Erro"; 
    }
?>
