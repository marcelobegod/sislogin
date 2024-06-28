<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <input name="busca" value="<?php echo isset($_GET['busca']) ? htmlspecialchars($_GET['busca']) : ''; ?>" placeholder="Digite os termos de pesquisa" type="text">
    <button type="submit">Pesquisar</button>
</form>

    <br>
        <table width="100%" border="1">
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Pai</th>
                <th>Mãe</th>
                <th>Data de Nascimento</th>
            </tr>
            <?php
                if (!isset($_GET['busca'])) {
            ?>
            
            <?php
            } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * 
                FROM aluno
                WHERE matricula LIKE '%$pesquisa%' 
                OR nome_aluno LIKE '%$pesquisa%'
                OR nome_pai LIKE '%$pesquisa%'
                OR nome_mae LIKE '%$pesquisa%'
                OR dt_nasc LIKE '%$pesquisa%'";

            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
            
            if ($sql_query->num_rows == 0) {
            ?>
        <tr>
            <td colspan="3">Nenhum resultado encontrado...</td>
        </tr>
        <?php
        } else {
            while($dados = $sql_query->fetch_assoc()) {
                ?>
                <tr>
                        <td><?php echo $dados['matricula']; ?></td>
                        <td><?php echo $dados['nome_aluno']; ?></td>
                        <td><?php echo $dados['nome_pai']; ?></td>
                        <td><?php echo $dados['nome_mae']; ?></td>
                        <td><?php echo $dados['dt_nasc']; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        <?php
        } ?>
    </table>

    
    
   


