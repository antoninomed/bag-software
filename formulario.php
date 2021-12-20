<?php require_once("cabecalho.php");?>
<link href="https://fonts.googleapis.com/css?family=Abel|Quicksand" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/paginas_site.css" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<title></title>
<section id="formulario">
	<?php
	session_start();
	
	
    //EXIBIR MENSAGENS
	if(isset($_SESSION["id"])){
		if($_SESSION["id"]==1){
			echo"<p class='erro'>Campos em Branco</p>";
		}
		elseif($_SESSION["id"]==2){
			echo"<p class='erro'>Data de Nascimento Inválida</p>";
		}
		
		elseif($_SESSION["id"]==3){
			echo"<p class='sucesso'>Você foi cadastrado com sucesso</p>";
		}
		
		elseif($_SESSION["id"]==4){
			echo"<p class='erro'>E-mail já cadastrado</p>";
		}	
		
		elseif($_SESSION["id"]==12){
			echo"<p class='erro'>E-mail inválido</p>";
		}	
		elseif($_SESSION["id"]==15){
			echo"<p class='erro'>CPF já cadastrado</p>";
		}		
		elseif($_SESSION["id"]==22){
			echo"<p class='erro'>E-mail já cadastrado</p>";
		}		
	}
	unset($_SESSION["id"]);//finalizando a variavel
	
	?>    
<h1 class="contato">Cadastro</h1>
<form class="formulario" action="insere.php" method="post" enctype="multipart/form-data" class="caixa">
<label>Nome:</label>
<input class="formulario_texto" type="text" name="nome" id="nome" class="caixa" placeholder="Informe seu nome"><br/>
<label>Data de Nascimento:</label>
<input class="formulario_texto" type="text" name="dtnascimento" id="dtnascimento" class="caixa" placeholder="dd/mm/aaa"><br/>
<label>CPF:</label>
<input class="formulario_texto" type="text" name="cpf" id="cpf" class="caixa" placeholder="CPF"><br/>
<label for="sexo">Sexo: </label>
                <select class="formulario_texto" name="sexo" id="sexo" class="caixa">
                	<option value="">Escolha seu sexo</option>
                    <option value="masculino">Masculino</option>
                	<option value="feminino">Feminino</option>
                </select><br/>
<label>E-mail:</label><input class="formulario_texto" type="text" name="email" id="email" class="caixa" placeholder="Informe seu e-mail"><br>
<label>Senha:</label><input class="formulario_texto" type="password" name="senha" id="senha" class="caixa" placeholder="Informe sua senha"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="btn_cadastrar"><br/>

</form>

</section>
</body>
<footer class="rodape">
   <p><strong class="digan">Diga <strong class="nao">NÃO</strong> à</strong><strong class=		"pirataria"> pirataria de Softwares.</strong>  
   </p>    
   </footer>
</html>
