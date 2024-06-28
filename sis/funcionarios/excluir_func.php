<?php
$idf = (int) @$_GET['id_func'];
 
$sql = "delete from funcionario where id_func = '$idf';"; 
$resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

if ($resultado) {
    // Verifica o nível do usuário e redireciona para a página apropriada
    switch ($nivel_necessario) {
        case 1:
            header('Location: /sislogin/base/sidebar1.php?page=lista_func&msg=3');
            break;
        case 2:
            header('Location: /sislogin/base/sidebar2.php?page=lista_func&msg=3');
            break;
        default:
            header('Location: /sislogin/base/sidebar3.php?page=lista_func&msg=3');
            break;
    }
} else {
    // Se a atualização falhar, redireciona para a página de erro apropriada
    switch ($nivel_necessario) {
        case 1:
            header('Location: /sislogin/base/sidebar1.php?page=lista_func&msg=4');
            break;
        case 2:
            header('Location: /sislogin/base/sidebar2.php?page=lista_func&msg=4');
            break;
        default:
            header('Location: /sislogin/base/sidebar3.php?page=lista_func&msg=4');
            break;
    }
}

mysqli_close($con);


?>