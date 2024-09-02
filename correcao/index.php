<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primo</title>
</head>
<body>
    <form method="POST" action="">
    <LAbel for="numero_primo">Verificar se o numero é primo:</LAbel>
    <input type="number" name="numero_primo" id="numero_primo" required>
    <button type="submit" name="verificar_primo">  Verificar</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD']== 'POST'){

        if(isset($_POST['verificar_primo'])){
            $numero = $_POST['numero_primo'];
            $ehPrimo = true;
            if($numero <= 1){
                $ehPrimo = false; 
            }else{
                for($i = 2; $i <= sqrt($numero); $i++){
                    if( $numero % $i == 0){
                        $ehPrimo = false;
                        break;
                    }
                }

            }

            echo "O número $numero é ". ($ehPrimo ? 'primo': 'não é primo');
        }
    }
    ?>
</body>
</html>