<?php
session_start();

$conexao = mysqli_connect("localhost", "root", "123", "software");

if(!$conexao){
	$_SESSION["id"]=6;
	
	$_SESSION["msg_falha"] = "Conexao mau sucedida, o seguinte erro foi gerado:<b>".mysqli_connect_error()."</b>";
	header("location:formulario.php");
	die();

}
?>