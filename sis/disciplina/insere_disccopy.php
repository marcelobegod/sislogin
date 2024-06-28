<?php
    $con = mysqli_connect("localhost", "root", "", "siscrud");

    $id        = $_POST["id_disc"];
    $nome             = $_POST["nome_disc"];
    $sigla          = $_POST["sigla_disc"];
    $ch             = $_POST["ch_disc"];

    $sql = "insert into disciplina values ";
    $sql .= "('0','$nome','$sigla','$ch');";
   
    $resultado = mysqli_query($con, $sql);
    if ($resultado) { // Aqui se deu certo a exclusão.
        echo "Disciplina Cadastrada!<br><hr><br>";
        include "lista_disccopy.php";
    }else{ // Aqui deu errado a exclusão.
        echo "Erro"; 
    }
?>