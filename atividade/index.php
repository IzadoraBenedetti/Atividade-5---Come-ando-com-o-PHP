<html lang="por-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 5 </title>
</head>

<body>
    <h1>Calcular a Área do Triângulo</h1>
    <form method="POST" action="index.php">
        <div>
            <label for="base">Base do triângulo:</label>
            <input type="number" id="base" name="base" required><br><br>
        </div>
        <div>
            <label for="altura">Altura do triângulo:</label>
            <input type="number" id="altura" name="altura" required><br><br>
        </div>
        <div>
            <input type="submit" value="Calcular">
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) / 2;
        $limite = 100; 
        if ($area > $limite) {
            echo "<h1>A área do triângulo é $area, que é maior que $limite.</h1>";
        } else {
            echo "<h1>A área do triângulo é $area, que é menor ou igual a $limite.</h1>";
        }
    }
    ?>
</body>

</html>