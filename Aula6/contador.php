<!DOCTYPE html>
<html lang = "pt-br">
	<body>

        <?php

            $numInicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_NUMBER_INT);
            $numFinal = filter_input(INPUT_POST, "final", FILTER_SANITIZE_NUMBER_INT);
            $numIncremento = filter_input(INPUT_POST, "incremento", FILTER_SANITIZE_NUMBER_INT);

            if($numInicio < $numFinal){

            echo "<h1>Parâmetros informados:</h1>";
            echo "<p>Início: $numInicio </p>";
            echo "<p>Final: $numFinal </p>";
            echo "<p>Incremento: $numIncremento </p>";

                for ($x = $numInicio; $x <= $numFinal; $x+=$numIncremento){

                    echo $x.", ";
                }

            }
            if($numInicio > $numFinal){

            echo "<h1>Parâmetros informados errado:</h1>";
            echo "<p>Início: $numInicio </p>";
            echo "<p>Final: $numFinal </p>";
            echo "<p>Incremento: $numIncremento </p>";

                for ($x = $numInicio; $x >= $numFinal; $x-=$numIncremento){
                                    
                    echo $x.", ";
                }

            }

        ?>
        
	</body>
</html>  
