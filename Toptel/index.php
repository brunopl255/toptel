<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TOPTEL</title>
    <link rel= "stylesheet" type = "text/css" href="css/estilo.css">
</head>
<body>

<form class="padrao-form" method="post" action="php/login.php">
    	<table cellspacing="10">
    	<tr>
    		<td>
    			<label> CPF: </label>
    		</td>
    		<td>
    			<input type="text" name="cpf">
    		</td>
    	</tr>
    	
    	<tr>
    		<td>
    			<label> Senha: </label>
    		</td>
    		<td>
    			<input type="password" name="senha">
    		</td>
        </tr>
        <tr>
    		<td>
    			<input type="submit" class="btn" value="LOGIN">
            </td>
            
            <td>
            <a href = "pages/cadastrar_usuario.php"> Cadastrar-se </a>
        
            </td>    
        </tr>
        
</form>
</body>
</html>