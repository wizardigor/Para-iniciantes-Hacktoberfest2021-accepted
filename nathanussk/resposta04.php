<!DOCTYPE html>

<html lang="pt-br">

	<head>

		<title>Numero Dobro e Triplo</title>

		<style>
			form { width: 200px; height: auto; margin: 0 auto; }
			label, input { width: 100%; height: auto; display: block; float:left; margin: 5px 0; }
		</style>

	</head>
	
	<body>

    <?php
	 
	 if(isset($_POST['numero'])){ //verificando se o formulario foi submetido
		
		//resgatando as variaveis
		$numero = $_POST['numero'];
        $numero2 = $_POST['numero'];
		
		//processamento
		$resultado = (3*$numero);
        $resultado2 = (2*$numero2);
		
		//saida de dados
		echo "O triplo de " . $numero . " e " . $resultado; 
        echo " ,O dobro de " . $numero2 . " e " . $resultado2; 
	 }
	?>
	
	<form action="#" method="post">
		
		<fieldset>
		
			<label>Digite um numero:</label>
            
            <input type="text" name="numero" value="" />
			
			<input type="submit" value="Enviar" />

        </fieldset>
		
    </form>

	</body>
</html>