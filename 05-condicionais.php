<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .comprar { color: red ;}
        .normal { color: blue; }
    </style>
</head>
<body>
    <h1>Trabalhando com estruturas condicionais</h1>
    <hr>
    <!-- Lembrete: ao usar condicionais , muitas vezes também usaremos operadores relacionais:
     <,<=,>,>=,==,!=,===,!== -->

    <h2>Condicional SIMPLES: <code>if</code></h2>
<?php 
   $numero = 50;
   if ($numero > 10){
    echo "<p>$numero é maior que 10.</p>";
   }

   //Estrutura abreviada (sem chaves)
   if ($numero > 10) echo "<p>$numero é maior que 10.</p>";

   //Estrutura alternativa (sem chaves com : e endif)
   if($numero>10):
    echo "<p>$numero é maior que 10.</p>";
   endif;
?>
 <hr>
 <h2>Condicional COMPOSTA: <code>if/else</code></h2>

<?php 
$produto = "Ultrabook";
$qtdEmEstoque = 3;
$qtdCritica = 5; 
?>
   <h3><?= $produto ?></h3>
   <p><b>Quantidade em estoque: </b><?= $qtdEmEstoque ?></p>

<?php 
if ($qtdEmEstoque < $qtdCritica) {
    echo "<p class=\"comprar\"> É necessario comprar/repor</p>";
} else {
   echo"<p class=\"normal\"> Estoque normal.</p>";
}



?>

    
</body>
</html>