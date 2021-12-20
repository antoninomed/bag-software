<?php

	require_once("conexao.php");
	
	/*
	
	$recebe = "DELETE FROM usuario WHERE id = '$id'";
	$sql_query = $mysqli->query($recebe) or die($mysql->error);

	if($sql_query)
		echo"<script>location.href='minha_conta.php?p=minha_conta.php';</script>";
	
	else
		echo "<script> alert('Não foi possivel deletar o usuário.'); 	
			location.href='minha_conta.php?p=minha_conta';
			 </script>";
	
?>*/

	
     
    //Deletar do bd
	
	$id = intval($_GET['usuario']);
	
	$consulta = "delete from cadastro where id = '$id'";
	$resultado = mysqli_query($conexao, $consulta);
		
	if($resultado){
		$_SESSION["id"]=12;
		header("location:usuarios.php");//DADOS ENVIADOS
		die();
	}
	else{
		$_SESSION["id"]=13;
		header("location:usuarios.php");//DADOS NÃO ENVIADOS
		die();	
	}
	


	?>