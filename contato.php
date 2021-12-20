<?php require_once "cabecalho.php";?>
<link href="https://fonts.googleapis.com/css?family=Abel|Quicksand" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/paginas_site.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<title>Contato</title>
</head>

<body>
<h1 class="contato">Contato</h1>
<fieldset class="formulario_contato">
<label for="usuario">Nome: </label>
<br>
<input class="form-control" type="text" name="nome"  placeholder="Insira seu nome" utofocus="">
<br/>
<label for="email">E-mail: </label>
<br/>
<input  class="form-control" type="text" name="email" placeholder="Insira seu e-mail" autofocus>
<br/>
<label for="texto">Mensagem:</label>
<br/>
<textarea  class="mensagem_form" name="mensagem" placeholder="Escreva sua mensagem" ></textarea>
<br/>
<input  class="btn btn-default" type="submit" name="enviar" value="Enviar">
</fieldset>
</body>
<footer class="rodape">
   <p><strong class="digan">Diga <strong class="nao">NÃO</strong> à</strong><strong class=		"pirataria"> pirataria de Softwares.</strong>  
   </p>    
   </footer>
</html>
