<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisando PHP intercalando com HTML</title>
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
 <?php $idade = 25; ?> //PHP aonde precisa

  <h3>Resultado:</h3>

<?php 
if ($idade >= 18) {
   echo "<p><b>$aluno</b> é maior de idade</p>"; 
}else {
    echo "<p><i>$aluno</i> é menor de idade</p>";
}
 ?>

 <h3>Resultado (usando PHP so aonde é necessario)</h3>


    
</body>
</html>