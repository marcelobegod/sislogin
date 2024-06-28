<div id="main" class="container-fluid">
	<div id="top" class="row"><hr>
		<div class="col-md-10">
			<h2>Funcionários</h2>
		</div>
	<div class="col-md-2">
			<!-- Chama o Formulário para adicionar funcionários -->
			<a href="?page=fadd_func" class="btn btn-primary pull-right h2">Novo Funcionário</a> 
	</div>
	<form action="?page=insere_func" method="post">
		<div class="row"> 
			<div class="form-group col-md-1">
				<label for="id_func">ID</label>
				<input type="text" class="form-control" name="id_func">
			</div>
			<div class="form-group col-md-6">
				<label for="nome_func">Nome do Funcionário</label>
				<input type="text" class="form-control" name="nome_func">
			</div>
			<div class="form-group col-md-2">
				<label for="sexo_func">Sexo</label>
				<select class="form-control" name="sexo_func">
					<option> --------- </option>
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
				</select>
			</div>
			<div class="form-group col-md-1">
				<label for="sal_func">Salário</label>
				<input type="number" class="form-control" name="sal_func">
			</div>
            <div class="form-group col-md-2">
    			<label for="escolaridade_func">Escolaridade</label>
    			<select class="form-control" name="escolaridade_func">
       				<option value="Ensino Fundamental">Ensino Fundamental</option>
        			<option value="Ensino Medio">Ensino Médio</option>
        			<option value="Ensino Superior">Ensino Superior</option>
   				 </select>
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_func" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>


