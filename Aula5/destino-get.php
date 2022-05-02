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
    <h1>Destino</h1>
    <hr>
    <?php
        //Variável do Gato 
        $clicou1 = filter_input(INPUT_GET, "clicou1", FILTER_SANITIZE_SPECIAL_CHARS);

        //Variável do Cachorro
        $clicou2 = filter_input(INPUT_GET, "clicou2", FILTER_SANITIZE_SPECIAL_CHARS);

        //Variável dos Periquitos
        $clicou3 = filter_input(INPUT_GET, "clicou3", FILTER_SANITIZE_SPECIAL_CHARS);

        //Variável do Peixe
        $clicou4 = filter_input(INPUT_GET, "clicou4", FILTER_SANITIZE_SPECIAL_CHARS);

        if ($clicou == 1){
           echo "Você clicou no GATO!";
        }elseif($clicou1 == 2){
            echo "Você clicou no CACHORRO!";
        }elseif($clicou == 4){
            echo "Você clicou nos PERIQUITOS AUSTRALIANOS!";
        }elseif($clicou == 4){
            echo "Você clicou no PEIXE BETTA!";
        }
     ?>

    <p>
        <a href="destino-get.php?nome=roberto&email=roberto.akirajuh1@gmail.com&fundo=<?=$fundo?>">
            Nome: Roberto Akira Ozaki Junior Email: roberto.akirajuh1@gmail.com
        </a>
    </p>
    <p>
        <a href="destino-get.php?nome=José da Silva&email=josesilva29@gmail.com&fundo=<?=$fundo?>">
            Outro link (do José)
        </a>
    </p>
    <p>
        <a href="destino-get.php?nome=<?=$nome?>&email=<?=$email?>&fundo=lightblue">
            Cor: azul claro
        </a>
    </p>
    <p>
        <a href="destino-get.php?nome=<?=$nome?>&email=<?=$email?>&fundo=gold">
            Cor: ouro
        </a>
    </p>
    <p>
        <a href="destino-get.php?nome=<?=$nome?>&email=<?=$email?>&fundo=lightcoral">
            Cor: vermelho claro
        </a>
    </p>   
    <p>
        <a href="destino-get.php?nome=<?=$nome?>&email=<?=$email?>&fundo=white">
            Cor: branco
        </a>
    </p> 
    <style>
        body{
            background-color: <?= $fundo ?>;
        }
    </style>

</body>
</html>