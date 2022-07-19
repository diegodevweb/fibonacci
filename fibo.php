<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Fibonacci</title>
</head>

<body>
    <section id="secPhp">
        <?php
            $valor = $_GET["numero"];
            echo "O valor digitado é $valor <br>";
            $t1 = 0;
            $t2 = 1;

            for ($c = 0; $c < 14; $c++) {

                echo " ".$t1;
                $tn = $t1 + $t2;
                $t1 = $t2;
                $t2 = $tn;
        
            }

            if (($valor == null) || ($valor > 100)) {
                echo "<br>Erro! Digite um número válido!";
            } else if (($valor == 0) || ($valor == 1)) {
                echo "<br>O número digitado ($valor) pertence à sequência de Fibonacci.";
            } else if (($valor == 2) || ($valor == 3)) {
                echo "<br>O número digitado ($valor) pertence à sequência de Fibonacci.";
            } else if (($valor == 5) || ($valor == 8)) {
                echo "<br>O número digitado ($valor) pertence à sequência de Fibonacci.";
            } else if (($valor == 13) || ($valor == 21)) {
                echo "<br>O número digitado ($valor) pertence à sequência de Fibonacci.";
            } else if (($valor == 34) || ($valor == 55)) {
                echo "<br>O número digitado ($valor) pertence à sequência de Fibonacci.";
            } else if ($valor == 89) {
                echo "<br>O número digitado ($valor) pertence à sequência de Fibonacci.";
            } else {
                echo "<br>O número digitado ($valor) <strong>NÃO</strong> pertence à sequência de Fibonacci.";
            }
            
            ?>
            
            <br>
            <a href="index.html">Voltar</a>
        </section>
</body>

</html>