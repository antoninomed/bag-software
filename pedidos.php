<?php require_once "cabecalho.php";?>  
 <?php 
    require_once("conexao.php");
    
    if($_SESSION["logado"] !=1){
                $_SESSION["falha"]=1;
                header("location:login.php");				
				
                die();
    }
    
		
    $perfil = "select * from pedido;";    
    
    $presta = mysqli_query($conexao,$perfil);
    
    $pfvr = mysqli_fetch_array($presta);
    ?>		
    <h2 class="titulo-usuario">Pedidos</h2>
<p class=espaco></p>
    		<div class="container">			
        	<?php do{ ?>
           	<hr>
            <div>
            <h2 class="titulo-pedidos">Código do pedido: <?=$pfvr["id"]?> </h2>
            <div class="row margem-pedido">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3  barra-lateral">
            <p class="nome-label">Valor do Pedido: R$ <?=$pfvr["total"]?> </p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3  barra-lateral">
            <p class="nome-label">Banco: <?=$pfvr["banco"]?></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3  barra-lateral">
            <p class="nome-label">Agência: <?=$pfvr["agencia"]?></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <p class="nome-label">Conta corrente: <?=$pfvr["conta"]?></p>
            </div>
            </div>
            
           
            <a href="javascript: if(confirm('Tem certeza que deseja deletar o pedido <?php echo $pfvr['id']; ?>'))
            location.href='apaga.php?p=apagar&pedido=<?php echo $pfvr['id']; ?> ';" type='submit' class="deletar">Deletar</a>
            
            
            <?php }while ($pfvr = $presta->fetch_assoc()); ?>
            
            
            
            
             <hr>
            </div>
            
            <div class="cancelar">
            
          
            
            </div>
            </div>
        
       </article>    
       
	       
       
       
       
        </body>     
   
   
    </html>

