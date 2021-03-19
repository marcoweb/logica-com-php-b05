<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result['soma'] = $_POST['numA'] + $_POST['numB'];
    $result['subtração'] = $_POST['numA'] - $_POST['numB'];
    $result['multiplicação'] = $_POST['numA'] * $_POST['numB'];
    $result['divisão'] = $_POST['numA'] / $_POST['numB'];
    $result['potencia'] = pow($_POST['numA'], $_POST['numB']);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exemplo</title>
    </head>
    <body>
        <h1>Exemplo</h1>

        <form action="index.php" method="post">
            <label for="numA">Número A:</label>
            <input type="number" name="numA" />
            <label for="numB">Número B:</label>
            <input type="number" name="numB" />
            <button type="submit">Calcular</button>

            <?php if(isset($result)): ?>
                <hr />
                <ul>
                <?php foreach($result as $op => $valor): ?>
                    <li><?= $op ?> = <?= $valor ?></li>
                <?php endforeach ?>
                </ul>
            <?php endif ?>
        </form>
    </body>
</html>