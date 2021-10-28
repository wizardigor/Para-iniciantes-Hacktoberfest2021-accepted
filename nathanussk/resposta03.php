<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Antecessor e Sucessor</title>

    <?php

    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $um_numero = intval ($_POST['um_numero']);
        $antecessor=$um_numero-1;
        $sucessor=$um_numero+1;
        echo 'O valor do antecessor: ' . $antecessor . "<br/>\n";
        echo 'O valor do sucessor: ' . $sucessor . "<br/>\n";
    }
 
?>
    <form method="post">
        <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
            <tbody>
                <tr>
                     <td>
                        <label for="um_numero">Digite o valor do um numero:</label>
                    </td>
                    <td>
                        <input name="um_numero" required="required" step="1" type="number" />
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2" rowspan="1">
                        <input value="Processo" type="submit" />
                    </td>
                </tr>
            </tbody>
         </table>
    </form>
</head> 
</body>
</html>