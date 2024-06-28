<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
</head>
<body>
	<form action="insere_prodcopy.php" method="post">
	<h3> Cadastro de Produto </h3><hr>
	ID: <input type="text" name="id_prod"><br> 
	Nome: <input type="text" name="nome_prod"><br> 
	Valor: <input type="text" name="val_prod"><br> 
	Quantidade: <input type="number" name="qtde_prod"><br> 
	Data de Validade: <input type="date" name="dt_val_prod">
	<input type="submit" value="salvar">
	</form>
</body>
</html>