<?php
	$id = (int) $_GET['id_disc'];
	$con = mysqli_connect("localhost", "root", "", "siscrud");
	$sql = "select * from disciplina where id_disc = $id;";
	$rs = mysqli_query($con, $sql);
	$info = mysqli_fetch_array($rs);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
</head>
<body>
	<form action="atualiza_disccopy.php" method="post">
		<h3> Editar Disciplina </h3><hr>
		ID: <input type="text" name="id_disc" readonly value="<?php echo $info['id_disc'] ?>"><br> 
		Nome: <input type="text" name="nome_disc" value="<?php echo $info['nome_disc'] ?>"><br> 
		Sigla: <input type="text" name="sigla_disc" value="<?php echo $info['sigla_disc'] ?>"><br> 
		Carga Horária: <input type="text" name="ch_disc" value="<?php echo $info['ch_disc'] ?>"><br> 
		
		<input type="submit" value="salvar">
	</form>
</body>
</html>