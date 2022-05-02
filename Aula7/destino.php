<?php 
require 'header.php'
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name = "autor" content = "Roberto Akira">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>

    <?php 
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);

        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d-m-Y');
        $time = date('H:i:s');

        $arquivo = fopen("C:\\xampp\\htdocs\\Aula7\\contatos\\contatos = $nome.txt", "w");
                
        echo "<p> Nome: $nome </p>";
        echo "<p> E-mail: $email </p>";
        echo "<p> Mensagem: $mensagem </p>";
        echo "<p>Data: $date - $time</p>";

        $texto = "contato via site
        nome: = $nome
        email: = $email
        mensagem: = $mensagem
        Data: = $date - $time";
        
        fwrite($arquivo, $texto);
    ?>

<form action="contato.php" method="POST">
    <button type="submit">Voltar</button>
</form>

    <style>

        body{
            color: <?php echo $textocor; ?>;
            background-color: <?php echo $fundo; ?>;
        }

    </style>

</body>
</html>
<?php 
require 'header.php'
?>