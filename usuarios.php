<?php
	require_once "cabecalho.php";
	include("conexao.php");
	
	
	$recebe = "select * from cadastro";
	$consulta = mysqli_query($conexao,$recebe);
	$linha = mysqli_fetch_assoc($consulta);
	

	

	if(isset($_SESSION["id"])){
		if($_SESSION["id"]==12){
			echo"<p class='sucesso'>Deletado com sucesso</p>";
		}
		elseif($_SESSION["id"]==13){
			echo"<p class='erro'>Falha ao deletar</p>";
		}
	}
?>

<h2 class="titulo-usuario">Usuários Cadastrados</h2>
<p class=espaco></p>


 	<?php do{  ?>
		
        <div class="row-banner2 col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="fundo2"> 
           
 			<h4 class="nome-label text-center"><?php echo $linha['nome']; ?></h4><br/>
 			
            <span class="nome-label"><strong>Data de Nascimento: </strong></span><?php echo $linha['data']; ?><br/>
            <span class="nome-label"><strong>CPF: </strong></span><?php echo $linha['cpf']; ?><br/>
            <span class="nome-label"><strong>Sexo: </strong></span><?php echo $linha['sexo']; ?><br/>
 			<span class="nome-label"><strong>E-mail: </strong></span><?php echo $linha['email']; ?><br/>
        	<span class="nome-label"><strong>Código: </strong></span><?php echo $linha['id']; ?><br/>
           
             <div>
 		
        		<a href="javascript: if(confirm('Tem certeza que deseja deletar o usuário <?php echo $linha['nome']; ?>?'))
             location.href='deleta.php?p=deleta&usuario=<?php echo $linha['id']; ?>';" class="deletar">Deletar</a>			
	  		</div>
           
        	</div>
            
          
            </div>
            
 		
    <?php } while($linha = mysqli_fetch_assoc($consulta)); ?>       
        
        
        
</div>
  
</body>
</html>


