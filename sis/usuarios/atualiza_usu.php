<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$nivel = $_POST["nivel"];

$sql = "UPDATE usuario SET ";
$sql .= "nome='".$nome."', usuario='".$usuario."', email='".$email."', nivel='".$nivel."', dt_cadastro=now() ";
$sql .= "WHERE id = '".$id."';";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if ($resultado) {
    // Verifica o nível do usuário e redireciona para a página apropriada
    switch ($nivel_necessario) {
        case 1:
            header('Location: /sislogin/base/sidebar1.php?page=lista_usu&msg=2');
            break;
        case 2:
            header('Location: /sislogin/base/sidebar2.php?page=lista_usu&msg=2');
            break;
        default:
            header('Location: /sislogin/base/sidebar3.php?page=lista_usu&msg=2');
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

