<?php require_once "cabecalho.php";?> 
<?php require_once "conexao.php";?>
<link href="https://fonts.googleapis.com/css?family=Abel|Quicksand" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/paginas_site.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />       
        
<?php	
	if(isset($_SESSION["logado"]) && $_SESSION["logado"]==1){
		
		$logado = true;		
		
		$emailUsuario = $_SESSION["usuario"];
		$perfil = "select * from cadastro where email = '{$email}'";

		$presta = mysqli_query($conexao,$perfil);

		$pfvr = mysqli_fetch_array($presta);
		
		if($emailUsuario== "admin@admin.com"){	
		echo"</br><div class='retangulo'>";
		echo"<a href='sair.php'>";
		echo"<img class='icones' src='img/logout.png' title='Fazer Logout'</a>";
		echo"<a href='usuarios.php'>";		
		echo"<img class='icones' src='img/deletaruser.jpg' title='Deletar Usuário'></a>";
		echo"<a href='pedidos.php'>";
		echo"<img class='icones' src='img/carrinho2.png' title='Ver todos pedidos'></a>";
		echo"<a href='diagrama.php'>";		
		echo"<img class='icones icones2' src='img/voltar.png' title='Diagrama'></a></div>";
	 	}
		else {
			echo"<a href='sair.php'>";
		echo"<img class='icones' src='img/logout.png' title='Fazer Logout'></a>";
		$emailUsuario = $_SESSION["usuario"];
		$perfil = "select * from usuario where email = '{$emailUsuario}'";
		
		$presta = mysqli_query($conexao,$perfil);

		$pfvr = mysqli_fetch_array($presta);?>
		
	
		<h3 class="titulo-produtos">Meus Dados</h3>
        
        <div class="texto-perfil">   
        <span><strong>Nome: </strong></span>
      	<span class='espaco'><?=$pfvr['nome'] ?></span><br/><br/>
        
		<span><strong>E-mail: </strong></span>
      	<span class='espaco'><?=$pfvr['email'] ?></span><br/><br/>
      
      	<span><strong>Endereço: </strong></span>
		<span class='espaco'><?=$pfvr['endereco'] ?></span><br/><br/>

      
      	<span><strong>Sexo: </strong></span>
      	<span class='espaco'><?=$pfvr['sexo'] ?></span><br/><br/>
      
      	<span><strong>Nascimento: </strong></span>
      	<span class='espaco'><?=$pfvr['data'] ?></span><br/><br/>
      
      	

        </div>
		
		<?php
			}
			
	
	}
	else{
		$logado = false;
	}
	
	if(isset($_SESSION["nao_logado"]) && $_SESSION["nao_logado"]==0){
		
		echo"<p class='erro'>Usuário ou Senha incorretos</p>";
	}//fim 3º if

	echo"<br/><br/>";
	unset($_SESSION["falha"]);
	unset($_SESSION["nao_logado"]);
	
	
	if(!($logado)){//se não estiver logado mostra o form
?>        
		  <article id="login">	
		        <h2 class="Login">Login</h2>  
        <fieldset class="formulario_l">
                 
        	<form action="valida_login.php" method="post" class="login">
           
                <label for="usuario">E-mail:</label>
                <input class="formulario_login" type="text" name="email" placeholder="Informe seu email" id="email" class="caixa"/> <br/>
                
                <label for="senha">Senha:</label>
                <input class="formulario_login" type="password" name="senha" placeholder="Informe sua senha" id="senha" class="caixa"/> <br/>
                
                <input class="btn_cadastrar"type="submit" value="Entrar"/><br/>
                <h1 class="texto_cadastro">Não possui conta?<a class="texto_cadastro" href="formulario.php"> Cadastre-se aqui !</h1></a>
                               
            </form>
            </fieldset>
 	<?php } 
	
	//else{
		//echo"<p href='minha_conta.php'></p>";
		
		//}
	?> 
  
    
   
        </article>
    </section>

</body>
</html>