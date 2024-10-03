<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <!-- Leia os valores A, B e C, em seguida, imprima a soma entre A e B e mostra se a soma é maior que C -->
    

    <form method="get">
        Valor A: <input type="number" name="valorA">
        Valor B: <input type="number" name="valorB">
        Valor C: <input type="number" name="valorC">
        <input type="submit" value="Calcular">
    </form>
    <?php
        $valorA = $_GET["valorA"];
        $valorB = $_GET["valorB"];
        $valorC = $_GET["valorC"];
        $soma = $valorA + $valorB;

        if($soma > $valorC){
            echo "A soma de A e B é " . $soma ."E é maior que C";
        }else if($soma < $valorC){
            echo "A soma de A e B é " . $soma .". E é menor que C";
        }else{
            echo "A soma de A e B é " . $soma .". E é igual que C";
        }
    ?>    
</body>
</html>
