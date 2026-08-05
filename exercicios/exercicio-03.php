<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio-03: condicionais </title>
    <style>
        section{
            padding: 4px;
            margin: auto;
            width: 50%;
            border: solid 1px;
        }
        .infantil{background-color: aqua;}
        .adulto{ background-color: blueviolet;}
        .idoso{background-color: chartreuse;}
        
    </style>
</head>
<body>
    <h1>Ingressos do show</h1>

<?php
$idade = 80;
$preco = "";
$categoria = "";


if  ($idade < 12) {
  $categoria = "infantil";
  $preco = 25;
  $estilo = "infantil";

}elseif($idade < 60){
    $categoria = "adulto";
    $preco = 40;
    $estilo= "adulto";
}else {
    $categoria = "Melhor Idade";
    $preco = 20;
     $estilo= "idoso";
}
?>

<!-- Veja: usamos php para definir a classe -->
<section class="<?= $estilo?>">
    <h2>Categoria: <?= $categoria ?></h2>
    <p>Idade: <b> <?= $idade ?></b></p>
    <p>Preço R$: <?= number_format($preco, 2, "," , ".") ?></p>
</section>



    
</body>
</html>