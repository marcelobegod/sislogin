﻿<?php

header('Content-Type: text/html; charset=utf-8');

$id = (int) $_GET['id'];

$sql = "UPDATE usuario SET ";
$sql .= "ativo='1' ";
$sql .= "WHERE id = '".$id."';";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if ($resultado) {
    // Verifica o nível do usuário e redireciona para a página apropriada
    switch ($nivel_necessario) {
        case 1:
            header('Location: /sislogin/base/sidebar1.php?page=lista_usu&msg=5');
            break;
        case 2:
            header('Location: /sislogin/base/sidebar2.php?page=lista_usu&msg=5');
            break;
        default:
            header('Location: /sislogin/base/sidebar3.php?page=lista_usu&msg=5');
            break;
    }
} else {
    // Se a atualização falhar, redireciona para a página de erro apropriada
    switch ($nivel_necessario) {
        case 1:
            header('Location: /sislogin/base/sidebar1.php?page=lista_usu&msg=6');
            break;
        case 2:
            header('Location: /sislogin/base/sidebar2.php?page=lista_usu&msg=6');
            break;
        default:
            header('Location: /sislogin/base/sidebar3.php?page=lista_usu&msg=6');
            break;
    }
}

mysqli_close($con);

?>

