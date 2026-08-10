<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio-01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>