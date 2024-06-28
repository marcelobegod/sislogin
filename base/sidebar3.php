<?php
    $nivel_necessario = 3;
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
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="?page=lista_alu"><span class="fas fa-graduation-cap mr-3"></span> Alunos</a>
                    </li>
                    <li>
                        <a href="?page=lista_usu"><span class="fas fa-list mr-3"></span> Usuários</a>
                    </li>
                    <li>
                        <a href="?page=lista_func"><span class="fas fa-briefcase mr-3"></span> Funcionários</a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="fas fa-briefcase mr-3"></span>  Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2>VOCÊ ESTÁ NA ÁREA DO USUÁRIO 3</h2>
            <?php
                include "config.php";
                include "ch_pages.php";
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