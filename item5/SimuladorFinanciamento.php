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
    width: 800px;
    margin: 0 auto;
}        
</style>

</head>

	<body>
    	<div id="content">
		    	<h1>Simulação de Financiamento</h1>
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
            				foreach ($conn->query($sql)as $row){
            				?>	
            				<option value="<?php echo $row['indice']?>"><?php echo $row['meses'] ?></option>        				
            				<?php 
            				 }	
            				?>
            			</select>
        			</td>
        		</tr>
        		    		
        		<tr>
        			<td>
        				<input type="button" name="calcular" value="Calcular"/>
        			</td>
        		</tr>
        	</table>
    		
    		<br/>
    		<br/>
    		<?php 
    		
    		?>
    		<div class="resultado">    			
    			<table>    				
    				<tbody>
						<tr>
							<td>Valor a ser financiado:</td>
							<td></td>
						</tr>    					
						
						<tr>
							<td>Qtde. de parcelas:</td>
							<td></td>
						</tr>    					
						
						<tr>
							<td>Valor das prestações:</td>
							<td></td>
						</tr>    					
						
						<tr>
							<td>Valor total a pagar:</td>
							<td></td>
						</tr>    					
								
						<tr>
							<td>Jogos Pagos(R$):</td>
							<td></td>
						</tr>    					
								
						<tr>
							<td>CET:</td>
							<td></td>
						</tr>    																							
    				</tbody>
    			</table>
    			
    		</div>
    		
    	</div>
    </body>
</html>
