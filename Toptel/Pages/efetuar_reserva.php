<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reservas</title>
    <link rel= "stylesheet" type = "text/css" href="css/estilo.css">
</head>
<body>

<form class="padrao-form" method="post" action="../php/efetua_reserva.php">
    	<table cellspacing="10">

    	<tr>
    		<td>
    			<label>Número do Quarto:</label>
    		</td>
    	 	<td>
    	 		<input type="text" name="numeroQuarto">
    	 	</td>
    	</tr>

    	<tr>
    		<td>
    			<label>Entrada:</label>
    		</td>
    	 	<td>
    	 		<input type="date" name="dataInicio">
    	 	</td>
    	</tr>

    	<tr>
    		<td>
    			<label>Saída:</label>
    		</td>
    	 	<td>
    	 		<input type="date" name="dataFim">
    	 	</td>
    	</tr>
    	<tr>
    		<td>
    		<input type="submit" class="button" value="Agendar">
    		</td>
    	</tr>   

  </form> 	
</body>
</html>