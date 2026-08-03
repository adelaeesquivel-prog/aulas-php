<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- sintaxe- geral</title>
   <!-- CSS Interno  -->
   <style>
        .exemplo{
            border: solid 4px;
            padding: 4px;

            /*Propriedade CSS cujo valor vem de um processamento PHP*/
            color: <?php echo "orange"; ?>
        }

    </style>
</head>
<body>
    <h1 class="exemplo">Trabalhando com PHP</h1>
    <hr>
    <?php
     //Geração de tags HTML
      echo " Estou estudando a linguagem PHP para Back-End";
      echo 'Este tambem é um texto/string';

      //Geração de tags e atributos HTML
      echo " <p> Esteé um paragrafo gerado via PHP</p>";
    
     //Geração de tags com atributo

      //Aspas simple fora, aspas duplas dentro
      echo '<p><abbr title="HyperText Preprocessor">PHP</abbr>
      é uma linguagem popular</p>';

      //Aspas duplas fora, aspas simples dentro
      echo "<p><abbr title='HyperText Preprocessor'>PHP</abbr>
      é uma linguagem popular</p>";

      //aspas duplas fora,aspas duplas com escape"\" dentro
      echo "<p><abbr title=\"HyperText Preprocessor\">PHP</abbr>
      é uma linguagem popular</p>";
    ?>
    <script>
        const tituloH1 = document.querySelector('h1');
        tituloH1.addEventListener("click", function(){
            //  O conteudo do alert foi gerado via  PHP
            alert("<?php  echo "Olá PHP e JavaScript!";?>");
        });
    </script>
</body>
</html>