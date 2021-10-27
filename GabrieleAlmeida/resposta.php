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
    <div class="container col-md-6 my-3">
        <form method="post">
            <div class="input-group mb-3">
                <div class="form-floating flex-grow-1">
                    <input type="number" class="form-control outline-dark" id="numberInput" name="numero" placeholder="Digite um número" aria-label="Número" aria-describedby="button-addon2">
                    <label for="numberInput">Digite um número</label>
                </div>
                <button class="btn btn-dark" type="submit" id="button-addon2">Calcular</button>
            </div>
        </form>

        <?php

        $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);

        ?>

        <h3 class="text-left text-center">Número digitado: <?php echo ($numero); ?></h3>

        <h3 class="text-left">Questão 3:</h3>

        <div class="card m-auto" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Antecessor: <?php echo ($numero - 1); ?></li>
                <li class="list-group-item">Sucessor: <?php echo ($numero + 1); ?></li>
            </ul>
        </div>

        <h3 class="text-left">Questão 4:</h3>

        <div class="card m-auto" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Dobro: <?php echo ($numero * 2); ?></li>
                <li class="list-group-item">Triplo: <?php echo ($numero * 3); ?></li>
            </ul>
        </div>

        <h3 class="text-left">Questão 5:</h3>

        <div class="card m-auto" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">Tabuada</li>
                <?php
                $i = 1;
                while ($i <= 10) { ?>

                    <li class="list-group-item"><?php echo ($i); ?> x <?php echo ($numero . ' = ' . ($numero * $i)); ?></li>

                <?php

                    $i++;
                }

                ?>
            </ul>
        </div>
        <br>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>