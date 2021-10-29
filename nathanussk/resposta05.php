<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Tabuada </title>

    <form name="form" method="get">

    Informe um numero: <input type="text" value="" name="numero">

    <input type = "submit" value="Iniciar">

    </form>

    <?php

        $numero = (int)$_GET['numero'];

        if($numero> 0 and $numero < 10)
        {
            for($i = 0; $i < 10; $i++)
            {
                echo " $i x $numero = " . $i*$numero. "<br>";
            }
        }

    ?>

</body>
</html>