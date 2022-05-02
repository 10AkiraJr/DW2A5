<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name = "autor" content = "Roberto Akira">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destino</title>
</head>
<body>

    <?php 
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
        $textocor = filter_input(INPUT_POST, "textocor", FILTER_SANITIZE_SPECIAL_CHARS);
        $imagem = filter_input(INPUT_POST, "imagem", FILTER_SANITIZE_URL);
        $link = filter_input(INPUT_POST, "link", FILTER_SANITIZE_URL);
        $fundo= filter_input(INPUT_POST, "fundo", FILTER_SANITIZE_SPECIAL_CHARS);
        
        echo "<h1> $titulo </h1>";
        echo "<hr>";
        echo "<h3> $corpo </h3>";
        echo "<img src=$imagem >";
        echo "<p> <a href=$link target=blank>'$link'</a> </p>";
    ?>
    
    <style>

        body{
            color: <?php echo $textocor; ?>;
            background-color: <?php echo $fundo; ?>;
        }

    </style>

</body>
</html>