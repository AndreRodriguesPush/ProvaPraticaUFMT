<!Doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Calculadora Juros Compostos</title>
<link rel="stylesheet" href="../lib/cssjuros.css">

</head>

<body>

	<div id="main">

		<h1>Calculadora de Juros Compostos</h1>
		<form action="CalculadoraJurosCompostos.php" method="POST">
			<table>
				<tr>
					<td><label for="Valor que será Aplicado">Valor que será aplicado:</label></td>
					<td><input type="text" name="valorAplicado" id="VA" /></td>
				</tr>
				<tr>
					<td><label for="Taxa">Taxa (%):</label></td>
					<td><input type="text" name="taxa" id="i" /></td>
				</tr>
				<tr>
					<td><label for="tempo">Tempo(meses):</label></td>
					<td><input type="text" name="tempoMes" id="n" /></td>
				</tr>
				<tr>
					<td><input type="submit" name="calcular" id="calcular"
						value="Calcular" /></td>
				</tr>
			</table>
		</form>

		<!-- Relatório Página Calculo de Juros Compostos PHP -->
		<table>
			<tr>
				<td>Mês</td>
				<td>Valor Aplicado Corrigido</td>
				<td>Lucro</td>
			</tr>
			<!-- 
                    http://www.cesar.inf.br/blog/?p=231 
                    http://www.php.net/pow
                    
                    http://blog.fabianobento.com.br/2014/10/configurando-o-wamp-server-vhosts-e-preparando-a-estacao/
                    http://www.diogomatheus.com.br/blog/php/depuracao-de-aplicacoes-php-com-xdebug/
             -->
		<?php
                include_once'../item3/ClasseJuro.php';
                if (isset($_POST["calcular"])) {
                
                $valorAplicado = $_POST["valorAplicado"];
                $taxa = $_POST["taxa"];
                $tempoMes = $_POST["tempoMes"];
                
                /*$juroComposto = new Juro();
                $valorAplicadoCorrigido = $juroComposto->calcularJuroComposto($valorAplicado, $taxa, $tempoMes);*/               
                
                $valorAplicadoCorrigido = ($valorAplicado * (1 + ($taxa/100)));
                $lucro = $taxa;
                
                for ($x = 1; $x <= $tempoMes; $x ++) {
                    
                    echo "<tr>";                    
                    echo "<td>" . $x . "</td>";
                    echo "<td>" . $valorAplicadoCorrigido . "</td>";
                    echo "<td>" . $lucro . "</td>";      
                    
                    $lucro = $valorAplicadoCorrigido * ($lucro/100);  
                    $valorAplicadoCorrigido = ($valorAplicado * (1 + ($taxa/100)));
                    
                    //$valorAplicadoCorrigido = $valorAplicado + $lucro;                    
                    //$q = ($valorAplicadoCorrigido - $valorAplicado);       
                    //var_dump($taxa);
                    //$valorAplicadoCorrigido += ($valorAplicadoCorrigido * ($taxa/100));       
                    
                    echo "</tr>";
                }

                
            }
        ?>
					
		</table>

	</div>

</body>
</html>