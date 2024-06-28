<div id="main">
    <?php
    $con = mysqli_connect("localhost","root","","siscrud");
	$sql = "SELECT * FROM disciplina;"; 
	$rs = mysqli_query($con, $sql);

    echo "<table border='1'>";
	while ($info = mysqli_fetch_array($rs)) { 
		echo "<tr>"; 
		echo "<td>".$info['id_disc']."</td>"; 
		echo "<td>".$info['nome_disc']."</td>";
		echo "<td>".$info['sigla_disc']."</td>";
		echo "<td>".$info['ch_disc']."</td>";
		echo "<td><a href='fedita_disccopy.php?id_disc=".$info['id_disc']."'>Editar</a></td>"; 
		echo "<td><a href='excluir_disccopy.php?id_disc=".$info['id_disc']."'>Excluir</a></td>"; 
		echo "</tr>";
	}
	echo "</table>";
    ?>
</div>