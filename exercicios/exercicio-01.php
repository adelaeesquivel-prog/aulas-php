<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio-01</title>
    <style>
        .titulo{
            border:  solid 2px;
            padding: 2px;
            color: blue;
          }
        
    </style>
</head>
<body>



    <h1 class="titulo">Criando variaveis e constantes</h1>
<?php
   $data = "29/07/2026";
   $nome = "Alice";
   $curso = "Tecnico de informática para internet";
   $cargaHoraria = 1200;
   $limiteDeFalta = $cargaHoraria/4 ;


   echo "<p> A aluna $nome está fazendo no dia $data  o curso de $curso
    que tem a seguinte carga horaria $cargaHoraria , e o curso tem um limite de faltas
    sendo $limiteDeFalta </p>";
?>


</body>
</html>