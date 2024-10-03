<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
<!-- Receba um número qualquer e mostre se é impar ou par -->
    <form method="get">
        Número: <input type="number" name="numero" id="">
        <input type="submit" value="Enviar">
    </form>
    <?php
        $numero = $_GET["numero"];

        $result = $numero % 2 == 0 ? "É par":"É impar";
        echo $result;
    ?>
</body>
</html>