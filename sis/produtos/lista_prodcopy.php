<?php
$con = mysqli_connect("localhost","root","","siscrud");
$sql = "SELECT * FROM produto;"; 
$rs = mysqli_query($con, $sql);

echo "<table border='1'>";
while ($info = mysqli_fetch_array($rs)) { 
	echo "<tr>"; 
	echo "<td>".$info['id_prod']."</td>"; 
	echo "<td>".$info['nome_prod']."</td>";
	echo "<td>".$info['val_prod']."</td>";
	echo "<td>".$info['qtde_prod']."</td>";
	echo "<td>".date('d/m/Y',strtotime($info['dt_val_prod']))."</td>";
	echo "<td><a href='fedita_prodcopy.php?id_prod=".$info['id_prod']."'>Editar</a></td>"; 
	echo "<td><a href='excluir_prodcopy.php?id_prod=".$info['id_prod']."'>Excluir</a></td>"; 
	echo "</tr>";
}
echo "</table>";
?>
