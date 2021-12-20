<?php

require_once("conexao.php");

session_start(); //Iniciando sessão


foreach($_POST as $chave=> $campos){
	$$chave = $campos;
	
	//VALIDAÇÃO DE CAMPOS EM BRANCO
	
	if(empty($$chave)){
		$_SESSION["id"]=1;
		
		header("location:formulario.php"); //CAMPOS EM BRANCO
		
		
		die();
		
		}

    //CODIFICSÇÃO DE TEXTO
	if($chave=="cpf"){
		
		$$chave = utf8_decode($$chave);
		
		if($chave=="nome"){
		
		$$chave = utf8_decode($$chave);

		}
		
	}

	//VERIFICAÇÃO DE CAMPOS
	if($chave== "nascimento"){
		$data = explode ("/",$$chave);
		$result = checkdate($data[1],$data[0],$data[2]);
		if(!$result){
		$_SESSION["id"]=6;
		header("location:formulario.php"); //data invalida
		die();
		}
		
	}
		
		
		//Retirar aspas simples e aspas duplas
	if ($chave=="email"){
	$result = filter_var($$chave,FILTER_VALIDATE_EMAIL);
	if(!$result){
	$_SESSION["id"]=7;
	header("location:formulario.php");
	}
	}
	 	
}


if(empty($nome) || empty($cpf) || empty($sexo) || empty ($senha)){
	
	$_SESSION["id"] = 1;
	
	header("location:formulario.php");//CAMPOS EM BRANCOS
	die();
}


//INSERIR NO BANCO DE DADOS

$consulta = "insert into cadastro values('{$nome}','{$dtnascimento}','{$cpf}','{$sexo}','{$email}',md5('{$senha}')";

$resultado = mysqli_query($conexao,$consulta);


if($resultado){
	$_SESSION["id"] = 3;	
	
$nome = $_POST['nome'];
$_SESSION['nome'] = $nome;
	
header("location:login.php");//DADOS ENVIADOS
die();
	
}
else{	
	$_SESSION ["id"] = 22;
	header("location:formulario.php"); //DADOS NÃO ENVIADOS
	die();
}
mysqli_close($conexao); //FINALIZANDO A CONEXAO

?>
</html>

