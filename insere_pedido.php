<?php
require_once("conexao.php");

session_start();//iniciando sessao

foreach($_POST as $chave=> $campos){
	$$chave = $campos;
	
	//VALIDAÇÃO DE CAMPOS EM BRANCO
	if(empty($$chave)){
		
		$_SESSION["id"]=1;
		
		header("location:produtos.php");//CAMPOS EM BRANCO
		die();
	}
}
	

//INSERIR NO BANCO DE DADOS

$consulta = "insert into pedido values('','{$banco}','{$confirmacaofinal}','{$agencia}', '{$conta}','{$estado}','{$email}');";

$resultado = mysqli_query($conexao, $consulta);

if($resultado){
	$_SESSION["id"]=2;
	header("location:produtos.php");//DADOS ENVIADOS
	die();
}
else{
	$_SESSION["id"]=3;
	header("location:produtos.php");//DADOS NÃO ENVIADOS
	die();		
}

mysqli_close($conexao);//FINALIZANDO A CONEXÃO
?>
</html>

