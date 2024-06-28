<?php
    header('Content-Type: text/html; charset=utf-8');
    $nome             = $_POST["nome_aluno"];
    $dt_nasc          = $_POST["dt_nasc"];
    $sexo             = $_POST["sexo_aluno"];
    $nomepai          = $_POST["nome_pai"];
    $nomemae          = $_POST["nome_mae"];
    $rg           	  = $_POST["rg_aluno"];
    $cpf              = $_POST["cpf_aluno"];

    $fdt_nasc 	= implode("-", array_reverse(explode("/", $dt_nasc)));

    $sql = "insert into aluno values ";
    $sql .= "('0','$nome','$nomepai','$nomemae','$fdt_nasc','$sexo','$rg','$cpf');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error($con));


    if ($resultado) {
        // Verifica o nível do usuário e redireciona para a página apropriada
        switch ($nivel_necessario) {
            case 1:
                header('Location: /sislogin/base/sidebar1.php?page=lista_alu&msg=1');
                break;
            case 2:
                header('Location: /sislogin/base/sidebar2.php?page=lista_alu&msg=1');
                break;
            default:
                header('Location: /sislogin/base/sidebar3.php?page=lista_alu&msg=1');
                break;
        }
    } else {
        // Se a atualização falhar, redireciona para a página de erro apropriada
        switch ($nivel_necessario) {
            case 1:
                header('Location: /sislogin/base/sidebar1.php?page=lista_alu&msg=4');
                break;
            case 2:
                header('Location: /sislogin/base/sidebar2.php?page=lista_alu&msg=4');
                break;
            default:
                header('Location: /sislogin/base/sidebar3.php?page=lista_alu&msg=4');
                break;
        }
    }
    
    mysqli_close($con);
    
?>