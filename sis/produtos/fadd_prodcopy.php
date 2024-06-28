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

<div> <?php include "mensagens.php"; ?> </div>
<div id="main" class="container-fluid">
	<h3 class="page-header">Cadastrar Usuário</h3>
	<form action="?page=insere_prod" method="post">
		
		<div id="linha01" class="row"> 
			<div class="form-group col-md-1">
				<label for="id">ID</label>
				<input type="text" disabled="disabled" value="0" class="form-control" name="id_prod">
			</div>
			
			<div class="form-group col-md-5">
				<label for="nome">Nome do Produto</label>
				<input type="text" class="form-control" name="nome_prod">
			</div>
			
			<div class="form-group col-md-3">
				<label for="usuario">Valor</label>
				<input type="text" class="form-control" name="valor_prod">
			</div>
			
			<div class="form-group col-md-3">
				<label for="senha">Quantidade</label>
				<input type="password" class="form-control" name="qtde_prod">
			</div>
			
		</div>
	
		<div id="linha02" class="row"> 
		
			<div class="form-group col-md-4">
				<label for="email">Validade</label>
				<input type="email" class="form-control" name="dt_val_prod">
			</div>

			<div class="form-group col-md-2">
				<label for="nivel">Nível</label>
				<select class="form-control" name="nivel" id="nivel">
					<option value="1" >Relatórios</option>
					<option value="2">Cadastros</option>
					<option value="3">Administrador</option>		
				</select>
			</div>
			
			<div class="form-group col-md-3">
				<label for="dt_cad">Data do cadastro</label>
				<input type="text" disabled="disabled" class="form-control" value="<?php echo date('d/m/Y'); ?>" name="dt_cad">
			</div>

			<div class="form-group col-md-2">
				<label for="ativo">Ativo</label><br>
				<label class="radio-inline">
					<input type="radio" name="optativo" checked disabled >Sim
				</label>
				<label class="radio-inline">
					<input type="radio" name="optativo" disabled>Não
				</label>
			</div>

		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_usu" class="btn btn-danger">Cancelar</a>
			</div>
		</div>

	</form> 
</div>