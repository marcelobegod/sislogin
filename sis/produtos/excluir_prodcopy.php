<?php
$id = (int) @$_GET['id_prod'];
$con = mysqli_connect("localhost","root","","siscrud");
$sql = "delete from produto where id_prod = '$id';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error($con)); 
if ($resultado) { 
    echo "Produto excluído!<br><hr><br>";
    include "lista_prodcopy.php";
}else{ 
    echo "Erro"; 
}
mysqli_close($con); 
?>
