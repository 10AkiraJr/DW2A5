<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name = "autor" content = "Roberto Akira">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>
<body>
    <h1>Praticando - Calculadora</h1>
    <hr>
    <?php
        $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_SPECIAL_CHARS);
        $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_SPECIAL_CHARS);
        $nota3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_SPECIAL_CHARS);
        $result = filter_input(INPUT_POST, "result", FILTER_SANITIZE_SPECIAL_CHARS);

        $result = ($nota1 + $nota2 + $nota3) / 3;

        echo "Um aluno com as notas: <u><b>" . $nota1 . "</u></b>, <u><b>" . $nota2 . "</u></b> e <u><b>" . $nota3 . "</u></b>, Tem uma média igual a <u><b>" . $result . "</u></b>";

        if($result <= 4){
            $cor = "red";
            echo "<p>Com essa média o aluno está <font color = $cor> <u><b>REPROVADO!</u></b></font></p>";
        }elseif($result > 4 && $result < 6){
            $cor = "orange";
            echo "<p>Com essa média o aluno está <font color = $cor> <u><b>DE RECUPERAÇÃO!</u></b></font></p>";
        }elseif($result >= 6){
            $cor = "green";
            echo "<p>Com essa média o aluno está <font color = $cor> <u><b>APROVADO!</b></u></font></p>";
        }
                
    ?>
</body>
</html>