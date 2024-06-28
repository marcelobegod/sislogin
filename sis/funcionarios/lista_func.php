<?php
header('Content-Type: text/html; charset=utf-8');
?>

<div id="main" class="container-fluid">
    <div id="top" class="row">
        <div class="col-md-2">
            <h2>Funcionário</h2>
        </div>
        <div class="col-md-7">
            <div class="input-group h2">
                <input name="data[search]" class="form-control" id="search" type="text">
                <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="col-md-3">
            <a href="?page=fadd_func" class="btn btn-success">Novo Funcionário</a>
        </div>
    </div> <!-- /#top -->
    <hr/>
    <!-- DIV MSG -->
    <div id="msg"> <?php include "mensagens.php"; ?> </div>

    <!--top - Lista dos Campos-->
    <div id="list" class="row">
        <div class="table-responsive col-md-12">
            <?php
            $quantidade = 5;

            $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
            $inicio = ($quantidade * $pagina) - $quantidade;

            $data_all = mysqli_query($con, "select * from funcionario order by nome_func asc limit $inicio, $quantidade;") or die(mysqli_error($con));

            echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
            echo "<thead><tr>";
            echo "<td><strong>Id</strong></td>";
            echo "<td><strong>Nome</strong></td>";
            echo "<td><strong>Salário</strong></td>";
            echo "<td><strong>Sexo</strong></td>";
            echo "<td><strong>Escolaridade</strong></td>";
            echo "<td class='actions'><strong>Ações</strong></td>";
            echo "</tr></thead><tbody>";

            while($info = mysqli_fetch_array($data_all)) {
                echo "<tr>";
                echo "<td>".$info['id_func']."</td>";
                echo "<td>".$info['nome_func']."</td>";
                echo "<td>".$info['sal_func']."</td>";
                echo "<td>".$info['sexo_func']."</td>";
                echo "<td>".$info['escolaridade_func']."</td>";
                echo "<td><div class='btn-group btn-group-xs'>";
                echo "<a class='btn btn-info btn-xs' href=?page=view_func&id_func=".$info['id_func']."> Visualizar </a>";
                echo "<a class='btn btn-warning btn-xs' href=?page=fedita_func&id_func=".$info['id_func']."> Editar </a>";
                echo "<a href=?page=excluir_func&id_func=".$info['id_func']." class='btn btn-danger btn-xs'> Excluir </a></td>";
            }
            echo "</tr></tbody></table>";
            ?>
        </div>
    </div> <!-- /#list -->

    <!-- PAGINAÇÃO -->
    <div id="bottom" class="row">
        <div class="col-md-12">
            <?php
            $sqlTotal = "select id_func from funcionario;";
            $qrTotal = mysqli_query($con, $sqlTotal) or die (mysqli_error($con));
            $numTotal = mysqli_num_rows($qrTotal);
            $totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

            $exibir = 3;

            $anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
            $posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina + 1;

            echo "<ul class='pagination'>";
            echo "<li class='page-item'><a class='page-link' href='?page=lista_func&pagina=1'> Primeira</a></li>";
            echo "<li class='page-item'><a class='page-link' href=\"?page=lista_func&pagina=$anterior\"> Anterior</a></li>";
            echo "<li class='page-item'><a class='page-link' href='?page=lista_func&pagina=".$pagina."'><strong>".$pagina."</strong></a></li>";

            for($i = $pagina+1; $i < $pagina+$exibir; $i++) {
                if($i <= $totalpagina)
                    echo "<li class='page-item'><a class='page-link' href='?page=lista_func&pagina=".$i."'> ".$i." </a></li>";
            }

            echo "<li class='page-item'><a class='page-link' href=\"?page=lista_func&pagina=$posterior\"> Próxima</a></li>";
            echo "<li class='page-item'><a class='page-link' href=\"?page=lista_func&pagina=$totalpagina\"> Última</a></li></ul>";
            ?>
        </div>
    </div> <!-- /#bottom -->
</div>
