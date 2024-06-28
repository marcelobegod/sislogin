<?php
$nome 			= $_POST["nome_func"];
$sexo			= $_POST["sexo_func"];
$sal		= $_POST["sal_func"];
$esco	= $_POST["escolaridade_func"];

$sql = "insert into funcionario values ";
$sql .= "('0','$nome','$sexo','$sal','$esco');";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));


if ($resultado) {
    // Verifica o nível do usuário e redireciona para a página apropriada
    switch ($nivel_necessario) {
        case 1:
            header('Location: /sislogin/base/sidebar1.php?page=lista_func&msg=1');
            break;
        case 2:
            header('Location: /sislogin/base/sidebar2.php?page=lista_func&msg=1');
            break;
        default:
            header('Location: /sislogin/base/sidebar3.php?page=lista_func&msg=1');
            break;
    }
} else {
    // Se a atualização falhar, redireciona para a página de erro apropriada
    switch ($nivel_necessario) {
        case 1:
            header('Location: /sislogin/base/sidebar1.php?page=lista_func&msg=6');
            break;
        case 2:
            header('Location: /sislogin/base/sidebar2.php?page=lista_func&msg=6');
            break;
        default:
            header('Location: /sislogin/base/sidebar3.php?page=lista_func&msg=6');
            break;
    }
}


?>