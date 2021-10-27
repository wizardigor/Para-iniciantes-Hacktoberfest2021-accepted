<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hacktoberfest</title>

    <style>
        body {
            background-color: #c8a2c8;
        }
    </style>
</head>

<body>
    <h1 class="text-center">média aritmética de 4 valores inteiros</h1>
    <div class="container">
        <form method="post">
            <div class="input-group mb-3">

                <input type="number" step="1" class="form-control outline-dark" name="numero1" placeholder="Número" aria-label="Número" aria-describedby="button-addon2">
                <input type="number" step="1" class="form-control outline-dark" name="numero2" placeholder="Número" aria-label="Número" aria-describedby="button-addon2">
                <input type="number" step="1" class="form-control outline-dark" name="numero3" placeholder="Número" aria-label="Número" aria-describedby="button-addon2">
                <input type="number" step="1" class="form-control outline-dark" name="numero4" placeholder="Número" aria-label="Número" aria-describedby="button-addon2">
    
            <button class="btn btn-dark" type="submit" id="button-addon2">Calcular</button>
            </div>
        </form>
        <?php

        $numero1 = filter_input(INPUT_POST, 'numero1', FILTER_SANITIZE_STRING);
        $numero2 = filter_input(INPUT_POST, 'numero2', FILTER_SANITIZE_STRING);
        $numero3 = filter_input(INPUT_POST, 'numero3', FILTER_SANITIZE_STRING);
        $numero4 = filter_input(INPUT_POST, 'numero4', FILTER_SANITIZE_STRING);
        $resultado = $numero1+$numero2+$numero3+$numero4;
        $resultado = $resultado / 4;

        ?>

        <div class="card m-auto" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Dobro: <?php echo $dobro; ?></li>
                <li class="list-group-item">Triplo: <?php echo $triplo; ?></li>
            </ul>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>