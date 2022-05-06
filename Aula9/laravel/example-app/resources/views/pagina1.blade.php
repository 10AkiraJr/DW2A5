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
        <h1>Página 1 Exemplo</h1>

        <p>O nome informado foi: {{ $nome }}</p>

        @if(!empty($email))
            <p>O e-mail informado foi: {{ $email }}</p>
        @endif

        <a href="/">Volta ao home</a>
	</body>
</html>