<?php 
require_once("conexao.php");

$id = intval($_GET['pedido']);

	$perfil = "DELETE FROM pedido WHERE id='$id'";
	$presta = mysqli_query($conexao,$perfil);

	if($presta){		
		
				
		$_SESSION['id'] = 9;
		
		header("Location:pedidos.php");
		die();	
		
		
	}

mysqli_close($conexao);

?>