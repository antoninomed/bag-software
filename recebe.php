<?php

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

$conect = mysqli_connect('localhost', '', '');
$db = mysqli_select_db('cliente_db');
$query_select = "SELECT login FROM usuario WHERE login = '$login'";
$select = mysqli_fetch_array($select);
$logarray = $array['login'];

if($login == "" || $login == null){
	echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.php';</script>";
die();
}

else{
	$query = "INSERT INTO usuario (login, senha) 	VALUES('$login', '$senha')"	;
$insert = mysqli_query($query, $connect);

if($insert){
	echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!'); 
	window.location.href='login.php'</script>";
	}
else{
    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');
	window.location.href='cadastro.html'</script>";
        }
}





?>