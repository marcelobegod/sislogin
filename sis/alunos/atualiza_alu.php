<?php
    header('Content-Type: text/html; charset=utf-8');

    
    $matricula		  = $_POST["matricula"];
    $nome             = $_POST["nome_aluno"];
    $dt_nasc          = $_POST["dt_nasc"];
    $sexo             = $_POST["sexo_aluno"];
    $nomepai          = $_POST["nome_pai"];
    $nomemae          = $_POST["nome_mae"];
    $rg           	  = $_POST["rg_aluno"];
    $cpf              = $_POST["cpf_aluno"];

    $fdg_dt_nasc = date('Y-m-d',strtotime($dt_nasc)); 

    $sql = "update aluno set ";
    $sql .= "nome_aluno='".$nome."', nome_pai='".$nomepai."', nome_mae='".$nomemae."',";
    $sql .= "dt_nasc='".$fdg_dt_nasc."', rg_aluno='".$rg."', cpf_aluno='".$cpf."', sexo_aluno='".$sexo."'";
    $sql .= "where matricula = '".$matricula."';";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

    if ($resultado) {
        // Verifica o nível do usuário e redireciona para a página apropriada
        switch ($nivel_necessario) {
            case 1:
                header('Location: /sislogin/base/sidebar1.php?page=lista_alu&msg=2');
                break;
            case 2:
                header('Location: /sislogin/base/sidebar2.php?page=lista_alu&msg=2');
                break;
            default:
                header('Location: /sislogin/base/sidebar3.php?page=lista_alu&msg=2');
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
