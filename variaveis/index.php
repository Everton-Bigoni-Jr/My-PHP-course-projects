<!--PHP code-->
  <?php
        // Variável do tipo string. Ela aceita uma série de caracteres, seu valor deve ser informado entre aspas.
        $nome = "Everton Bigoni Junior";
        $curso = "PHP - Básico";
        //----------------------------------------
        
        // Variável do tipo float, ela aceita números decimais, recomendada para se trabalhar com moeda.
        $mensalidade = 124.90;
        //----------------------------------------

        // Variável do tipo inteiro, não aceita múmeros decimais.
        $aulas = 10;
        //----------------------------------------
  ?>
<!--PHP code-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>

<!--HTML code--> 
    <h1>👑 Jesus is King 👑</h1>
    <h2>Code by - @evertin_bg</h2>
    <h3>👉 My <a href="https://github.com/Everton-Bigoni-Jr" target="_blank">GitHub</a></h3>
    <hr>
<!--HTML code-->

<!-- Exibindo informações (PHP + HTML)-->
    <h1>Olá, <?php echo $nome ?></h1>
    <h2>Você está matriculado no curso <?php echo $curso ?>, sua mensalidade é de: R$ <?php echo $mensalidade ?> e você tem ainda <?php echo $aulas ?></h2>
<!-- Exibindo informações (PHP + HTML)-->
 
</body>
</html>