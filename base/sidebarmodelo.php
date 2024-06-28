<?php
    $nivel_necessario = 1;
    include "testa_nivel.php";
?>

<!doctype html>
<html lang="pt-br">
<head>
    <title>Alunos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body> 
    <div class="wrapper d-flex align-items-stretch">
        <div id="sidebar">
        <?php
        switch($_SESSION['UsuarioNivel']) {
                        case 1:
                            include("sidebar1.php");
                            break;
                        case 2:
                            include("sidebar2.php");
                            break;
                        case 3:
                            include("sidebar3.php");
                            break;   
                        default:
                            echo "Nível de usuário não reconhecido.";
                            break;
                    }            
        ?>
        </div>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2>VOCÊ ESTÁ NA ÁREA DO USUÁRIO 1</h2>
            <?php
            include "ch_pages.php";
            include "config.php";
            ?>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
