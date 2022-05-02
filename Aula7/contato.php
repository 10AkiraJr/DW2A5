<?php 
require 'header.php'
?>
<div class="contato">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para contato</h1>
    </div>

    <form action="destino.php" method="POST">

        <div>
            <label for="Nome">Nome:</label>
            <input type="text" name="nome" id="nome" pattern="[a-z\s]+$" required>
        </div>
        
        <div>
            <label for="Email">E-mail:</label>
            <input type="text" name="email" id="email" required>
        </div>

        <div>
            <label for="Mensagem">Mensagem:</label>
            <input type="tel" id="mensagem" name="mensagem" required>
       </div>

        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>

    </form>
    
</div>
<?php 
require 'header.php'
?>