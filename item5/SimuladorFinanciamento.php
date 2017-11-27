<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<title>Simulador Financiamento</title>
<head>

<style type="text/css">
body{
    width: 50%;
    margin: 0 auto;
    
}
#content{
   /* width: 800px; */
}        
</style>

</head>

	<body>
    	<div id="content">
		    	<h1>Simulação de Financiamento</h1>
        	
        	<form action="SimuladorFinanciamento.php" method="post">
        	
        	<table>
        		<tr>
        			<td><label for="Valor a ser financiado">Valor a ser Financiado:</label></td>
        			<td><input type="number" name="valorFinanciado" /></td>
        		</tr>
        		
        		<tr>
        			<td>
        				<label for="Tempo(meses)">Tempo(meses):</label>
        			</td>
        			<?php
                        include_once 'conexaopdo.php';
                        $sql = ("SELECT * FROM financiamento_indice");
                     ?>
        			<td>
            			<select name="tempoMeses">
            				<?php 
            				    foreach ($conn->query($sql) as $row){
            				?>	
            				<option value="<?php echo $row['meses']?>"><?php echo $row['meses'] ?></option>        				
            				<?php 
            				    }	
            				?>
            			</select>
        			</td>
        		</tr>
        		    		
        		<tr>
        			<td>
        				<input type="submit" name="calcular" value="Calcular"/>
        			</td>
        		</tr>
        	</table>
        	
    		</form>
    		
    		<br/>
    		<br/>
    		
    		<?php 
    		  if(isset($_POST["calcular"])){
    		      
    		      $valorFinanciado = $_POST["valorFinanciado"];
    		      $tempo = $_POST["tempoMeses"];
    		     
    		      $SQL = "SELECT indice FROM financiamento_indice WHERE meses= ".$tempo;    		      
    		      $execQuery = $conn->query($SQL);    		     
    		      $result = $execQuery->fetch();
                    		          		      
    		      $valorPrestacoes = ($valorFinanciado * ($result["indice"]) );
    		     
    		      $valorTotalPagar = ($valorPrestacoes * $tempo);
    		      
    		      $jurosPago = ($valorTotalPagar - $valorFinanciado); 
    		      
    		      $CET = ($jurosPago /$valorFinanciado) * 100 ;
    		?>
    		<div class="resultado">    			
    			<table>    				
    				<tbody>
						<tr>
							<td>Valor a ser financiado:</td>
							<td><?php echo $valorFinanciado; ?></td>
						</tr>    					
						
						<tr>
							<td>Qtde. de parcelas:</td>
							<td><?php echo $tempo;?></td>
						</tr>    					
						
						<tr>
							<td>Valor das prestações:</td>
							<td><?php echo $valorPrestacoes;?></td>
						</tr>    					
						
						<tr>
							<td>Valor total a pagar:</td>
							<td><?php echo $valorTotalPagar;?></td>
						</tr>    					
								
						<tr>
							<td>Juros Pagos(R$):</td>
							<td><?php echo $jurosPago; ?></td>
						</tr>    					
								
						<tr>
							<td>CET:</td>
							<td><?php echo $CET. "%";?></td>
						</tr>    																							
    				</tbody>
    			</table>
    			
    		</div>
    		<?php 
    		  }
    		?>
    	</div>
    </body>
</html>
