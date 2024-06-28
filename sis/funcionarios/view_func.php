<?php
	$id = (int) $_GET['id_func'];
	$sql = mysqli_query($con, "select * from funcionario where id_func = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>	
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Aluno - <?php echo $id; ?> </h3>
	<div class="row">
		<div class="col-md-1">
			<p><strong>Id Funcionário</strong></p>
			<p><?php echo $row['id_func'];?></p>
		</div>
		<div class="col-md-6">
			<p><strong>Nome Completo</strong></p>
			<p><?php echo $row['nome_func'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Salário do Funcionário</strong></p>
			<p><?php echo $row['sal_func'];?></p>
		</div>
		<div class="col-md-1">
			<p><strong>Sexo</strong></p>
			<p><?php echo $row['sexo_func'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Escolaridade</strong></p>
			<p><?php echo $row['escolaridade_func'];?></p>
		</div>
	</div>
	<hr>	
	<div id="actions" class="row">
	<div class="col-md-12">
		<a href="?page=lista_func" class="btn btn-primary">Voltar</a>
			<?php echo "<a href=?page=fedita_func&id_func=".$row['id_func']." class='btn btn-success'>Editar</a>";?>
			<?php echo "<a href=?page=excluir_func&id_func=".$row['id_func']." class='btn btn-danger'>Excluir</a>";?>
	</div>
</div>