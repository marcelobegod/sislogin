<?php
	// include "base\config.php";
	$id = (int) $_GET['id_func'];
	$sql = mysqli_query($con, "select * from funcionario where id_func = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Funcionário - <?php echo $id;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_func&id_func=<?php echo $row['id_func']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-1">
			<label for="id_func">ID</label>
			<input type="text" class="form-control" name="id_func" value="<?php echo $row["id_func"]; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="nome_func">Nome Completo</label>
			<input type="text" class="form-control" name="nome_func" value="<?php echo $row["nome_func"]; ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="sal_func">Salário</label>
			<input type="text" class="form-control" name="sal_func" value="<?php echo $row["sal_func"]; ?>">
		</div>
		<div class="form-group col-md-1">
			<label for="sexo_func">Sexo</label>
			<select class="form-control" name="sexo_func">
				<?php 
				if($row["sexo_aluno"]=="M") 
					echo '<option selected="selected" value="M">Masculino</option><option value="F">Feminino</option>'; 
				else 
					echo '<option value="M">Masculino</option><option selected="selected" value="F">Feminino</option>'; 
				?>
			</select>
		</div>
		<div class="form-group col-md-2">
    		<label for="escolaridade_func">Escolaridade</label>
    		<select class="form-control" name="escolaridade_func">
       			<option value="Ensino Fundamental" <?php if ($row["escolaridade_func"] == 'ensino_fundamental') echo 'selected'; ?>>Ensino Fundamental</option>
        		<option value="Ensino Médio" <?php if ($row["escolaridade_func"] == 'ensino_medio') echo 'selected'; ?>>Ensino Médio</option>
       			<option value="Ensino Superior" <?php if ($row["escolaridade_func"] == 'ensino_superior') echo 'selected'; ?>>Ensino Superior</option>
    		</select>
		</div>
	</div>
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_func" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>