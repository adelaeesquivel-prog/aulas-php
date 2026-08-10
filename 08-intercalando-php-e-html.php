<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisando PHP intercalando com HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Revisando PHP intercalado com HTML</h1>
    <hr>
<?php
$aluno ="Fulano";
const ESCOLA ="Senac Penha";

echo "<p>O aluno se chama $aluno</p>";
echo "<p>Ele estuda na escola" .ESCOLA."</p>";
?>

  <h2>Usando PHP intercalado com HTML</h2>
  <p><i>(usar PHP onde precisa)</i></p>
  <p>O aluno chama <?= $aluno ?></p>
  <p>Ele estuda na escola <?= ESCOLA ?></p>

  <hr>
  
  <h2>  Usando PHP intercalado comandos comHTML</h2>
  <?php $idade = 25; ?>    <!-- PHP aonde precisa -->

  <h3>Resultado:</h3>

<?php 
if ($idade >= 18) {
   echo "<p><b>$aluno</b>  é maior de idade</p>"; 
}else {
    echo "<p><i>$aluno</i>  é menor de idade</p>";
}
 ?>

 <h3>Resultado (usando PHP so aonde é necessario)</h3>

 <?php 
 if ($idade >= 18):
 ?>
 <p><b><?= $aluno ?></b> é maior de idade</p>
 <?php 
 else:
 ?>
 <p><i><?= $aluno ?></i> é menor de idade</p>
<?php 
endif;
?>

  <h3>Resultados (refatorados)</h3>
  <i>(veja que, mudando a logica e usando variaveis auxiliares, nem precisamos fazer as separações PHP e HTML)</i>
<?php
 if ($idade >=18){
    $htmlSaida = "<b>$aluno</b>";
    $palavra = "maior";
}else {
    $htmlSaida = "<i>$aluno</i>";
    $palavra = "menor";
}
?>
 
 <p> <?php $htmlSaida ?> é <?= $palavra ?> de idade</p>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>



    
</body>
</html>