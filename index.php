<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Insira o tipo de operação e os valores na URL, deste jeito: </h1>
    <h2> ?operacao=[Insira "adicao", subtracao, multiplicacao ou divisao]&x=[valor um]&y=[valor dois] </h2>

    <?php
        if (isset($_GET['operacao']) && isset($_GET['x']) && isset($_GET['y']))
            if ($_GET['operacao'] == "adicao") {
                echo  "Resultado: " . $_GET['x'] + $_GET['y'];
            }
            else if ($_GET['operacao'] == "subtracao") {
                echo "Resultado: " . $_GET['x'] - $_GET['y'];
            }
            else if ($_GET['operacao'] == "multiplicacao") {
                echo "Resultado: " . $_GET['x'] * $_GET['y'];
            }
            else if ($_GET['operacao'] == "divisao") {
                echo "Resultado: " . $_GET['x'] / $_GET['y'];
            }
    ?>
</body>
</html>