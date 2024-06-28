<?php
$id = (int) @$_GET['id_disc'];
$con = mysqli_connect("localhost","root","","siscrud");
$sql = "delete from disciplina where id_disc = '$id';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error($con)); 
if ($resultado) { 
    echo "Disciplina excluída!<br><hr><br>";
    include "lista_disccopy.php";
}else{ 
    echo "Erro"; 
}
mysqli_close($con); 
?>
