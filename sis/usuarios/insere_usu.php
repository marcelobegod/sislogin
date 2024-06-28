<?php
$nome 			= $_POST["nome"];
$usuario		= $_POST["usuario"];
$senha			= $_POST["senha"];
$email			= $_POST["email"];
$nivel			= $_POST["nivel"];

$sql = "insert into usuario values ";
$sql .= "('0','$nome','$usuario', '".sha1($senha)."','$email','$nivel','1', '".date('Y-m-d')."');";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if ($resultado) {
    // Verifica o nível do usuário e redireciona para a página apropriada
    switch ($nivel_necessario) {
        case 1:
            header('Location: /sislogin/base/sidebar1.php?page=lista_usu&msg=1');
            break;
        case 2:
            header('Location: /sislogin/base/sidebar2.php?page=lista_usu&msg=1');
            break;
        default:
            header('Location: /sislogin/base/sidebar3.php?page=lista_usu&msg=1');
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