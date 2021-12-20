<?php
session_start();

session_destroy();
	
session_start();
$_SESSION["success"] = "Usuário deslogado com sucesso!";
header("Location:login.php");
die();
?>