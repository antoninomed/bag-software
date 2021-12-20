<?php require_once "cabecalho.php";?> 
  
<?php require_once "conexao.php";

if($_SESSION["logado"] !=1){
			$_SESSION["falha"]=1;
			header("location:login.php");
			die();
}

if(isset($_SESSION["falha"]) && $_SESSION["falha"]==1){
	
	header("location:login.php");
	die();
}

if(isset($_SESSION["id"])){
		if($_SESSION["id"]==2){
			echo"<p class='erro'>Compra sucedida</p>";
			}		
		if($_SESSION["id"]==1){
			echo"<p class='erro'>Campos em Branco</p>";
		}	
		if($_SESSION["id"]==3){
			echo"<p class='erro'>Compra não sucedida</p>";
		}		
}


?>
<div class="container3">
<h2 class="titulo45c">Produtos</h2>
</br>
<form>
<fieldset>
    <div class="margem-inicio">
   
    	<h2 class="titulo45">Multimídia</h2>
        <hr>
        <div class="row">
        	<div class="bod col-xs-3 col-sm-3 col-md-3 col-lg-4">
            <img class="img_produtos" src="img/p-1.png"> 
            <p class="titulo23">Nero 2017 Platinum</p>
            <p class="titulo23">R$410,00</p>
            <p class="titulo23">Quantidade: <input max="5" min="0" type="number" name="nero" id="nero"></input></p>
            </div>
            <div class="bod col-xs-3 col-sm-3 col-md-3 col-lg-4">
             <img class="img_produtos" src="img/p-3.png">
             <p class="titulo23">Adobe Creative Cloud</p>
             <p class="titulo23">R$175,00</p>
            <p class="titulo23">Quantidade: <input max="5" min="0" type="number" name="adobe" id="adobe"></input></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4">
             <img class="img_produtos" src="img/contato.php">
             <p class="titulo23">Camtasia</p>
             <p class="titulo23">R$350,00</p>
            <p class="titulo23">Quantidade: <input max="5" min="0" type="number" id="camtasia" name="camtasia"></input></p>
            </div>
           
        </div>
        <div class="row">
        	
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">             
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">             
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             
            </div>
        </div>
    </div>
    <div>
    <hr>
    	<h2  class="titulo45">Monitoramento</h2>
        <hr>
        <div class="row">
         <div class="bod col-xs-3 col-sm-3 col-md-3 col-lg-4">
             <img class="img_produtos" src="img/p-5.png">
             <p class="titulo23">PRTG Network Monitor</p>
             <p class="titulo23">R$1.600,00</p>
            <p class="titulo23">Quantidade: <input max="5" min="0" type="number" name="prtg"></input></p>
            </div>
            <div class="bod col-xs-3 col-sm-3 col-md-3 col-lg-4">
            <img class="img_produtos" src="img/p-6.png"> 
            <p class="titulo23">Deep Freeze</p>
            <p class="titulo23">R$299,00</p>
            <p class="titulo23">Quantidade: <input max="5" min="0" type="number" name="deep"></input></p>
            </div>
        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-4">
            <img class="img_produtos" src="img/p-7.jpg"> 
            <p class="titulo23">Real VNC Enterprise</p>
            <p class="titulo23">R$399,00</p>
            <p class="titulo23">Quantidade: <input max="5" min="0" type="number" name="real"></input></p>
            </div>
           <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             
            </div>
        </div>
    </div>
    <div>
    <hr>
    	<h2  class="titulo45">Backup</h2>
    <hr>
        <div class="row">
        	<div class="bod col-xs-3 col-sm-3 col-md-3 col-lg-4">
            <img class="img_produtos" src="img/p-8.jpg"> 
            <p class="titulo23">Perfect Disk</p>
            <p class="titulo23">R$199,00</p>
            <p class="titulo23">Quantidade: <input max="20" min="0" type="number" name="perf"></input></p>
            </div>
            <div class="bod col-xs-3 col-sm-3 col-md-3 col-lg-4">
             <img class="img_produtos" src="img/p-9.png"> 
            <p class="titulo23">Retrospect</p>
            <p class="titulo23">R$499,00</p>
            <p class="titulo23 espaco4">Quantidade: <input max="20" min="0" type="number" name="retros"></input></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4">
             <img class="img_produtos" src="img/p-2.png"> 
            <p class="titulo23">Acronis Backup</p>
            <p class="titulo23">R$199,00</p>
            <p class="titulo23 espaco4">Quantidade: <input max="20" min="0" type="number" name="acronis"></input></p>
            </div>
            
            
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              
        </div>
    </div>
 
<hr>
	<div class="compra23">
    <div>
    	<input class="deleta"type="submit" name="enviar" value="Comprar"></input>
        <input class="deleta"type="submit" name="limpar" value="Limpar carrinho e pagamento"></input>
    </div>
    <p class="obs">Pressione "OK" para confirmar suas compras e seguir ao pagamento.</p>
    </div>
    </div>
    
    
    <?php

	$total=0;

	
