<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
<!-- Receba um número e mostre o seu antecessor e seu sucessor -->
    <form method="get">
        Número: <input type="number" name="numero" id="">
        <input type="submit" value="">
    </form>
    <?php
        $numero = $_GET["numero"];
        echo "O antecessor do seu número é ".$antes = $numero - 1 ."<br>E o sucessor é ".$depos = $numero + 1;
    ?>
</body>
</html>