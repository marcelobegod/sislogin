<?php
	$id = (int) $_GET['id_prod'];
	$con = mysqli_connect("localhost", "root", "", "siscrud");
	$sql = "select * from produto where id_prod = $id;";
	$rs = mysqli_query($con, $sql);
	$info = mysqli_fetch_array($rs);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta salarset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
</head>
<body>
	<form action="atualiza_prodcopy.php" method="post">
		<h3> Editar Produto </h3><hr>
		ID: <input type="text" name="id_prod" readonly value="<?php echo $info['id_prod'] ?>"><br> 
		Nome: <input type="text" name="nome_prod" value="<?php echo $info['nome_prod'] ?>"><br> 
		Valor: <input type="text" name="val_prod" value="<?php echo $info['val_prod'] ?>"><br> 
		Quantidade: <input type="text" name="qtde_prod" value="<?php echo $info['qtde_prod'] ?>"><br> 
		Data de validade: <input type="text" name="dt_val_prod" value="<?php echo $info['dt_val_prod'] ?>"><br> 
		
		<input type="submit" value="salvar">
	</form>
</body>
</html>