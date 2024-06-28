<?php
header('Content-Type: text/html; charset=utf-8');
?>
<div id="main" class="container-fluid">
    <div id="top" class="row">
        <div class="col-md-2">
            <h2>Usuário</h2>
        </div>
        <div class="col-md-7">
            <div class="input-group h2">
                <input name="data[search]" class="form-control" id="search" type="text" placeholder="Digite sua pesquisa aqui...">
                <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="col-md-3">
            <a href="?page=fadd_usu" class="btn btn-success">Novo Usuário</a> 
        </div>
    </div> <!-- /#top -->
    <hr>
    <!-- DIV MSG -->
    <div id="msg"><?php include "mensagens.php"; ?></div>
    <!--top - Lista dos Campos-->
    <div id="bloco-list-pag">   
        <div id="list" class="row">
            <div class="table-responsive col-md-12">
                <?php
                $quantidade = 5;

                $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                $inicio = ($quantidade * $pagina) - $quantidade;

                $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                $inicio = ($quantidade * $pagina) - $quantidade;

                $data_all = mysqli_query($con, "select * from usuario order by id asc limit $inicio, $quantidade;") or die(mysqli_error($con));

                echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
                echo "<thead><tr>";
                echo "<td><strong>ID</strong></td>"; 
                echo "<td><strong>Nome do usuário</strong></td>"; 
                echo "<td><strong>Usuário</strong></td>";
                echo "<td><strong>Senha</strong></td>";
                echo "<td><strong>E-mail</strong></td>";
                echo "<td><strong>Nível</strong></td>";
                echo "<td><strong>Ativo</strong></td>";
                echo "<td><strong>Data cad/ed</strong></td>";
                echo "<td class='actions'><strong>Ações</strong></td>"; 
                echo "</tr></thead><tbody>";

                while($info = mysqli_fetch_array($data_all)){ 
                    echo "<tr>";
                    echo "<td>".$info['id']."</td>";
                    echo "<td>".$info['nome']."</td>";
                    echo "<td>".$info['usuario']."</td>";
                    echo "<td>".$info['senha']."</td>";
                    echo "<td>".$info['email']." </td>";
                    echo "<td>".$info['nivel']."</td>";
                    if($info['ativo'] == 1){
                        echo "<td>SIM</td>";
                    }else if($info['ativo'] == 0){
                        echo "<td>NÃO</td>";
                    }
                    echo "<td>".date('d/m/Y',strtotime($info['dt_cadastro']))."</td>";
                    echo "<td><div class='btn-group btn-group-xs'>";
                    echo "<a class='btn btn-info btn-xs' href=?page=view_usu&id=".$info['id']."> Detalhar </a>";
                    echo "<a class='btn btn-warning btn-xs' href=?page=fedita_usu&id=".$info['id']."> Editar </a>";
                    if($info['ativo'] == 1){
                        echo "<a class='btn btn-danger btn-xs'  href=?page=block_usu&id=".$info['id']."> Bloquear </a>";
                    }else if($info['ativo'] == 0){
                        echo "<a class='btn btn-success btn-xs'  href=?page=ativa_usu&id=".$info['id'].">&nbsp;&nbsp;&nbsp;Ativar&nbsp;&nbsp;</a></div></td>";
                    }
                }
                echo "</tr></tbody></table>";
                ?>              
            </div><!-- Div Table -->
        </div><!--list-->
        <!-- PAGINAÇÃO -->
        <div id="bottom" class="row">
            <div class="col-md-12">
                <?php
                $sqlTotal    = "select id from usuario;";
                $qrTotal     = mysqli_query($con, $sqlTotal) or die (mysqli_error($con));
                $numTotal    = mysqli_num_rows($qrTotal);
                $totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

                $exibir = 3;

                $anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
                $posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

                echo "<ul class='pagination'>";
                echo "<li class='page-item'><a class='page-link' href='?page=lista_usu&pagina=1'> Primeira</a></li> "; 
                echo "<li class='page-item'><a class='page-link' href=\"?page=lista_usu&pagina=$anterior\"> Anterior</a></li> ";

                echo "<li class='page-item'><a class='page-link' href='?page=lista_usu&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

                for($i = $pagina+1; $i < $pagina+$exibir; $i++){
                    if($i <= $totalpagina)
                    echo "<li class='page-item'><a class='page-link' href='?page=lista_usu&pagina=".$i."'> ".$i." </a></li> ";
                }

                echo "<li class='page-item'><a class='page-link' href=\"?page=lista_usu&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
                echo "<li class='page-item'><a class='page-link' href=\"?page=lista_usu&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";
                ?>  
            </div>
        </div><!--bottom-->
    </div>
</div><!--main-->
