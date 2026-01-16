<!--PHP code-->
    <?php
        // Define os números que serão ultilizados
        $Numero1 = 30;
        $Numero2 = 7;
        // ---------------------------------------

        // Atribui cada operação a uma variável própia
            // Soma
            $Soma = $Numero1 + $Numero2;
            // -------------------------------

            // Subtração
            $Subtracao = $Numero1 - $Numero2;
            // -------------------------------

            // Multiplicação
            $Multiplicacao = $Numero1 * $Numero2;
            // -------------------------------

            // Divisisão
            $Divisao = $Numero1 / $Numero2;
            // -------------------------------

            // Resto da divisão
            $Resto = $Numero1 % $Numero2;
            // -------------------------------
        // ---------------------------------------
    ?>
<!--PHP code-->

<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Operadores em PHP</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <!--HTML code--> 
        <h1>👑 Jesus is King 👑</h1>
        <h2>Code by - @evertin_bg</h2>
        <h3>👉 My <a href="https://github.com/Everton-Bigoni-Jr" target="_blank">GitHub</a></h3>
        <hr>
    
        <div class="container">
            <div class="card">
                
                <div class="card-header">
                    <h1 class="text-center">Exemplo de Operadores em PHP</h1>
                </div>
                
                <div class="card-body">
                    <h3>Operadores Aritméticos:</h3>

                    <p>Soma: <?php echo "$Numero1 + $Numero2" ?> = <span class="resultado">Resultado da soma é: <?php echo $Soma ?> </span></p>
                    <p>Subtração: <?php echo "$Numero1 - $Numero2" ?> = <span class="resultado">Resultado da subtração é: <?php echo $Subtracao ?> </span></p>
                    <p>Multiplicação: <?php echo "$Numero1 X $Numero2" ?> = <span class="resultado">Resultado da multiplicação é: <?php echo $Multiplicacao ?> </span></p>
                    <p>Divisão: <?php echo "$Numero1 / $Numero2" ?> = <span class="resultado">Resultado da divisão é: <?php echo $Divisao ?> </span></p>
                    <p>Resto da Divisão: <?php echo "$Numero1 % $Numero2" ?> = <span class="resultado">Resto da divisão é: <?php  echo $Resto ?></span></p>
                </div>
                
                <div class="card-footer text-muted text-center">
                    Exemplo desenvolvido por: Everton Bigoni Junior :)
                </div>
            </div>
        </div>
    <!--HTML code-->
</body>
</html>