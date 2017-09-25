<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel= "stylesheet" type = "text/css" href="css/estilo.css">
</head>
<body>
    
    <form class="padrao-form" method="post" action="../php/cadastra_usuario.php">
    	<table cellspacing="10">
    	<tr>
    		<td>
    			<label> CPF: </label>
    		</td>
    		<td>
    			<input type="text" name="CPF">
    		</td>
    	</tr>
    	
    	<tr>
    		<td>
    			<label> Nome: </label>
    		</td>
    		<td>
    			<input type="text" name="NOME">
    		</td>
    	</tr>	
    	<tr>
    		<td>
    			<label> E-mail: </label>
    		</td>
    		<td>
    			<input type="text" name="EMAIL">
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<label> Telefone: </label>
    		</td>
    		<td>
    			<input type="number" name="TELEFONE">
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<label> Senha: </label>
    		</td>
    		<td>
    			<input type="password" name="SENHA">
    		</td>
    	</tr>
    	<tr>
    		<td>
    			<input type="submit" class="btn" value="Salvar">
    		</td>
    	</tr>		
    </form>
    

</body>
</html>