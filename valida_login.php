<!doctype html>
<html>
<meta charset="utf-8">
<?php
require_once "conexao.php";

	
	$email = strtolower($_POST['email']);//retorna string em minúscula	
	$senha = md5($_POST['senha']);
	
//--------------CONEXÃO COM BANCO DE DADOS---------------------	

	$consulta = mysqli_query($conexao, "select *from cadastro where email='{$email}' and senha='{$senha}'");
	
	$num_linhas = mysqli_num_rows($consulta);
	if($num_linhas ==1)
	{
		$linha = mysqli_fetch_array($consulta);
		$_SESSION["logado"]=1;
		$_SESSION["usuario"] = $linha["email"];
		
		header("location:login.php");	
		die();
		
	}
	else
	{
		$_SESSION["nao_logado"]=0;
		
		header("location:login.php");
		die();
			
	}
	
		mysqli_close($conexao);
		?>
		