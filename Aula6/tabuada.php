<!DOCTYPE html>
<html lang = "pt-br">
	<head>
    	<meta charset="UTF-8">
        <meta name = "autor" content = "Roberto Akira">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>        
    </head>

	<body>
    <h1>Praticando - Tabuada</h1>

    <form action="tabuada.php" method="GET">

        <label for="numero">Número:</label>
        <input type="numero" name="numero" id="numero" required>
        <br></br>

        <button type="submit">Calcular</button>
        <button type="reset">Limpar</button>

        <br></br>

    </form>
    
    <?php

    $num = filter_input(INPUT_GET, "numero", FILTER_SANITIZE_NUMBER_INT);

    if ($num != null){

        echo "<h1>A tabuada é do $num </h1>";

        for ($x = 1; $x <= 10; $x++){

            $result = $num * $x;
    
            echo "$x x $num = $result <br>";
        }

    }

    ?>

	</body>

</html>