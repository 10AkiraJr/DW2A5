<?php 

use Claudsonm\CepPromise\CepPromise;

require 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang = "pt-br">
	<head>
    	<title> </title>
        <meta charset = "UTF-8">
        <meta name = "autor" content = "Roberto Akira">
        <meta name = "descrição" content = "Tutorial da Web para HTML">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <meta name = "palavras-chave" content = "HTML, CSS, JavaScript">        
        <meta name = "robôs" content = "index">        
    </head>
	<body>
        <div class="contato">

            <h1>Exemplo CEP com Composer</h1>

            <form class="row g-3" action="exemplo.php" method="POST">

                <div class="col-3">
                    <div class="mb-2">
                        <label for="cep">CEP:</label>
                        <input type="number" name="cep" id="cep" required autofocus placeholder="Somente números">
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>
                    </div>
                </div>

            </form>

        </div>
    </body>
</html>

<?php

    if(isset($_POST["cep"])){

        $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);

        $address = CepPromise::fetch($cep);

        echo "<h2>CEP: $address->zipCode</h2>";
        echo "<p>Rua: $address->street</p>";
        echo "<p>Bairro: $address->district</p>";
        echo "<p>Cidade: $address->city</p>";
        echo "<p>Estado: $address->state</p>";
    }
?>