if(isset($_GET["enviar"])){
		
		$nero = $_GET['absolut'];
		$adobe = $_GET['adobe'];
		$camtasia = $_GET['camtasia'];
		$prtg = $_GET['prtg'];
		$deep = $_GET['smirnoff'];
		$real = $_GET['real'];
		$perf = $_GET['perf'];
		$retros = $_GET['retros'];
		$acronis = $_GET['acronis'];
		
		
		
		$nerovalor =  410;
		$adobevalor = 175;
		$camtasiavalor = 350;
		$prtgvalor = 1600;
		$deepvalor = 299;
		$realvalor = 399;
		$perfvalor = 199;
		$retrosvalor = 499;
		$acronisvalor = 199;
				
		
$total = (($nerovalor *$nero)+($adobevalor*$adobe)+($camtasia*$camtasiavalor)+($prtg* $prtgvalor)+($deep*$deepvalor)+($real*$realvalor)+($perf*$perfvalor)+($retros*$retrosvalor)+($acronis*$acronisvalor));
	}
	
	 	echo "<div class='carrinho'>";
   	 	echo "<img class='carrinho2' src='img/carrinho.png'><h2 class='titulo-carrinho'>R$".$total."</h2>";
		echo "<input class='titulo-carro' type='submit' name='confirmar' value='OK'></input>";
		echo "<input type='hidden' name='confirmacao' value=".$total."></input>";
		echo "</div>";
		
		
		if(isset($_GET["limpar"])){
		$total=0;
		echo "<div class='carrinho'>";
   	 	echo "<img class='carrinho2' src='img/carrinho.png'><h2 class='titulo-carrinho'>R$".$total."</h2>";
		echo "<input class='titulo-carro' type='submit' name='confirmar' value='OK'></input>";
		echo "<input type='hidden' name='confirmacao' value=".$total."></input>";
		echo "</div>";
	}

	?>
   
    
    <!-- <div class='carrinho'>;
   	 	<img class='carrinho2' src='img/carrinho.png'><h2 class='titulo-carrinho'></h2>;
		</div>;-->
 
        </fieldset>
        </form>

    
   </div>
   <div class="barra">
   </div>
   <form  action="insere_pedido.php" method="post">
   <fieldset>
   <div class="container">
   		<h2 class="titulo-pagamento">Pagamento</h2>
    		<div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label class="fot" for="banco">Selecione seu banco</label>
                <select name="banco" id="banco">
                	<option value="">Escolha...</option>
                    <option value="banco do brasil">Banco do Brasil</option>
                	<option value="bradesco">Bradesco</option>
                	<option value="caixa">Caixa Econômica</option>
                    <option value="santander">Santander</option>
                    
                </select>
                
                <br/>
                <br/>
                 <label class="fot" for="estado">Selecione seu estado</label>
                <select class="estados-select" name="estado" id="estado"/>
                    <option value="">Escolha...</option>
                     <option value="AC">Acre</option>
                     <option value="AL">Alagoas</option>
                     <option value="AP">Amapá</option>
                     <option value="AM">Amazonas</option>
                     <option value="BA">Bahia</option>
                     <option value="CE">Ceará</option>
                     <option value="DF">Distrito Federal</option>
                     <option value="GO">Goiás</option>
                     <option value="ES">Espírito Santo</option>
                     <option value="MA">Maranhão</option>
                     <option value="MT">Mato Grosso</option>
                     <option value="MS">Mato Grosso do Sul</option>
                     <option value="MG">Minas Gerais</option>
                     <option value="PA">Pará</option>
                     <option value="PB">Paraiba</option>
                     <option value="PR">Paraná</option>
                     <option value="PE">Pernambuco</option>
                     <option value="PI">Piauí­</option>
                     <option value="RJ">Rio de Janeiro</option>
                     <option value="RN">Rio Grande do Norte</option>
                     <option value="RS">Rio Grande do Sul</option>
                     <option value="RO">Rondônia</option>
                     <option value="RR">Roraima</option>
                     <option value="SP">São Paulo</option>
                     <option value="SC">Santa Catarina</option>
                     <option value="SE">Sergipe</option>
                     <option value="TO">Tocantins</option>
                   </select>
                  <br/><br/>
                   <label class="fot">Endereço: </label>
               		<br/>
               		<input id="endereco" class="endereco" type='text' name='endereco'>

                <?php				
				if(isset($_GET["confirmar"])){
					$total = $_GET['confirmacao'];
					
                echo "<h3 class='total'> TOTAL A PAGAR: R$".$total."</h3>";
				}
			
                
                echo "</div>";
                echo "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3 barra-lateral'>";
               
               echo "<label class='fot'>Agência: </label>";
               echo "<br/>";
               echo "<input type='text' name='agencia'></input>";
               echo "<br/>";
               
               echo "<br/>";
               echo "<label class='fot'>Conta corrente: </label>";
               echo "<br/>";
               echo "<input type='text' name='conta'></input>";
			   echo "<br/>";
			   echo "<br/>";			  
			   echo "<label class='fot'>Confirme seu E-mail: </label>";
               echo "<input type='text' name='email'><br>";
              
                 
				echo "<br><input type='submit' name='finalizar' value='Finalizar compra'></input>";
                echo "<input type='hidden' name='confirmacaofinal' value=".$total."></input>";
                echo "</div>";
                
              
                if(isset($_POST["finalizar"])){
					$confirmacaofinal = $_POST['confirmacaofinal'];
					$banco = $_POST['banco'];
					$estado = $_POST['estado'];
					$agencia = $_POST['agencia'];
					$conta = $_POST['conta'];
					$email = $_POST['email'];
					 //echo "<h3 class='total'> TOTAL A PAGARRRRRRRR: R$".$totalesse."</h3>";
					 
					echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
					alert ('SUA COMPRA DE R$".$confirmacaofinal." FOI EFETUADA COM SUCESSO!')
					</SCRIPT>";
					 
					 
					 $total=0.00;

                }
				?>
             </div>
   </div>
   <div class="espaco5">
   </div>
   </fieldset>
    
    </form>
      </section>  
   </article>
    </body>  
   
  

