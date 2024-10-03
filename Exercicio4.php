<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
<!-- Crie um formulario para calcular o IMC e mostre o resultado -->
    <form method="get">
        Peso <input type="number" name="peso" id="">
        Altura: <input type="number" name="altura" id="">
        <input type="submit" value="Enviar">
    </form>
    <?php
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];

        echo"IMC: " . $peso/$altura**2;
    ?>
</body>
</html>